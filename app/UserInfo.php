<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //
    protected $table = 'userData';
    protected $primaryKey = 'userId';
    public $timestamps = false;
    protected $fillable = ['userId','userName','account','pw','email'];
}
