<?php

namespace App\Repositories;

use App\Questions;

class QuestionRepository
{
    public function create($params) {
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

            switch($params['type']) {
            case 1:
                $question->content = $params['content'];
                break;
            case 2:
                $question->content = '';
                break;
            }

            $question->a = '';
            $question->b = '';
            $question->c = '';
            $question->d = '';
            $question->e = '';
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
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }

    public function lists($params) {
    }
}
