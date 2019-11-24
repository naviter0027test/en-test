<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SystemsRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\ResultRepository;

class ExamController extends Controller
{
    public function step1(Request $request) {
        $systemsRepository = new SystemsRepository();
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $result = $systemsRepository->getExamInfo();
        return view('front.step1', $result);
    }

    public function step2(Request $request) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        return view('front.step2');
    }

    public function step3(Request $request) {
        $systemsRepository = new SystemsRepository();
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $result = $systemsRepository->getExamInfo();
        return view('front.step3', $result);
    }

    public function getQuestions(Request $request) {
        $questionRepository = new QuestionRepository();
        $result = [
            'result' => true,
            'data' => [],
            'msg' => 'success',
        ];
        try {
            $params = ['type' => 1];
            $result['data']['type1'] = $questionRepository->getQuestions($params);
            $params = ['type' => 2];
            $result['data']['type2'] = $questionRepository->getQuestions($params);
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return $result;
    }

    public function userAnswer(Request $request) {
        $resultRepository = new ResultRepository();
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $params = $request->all();
        $result['params'] = $params;
        $result = $resultRepository->create($params);
        return $result;
    }
}
