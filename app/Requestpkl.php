<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestpkl extends Model
{
    protected $table = 'request_pkl';
    public $timestamps = false;

    public function Users()
    {
      return $this->belongsTo('App\User','user_id','id');
    }

}
