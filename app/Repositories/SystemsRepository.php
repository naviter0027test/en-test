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
}
