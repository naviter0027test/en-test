<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use Session;

class SettingController extends Controller
{
    public function index(Request $request) {
        return view('admin.setting.index');
    }
}
