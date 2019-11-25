<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $table='position';
    protected $fillable=['position','department','location','job_type','category','education','experience','openings','description','user_id'];

    public function admin()
    {
        return $this->belongsTo('App\admin');
    }


}
