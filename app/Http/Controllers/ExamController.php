<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SystemsRepository;

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
    }

    public function step3(Request $request) {
    }
}
