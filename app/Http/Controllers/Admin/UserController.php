<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Systems;
use App\Repositories\SystemsRepository;
use Session;

class UserController extends Controller
{
    public function loginPage(Request $request) {
        return view('admin.login');
    }

    public function login(Request $request) {
        $params = $request->all();
        $pass = isset($params['pass']) ? $params['pass'] : '';
        $systemRepository = new SystemsRepository();
        $isSuccess = $systemRepository->checkPassword($pass);
        if($isSuccess == true) {
            Session::put('user', true);
            return redirect('/admin/setting');
        }
        return view('admin.login');
    }

    public function logout(Request $request) {
        Session::flush();
        return redirect('/admin/login');
    }

    public function passUpdate(Request $request) {
        $params = $request->all();
        $systemRepository = new SystemsRepository();
        $result = $systemRepository->passUpdate($params);
        if($result['result'] == true) {
            return redirect('/admin/setting');
        }
        return view('admin.setting.index', $result);
    }
}
