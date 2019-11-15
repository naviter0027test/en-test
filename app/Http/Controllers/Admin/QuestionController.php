<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Questions;
use App\Repositories\QuestionRepository;

class QuestionController extends Controller
{
    public function lists(Request $request) {
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        $params = $request->all();
        $questionRepository = new QuestionRepository();
        $result = $questionRepository->lists($params);
        return view('admin.questions.index', $result);
    }

    public function createPage(Request $request) {
        return view('admin.questions.create');
    }

    public function create(Request $request) {
        $params = $request->all();
        $file = null;
        if($request->hasFile('path'))
            $file = $request->file('path');

        $questionRepository = new QuestionRepository();
        $result = $questionRepository->create($params, $file);
        if($result['result']) {
            return redirect('/admin/questions');
        }
        return redirect('/admin/questions/create');
    }

    public function edit(Request $request, $id) {
        $questionRepository = new QuestionRepository();
        $result = $questionRepository->getById($id);
        return view('admin.questions.edit', $result);
    }

    public function update(Request $request, $id) {
    }

    public function del(Request $request, $id) {
        $questionRepository = new QuestionRepository();
        $result = $questionRepository->remove($id);
        if($result['result']) {
            return redirect('/admin/questions');
        }
        return redirect('/admin/questions');
    }
}
