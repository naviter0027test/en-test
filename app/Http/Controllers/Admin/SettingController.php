<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Repositories\SystemsRepository;
use Session;

class SettingController extends Controller
{
    public function index(Request $request) {
        return view('admin.setting.index');
    }

    public function examInfoPage(Request $request) {
        $systemsRepository = new SystemsRepository();
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $result = $systemsRepository->getExamInfo();
        return view('admin.setting.exam', $result);
    }

    public function examSavePage(Request $request) {
        $params = $request->all();
        return $params;
    }
}
