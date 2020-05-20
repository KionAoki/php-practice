<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    // 自定義資料表名稱為 'userData'
    protected $table = 'userData';
    protected $primaryKey = 'userId';
    public $timestamps = false;

}
