<?php

namespace App\Repositories;

use App\Systems;

class SystemsRepository
{
    public function checkPassword($pass) {
        $sys = Systems::where('name', '=', 'pass')->first();
        if(isset($sys->id) && $sys->value == md5($pass)) {
            return true;
        }
        return false;
    }

    public function getExamInfo() {
        $result = [
            'result' => true,
            'data' => [
                'chNameIsRequire' => 'N',
                'enNameIsRequire' => 'N',
                'birthdayIsRequire' => 'N', 
                'telIsRequire' => 'N', 
                'emailIsRequire' => 'N', 
                'departmentIsRequire' => 'N', 
                'staffIsRequire' => 'N', 
                'perPage' => '10', 
                'finishText' => '',
            ],
            'msg' => 'success',
        ];

        try {
            $systems = Systems::whereIn('name', ['chNameIsRequire', 'enNameIsRequire', 'birthdayIsRequire', 'telIsRequire', 'emailIsRequire', 'departmentIsRequire', 'staffIsRequire', 'perPage', 'finishText'])
                ->get();
            if(count($systems) > 0) {
                $requires = $systems->toArray();
                $data = [];
                foreach($requires as $require) {
                    $data[$require['name']] = $require['value'];
                }
                $result['data'] = $data;
            }
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }

    public function saveExamInfo($params) {
        $result = [
            'result' => true,
            'msg' => 'success'
        ];

        try {
            $chNameIsRequire = Systems::where('name', '=', 'chNameIsRequire')
                ->first();
            $chNameIsRequire->value = isset($params['chNameIsRequire']) ? 'Y' : 'N';
            $chNameIsRequire->save();

            $enNameIsRequire = Systems::where('name', '=', 'enNameIsRequire')
                ->first();
            $enNameIsRequire->value = isset($params['enNameIsRequire']) ? 'Y' : 'N';
            $enNameIsRequire->save();

            $birthdayIsRequire = Systems::where('name', '=', 'birthdayIsRequire')
                ->first();
            $birthdayIsRequire->value = isset($params['birthdayIsRequire']) ? 'Y' : 'N';
            $birthdayIsRequire->save();

            $telIsRequire = Systems::where('name', '=', 'telIsRequire')
                ->first();
            $telIsRequire->value = isset($params['telIsRequire']) ? 'Y' : 'N';
            $telIsRequire->save();

            $emailIsRequire = Systems::where('name', '=', 'emailIsRequire')
                ->first();
            $emailIsRequire->value = isset($params['emailIsRequire']) ? 'Y' : 'N';
            $emailIsRequire->save();

            $departmentIsRequire = Systems::where('name', '=', 'departmentIsRequire')
                ->first();
            $departmentIsRequire->value = isset($params['departmentIsRequire']) ? 'Y' : 'N';
            $departmentIsRequire->save();

            $staffIsRequire = Systems::where('name', '=', 'staffIsRequire')
                ->first();
            $staffIsRequire->value = isset($params['staffIsRequire']) ? 'Y' : 'N';
            $staffIsRequire->save();

            $perPage = Systems::where('name', '=', 'perPage')
                ->first();
            $perPage->value = isset($params['perPage']) ? 'Y' : 'N';
            $perPage->save();

            $finishText = Systems::where('name', '=', 'finishText')
                ->first();
            $finishText->value = isset($params['finishText']) ? $params['finishText'] : '';
            $finishText->save();
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        $examInfo = $this->getExamInfo();
        $result['data'] = $examInfo['data'];

        return $result;
    }

    public function passUpdate($params) {
        $result = [
            'result' => true,
            'msg' => 'success'
        ];

        try {
            $pass = Systems::where('name', '=', 'pass')
                ->first();
            $pass->value = md5($params['pass']);
            $pass->save();
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }

        return $result;
    }
}
