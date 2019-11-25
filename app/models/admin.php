<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='admin';
    protected $fillable=['email','password','username','full_name'];

    public function position()
    {
        return $this->hasMany('App\position');
    }

}
