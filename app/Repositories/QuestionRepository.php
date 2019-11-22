<?php

namespace App\Repositories;

use App\Questions;

class QuestionRepository
{
    public function create($params, $file = null) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $question = new Questions();
            $question->title = '';
            $question->type = $params['type'];
            $question->howMany = $params['howMany'];
            $question->ans = $params['ans'];
            $question->content = $params['type'] == 1 ? $params['content'] : '';

            $question->a = '';
            $question->b = '';
            $question->c = '';
            $question->d = '';
            $question->e = '';
            if($params['type'] == 1)
                switch($params['howMany']) {
                case 1:
                    $question->a = $params['a'];
                    break;
                case 2:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    break;
                case 3:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    $question->c = $params['c'];
                    break;
                case 4:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    $question->c = $params['c'];
                    $question->d = $params['d'];
                    break;
                case 5:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    $question->c = $params['c'];
                    $question->d = $params['d'];
                    $question->e = $params['e'];
                    break;
                }

            $question->save();

            switch($params['type']) {
            case 2:
                $ext = $file->getClientOriginalExtension();
                $question->title = 'listen_'. $question->id. ".$ext";
                $question->save();
                $file->move(config('filesystems')['disks']['uploads']['root'], $question->title);
                break;
            }
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }

    public function lists($params) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $nowPage = isset($params['nowPage']) ? $params['nowPage'] : 1;
        $offset = isset($params['offset']) ? $params['offset'] : 10;

        $questions = Questions::orderBy('id', 'desc')
            ->skip(($nowPage-1) * $offset)
            ->take($offset)
            ->get();

        $result['data'] = [];
        $result['amount'] = 0;
        $result['nowPage'] = $nowPage;
        $result['offset'] = $offset;
        if(count($questions) > 0) {
            $result['data'] = $questions->toArray();
            foreach($result['data'] as $i => $item) {
                switch($item['type']) {
                case 1:
                    $result['data'][$i]['typeShow'] = '筆試';
                    break;
                case 2:
                    $result['data'][$i]['typeShow'] = '聽力';
                    break;
                default:
                    $result['data'][$i]['typeShow'] = '';
                }
            }
            $result['amount'] = $this->listsAmount($params);
        }
        return $result;
    }

    public function listsAmount($params) {
        return Questions::count();
    }

    public function getById($id) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        try {
            $question = Questions::where('id', '=', $id)->first();
            if(isset($question->id))
                $result['data'] = $question->toArray();
            else
                $result['data'] = [];
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return $result;
    }

    public function update($id, $params, $file = null) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $question = Questions::where('id', '=', $id)->first();
            $question->howMany = $params['howMany'];
            $question->ans = $params['ans'];
            $question->content = $question->type == 1 ? $params['content'] : '';

            if($params['type'] == 1)
                switch($params['howMany']) {
                case 1:
                    $question->a = $params['a'];
                    break;
                case 2:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    break;
                case 3:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    $question->c = $params['c'];
                    break;
                case 4:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    $question->c = $params['c'];
                    $question->d = $params['d'];
                    break;
                case 5:
                    $question->a = $params['a'];
                    $question->b = $params['b'];
                    $question->c = $params['c'];
                    $question->d = $params['d'];
                    $question->e = $params['e'];
                    break;
                }

            $question->save();

            switch($params['type']) {
            case 2:
                if(is_null($file) == false) {
                    $ext = $file->getClientOriginalExtension();
                    $question->title = 'listen_'. $question->id. ".$ext";
                    $question->save();
                    $file->move(config('filesystems')['disks']['uploads']['root'], $question->title);
                }
                break;
            }
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }

    public function remove($id) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        try {
            $question = Questions::where('id', '=', $id)->first();
            $question->delete();
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return $result;
    }

    public function getQuestions($params, $howMany = 10) {
        $type = isset($params['type']) ? $params['type'] : 1;
        $questions = Questions::where('type', '=', $type)
            ->orderBy(\DB::raw('rand()'))
            ->skip(0)
            ->take($howMany)
            ->select(['id', 'type', 'title', 'content', 'a', 'b', 'c', 'd', 'e', 'howMany'])
            ->get();
        if(count($questions) > 0)
            return $questions->toArray();
        return [];
    }
}
