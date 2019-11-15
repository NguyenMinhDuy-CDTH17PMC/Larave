<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Goicredit extends Model
{
    use SoftDeletes;
    protected $table = 'goi_credit';
}
