<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';

    public function tasks() {
        return $this->hasMany('App\Task', 'user_id', 'id');
    }
}
