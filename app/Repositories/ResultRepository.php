<?php

namespace App\Repositories;

use App\Questions;
use App\Result;
use App\ResultDetail;
use Excel;

class ResultRepository
{
    public function create($params) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $birthdayDefault = date('Y-m-d 00:00:00', strtotime('0000-00-00'));
            $results = new Result();
            $results->nameCh = isset($params['nameCh']) ? $params['nameCh'] : '';
            $results->nameEn = isset($params['nameEn']) ? $params['nameEn'] : '';
            $results->age = 0;
            $results->gender = isset($params['gender']) ? $params['gender'] : 0;
            $results->birthday = isset($params['birthday']) && is_null($params['birthday']) == false ? $params['birthday'] : $birthdayDefault;
            $results->tel = isset($params['tel']) ? $params['tel'] : '';
            $results->email = isset($params['email']) ? $params['email'] : '';
            $results->departmentCode = isset($params['departmentCode']) ? $params['departmentCode'] : '';
            $results->staffId = isset($params['staffId']) ? $params['staffId'] : '';
            $results->sum = count($params['exam']['type1']) + count($params['exam']['type2']);

            $detailResults = $this->detailCreate($params['exam']);
            $results->yesSum = $detailResults['yesSum'];
            $results->noSum = $detailResults['noSum'];
            $results->score = $detailResults['score'];

            $results->save();

            foreach($detailResults['details'] as $detail) {
                $detail->resultId = $results->id;
                $detail->save();
            }
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }

    public function detailCreate($exam) {
        $result = [
            'yesSum' => 0,
            'noSum' => 0,
            'score' => 0,
            'details' => [],
        ];

        foreach($exam['type1'] as $typeExam) {
            $detail = new ResultDetail();
            $question = Questions::where('id', '=', $typeExam['id'])
                ->first();
            if(isset($question->id)) {
                $detail->questionId = $typeExam['id'];
                $detail->userAns = $typeExam['userAns'];
                $detail->yesAns = $question->ans;
                if($typeExam['userAns'] == $question->ans) {
                    $result['yesSum'] += 1;
                    $result['score'] += 10;
                    $detail->isCorrect = 1;
                }
                else {
                    $result['noSum'] += 1;
                    $detail->isCorrect = 0;
                }
                array_push($result['details'], $detail);
            }
        }

        foreach($exam['type2'] as $typeExam) {
            $detail = new ResultDetail();
            $question = Questions::where('id', '=', $typeExam['id'])
                ->first();
            if(isset($question->id)) {
                $detail->questionId = $typeExam['id'];
                $detail->userAns = $typeExam['userAns'];
                $detail->yesAns = $question->ans;
                if($typeExam['userAns'] == $question->ans) {
                    $result['yesSum'] += 1;
                    $result['score'] += 10;
                    $detail->isCorrect = 1;
                }
                else {
                    $result['noSum'] += 1;
                    $detail->isCorrect = 0;
                }
                array_push($result['details'], $detail);
            }
        }

        return $result;
    }

    public function lists($params) {
        $result = [
            'result' => true,
            'msg' => 'success',
            'data' => [],
            'amount' => 0,
        ];
        $nowPage = isset($params['nowPage']) ? $params['nowPage'] : 1;
        $offset = isset($params['offset']) ? $params['offset'] : 10;
        $result['nowPage'] = $nowPage;
        $result['offset'] = $offset;
        try {
            $results = Result::orderBy('id', 'desc')
                ->skip(($nowPage-1) * $offset)
                ->take($offset)
                ->get();
            if(count($results) > 0) {
                $result['data'] = $results->toArray();
                foreach($result['data'] as $i => $item) {
                    $result['data'][$i]['detailList'] = $this->detailList($item['id']);
                }
                $result['amount'] = $this->listsAmount($params);
            }
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }

    public function listsAmount($params) {
        return Result::count();
    }

    public function getById($resultId) {
        $results = Result::where('id', '=', $resultId)
            ->first();
        if(isset($results->id)) {
            $data = $results->toArray();
            if($data['birthday'] == '1970-01-01 00:00:00')
                $data['birthday'] = '';
            return $data;
        }
        return [];
    }

    public function detailList($resultId) {
        $result = [
            'details' => [],
            'type1YesSum' => 0,
            'type1NoSum' => 0,
            'type1YesScore' => 0,
            'type1NoScore' => 0,
            'type2YesSum' => 0,
            'type2NoSum' => 0,
            'type2YesScore' => 0,
            'type2NoScore' => 0,
        ];
        $details = ResultDetail::join('Questions', 'Questions.id', '=', 'ResultDetail.questionId')
            ->where('resultId', '=', $resultId)
            ->select(['ResultDetail.*', 'Questions.type'])
            ->get();
        if(count($details) > 0) {
            $result['details'] = $details->toArray();
            foreach($result['details'] as $detail) {
                switch($detail['type']) {
                case 1:
                    if($detail['isCorrect'] == 1) {
                        $result['type1YesSum'] += 1;
                        $result['type1YesScore'] += 10;
                    } else {
                        $result['type1NoSum'] += 1;
                        $result['type1NoScore'] += 10;
                    }
                    break;
                case 2:
                    if($detail['isCorrect'] == 1) {
                        $result['type2YesSum'] += 1;
                        $result['type2YesScore'] += 10;
                    } else {
                        $result['type2NoSum'] += 1;
                        $result['type2NoScore'] += 10;
                    }
                    break;
                }
            }
        }
        return $result;
    }

    public function export($params) {
        $colNamesArr = [
            '中文姓名',
            '英文姓名',
            '答題總數',
            '總分',
            '聽力成績',
            '閱讀成績',
        ];
        $result = $this->lists($params);
        $exportArr = [];
        array_push($exportArr, $colNamesArr);
        foreach($result['data'] as $res) {
            $row = [
                $res['nameCh'],
                $res['nameEn'],
                $res['sum'],
                $res['score'],
                $res['detailList']['type2YesScore'],
                $res['detailList']['type1YesScore'],
            ];
            array_push($exportArr, $row);
        }
        $xls = Excel::create('score', function($excel) use ($exportArr) {
            $excel->sheet('score', function($sheet) use ($exportArr) {
                $sheet->rows($exportArr);
            });
        });
        return $xls->export('xls');
    }
}
