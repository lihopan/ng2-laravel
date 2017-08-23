<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements Authenticatable{
    use AuthenticableTrait;
    protected $connection = 'mongodb';
    protected $fillable = ['name', 'email', 'password'];
}