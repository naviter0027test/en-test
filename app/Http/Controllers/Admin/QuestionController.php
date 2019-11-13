<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Questions;
use App\Repositories\QuestionRepository;

class QuestionController extends Controller
{
    public function lists(Request $request) {
        $params = $request->all();
        $questionRepository = new QuestionRepository();
        $result = $questionRepository->lists($params);
        return view('admin.questions.index');
    }

    public function createPage(Request $request) {
        return view('admin.questions.create');
    }

    public function create(Request $request) {
        $params = $request->all();
        $questionRepository = new QuestionRepository();
        $result = $questionRepository->create($params);
        if($result['result']) {
            return redirect('/admin/questions');
        }
        return redirect('/admin/questions/create');
    }

    public function edit(Request $request, $id) {
    }

    public function update(Request $request, $id) {
    }
}
