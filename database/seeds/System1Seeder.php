<?php

use Illuminate\Database\Seeder;
use App\Systems;

class System1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Systems::where('name', '=', 'pass')->first();
        if(isset($pass->id) == false) {
            $pass = new Systems();
            $pass->name = 'pass';
            $pass->value = md5('123456');
            $pass->save();
        }

        $chNameIsRequire = Systems::where('name', '=', 'chNameIsRequire')->first();
        if(isset($chNameIsRequire->id) == false) {
            $chNameIsRequire = new Systems();
            $chNameIsRequire->name = 'chNameIsRequire';
            $chNameIsRequire->value = 'Y';
            $chNameIsRequire->save();
        }

        $enNameIsRequire = Systems::where('name', '=', 'enNameIsRequire')->first();
        if(isset($enNameIsRequire->id) == false) {
            $enNameIsRequire = new Systems();
            $enNameIsRequire->name = 'enNameIsRequire';
            $enNameIsRequire->value = 'N';
            $enNameIsRequire->save();
        }

        $birthdayIsRequire = Systems::where('name', '=', 'birthdayIsRequire')->first();
        if(isset($birthdayIsRequire->id) == false) {
            $birthdayIsRequire = new Systems();
            $birthdayIsRequire->name = 'birthdayIsRequire';
            $birthdayIsRequire->value = 'N';
            $birthdayIsRequire->save();
        }

        $telIsRequire = Systems::where('name', '=', 'telIsRequire')->first();
        if(isset($telIsRequire->id) == false) {
            $telIsRequire = new Systems();
            $telIsRequire->name = 'telIsRequire';
            $telIsRequire->value = 'Y';
            $telIsRequire->save();
        }

        $emailIsRequire = Systems::where('name', '=', 'emailIsRequire')->first();
        if(isset($emailIsRequire->id) == false) {
            $emailIsRequire = new Systems();
            $emailIsRequire->name = 'emailIsRequire';
            $emailIsRequire->value = 'N';
            $emailIsRequire->save();
        }

        $departmentIsRequire = Systems::where('name', '=', 'departmentIsRequire')->first();
        if(isset($departmentIsRequire->id) == false) {
            $departmentIsRequire = new Systems();
            $departmentIsRequire->name = 'departmentIsRequire';
            $departmentIsRequire->value = 'N';
            $departmentIsRequire->save();
        }

        $staffIsRequire = Systems::where('name', '=', 'staffIsRequire')->first();
        if(isset($staffIsRequire->id) == false) {
            $staffIsRequire = new Systems();
            $staffIsRequire->name = 'staffIsRequire';
            $staffIsRequire->value = 'N';
            $staffIsRequire->save();
        }

        $perPage = Systems::where('name', '=', 'perPage')->first();
        if(isset($perPage->id) == false) {
            $perPage = new Systems();
            $perPage->name = 'perPage';
            $perPage->value = '10';
            $perPage->save();
        }

        $finishText = Systems::where('name', '=', 'finishText')->first();
        if(isset($finishText->id) == false) {
            $finishText = new Systems();
            $finishText->name = 'finishText';
            $finishText->value = 'hello';
            $finishText->save();
        }
    }
}
