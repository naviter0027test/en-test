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

    public function detail(Request $request, $resultId) {
        $result = [
            'result' => true,
            'data' => [],
            'msg' => 'success',
        ];
        $resultRepository = new ResultRepository();
        $result['data'] = $resultRepository->getById($resultId);
        $result['detailList'] = $resultRepository->detailList($resultId);
        return view('admin.result.detail', $result);
    }

    public function excelExport(Request $request) {
        $params = $request->all();
        $resultRepository = new ResultRepository();
        $result = $resultRepository->export($params);
        return $result;
    }

    public function pdfExport(Request $request) {
        $params = $request->all();
        $resultRepository = new ResultRepository();
        $result = $resultRepository->exportPDF($params);
        return $result;
    }
}
