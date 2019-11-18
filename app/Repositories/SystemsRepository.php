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
}
