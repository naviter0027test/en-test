<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Repositories\QuestionRepository;
use App\Repositories\ResultRepository;

class ResultController extends Controller
{
    public function lists(Request $request) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $resultRepository = new ResultRepository();
        $params = $request->all();
        $result = $resultRepository->lists($params);
        return view('admin.result.index', $result);
    }
}
