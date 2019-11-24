<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultDetail extends Model
{
    protected $table = 'ResultDetail';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}

