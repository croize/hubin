<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'join_company';
    public $timestamps = false;

    public function Perusahaan()
    {
      return $this->belongsTo('App\Perusahaan','company_id','id');
    }

    public function User()
    {
      return $this->belongsTo('App\User','user_id','id');
    }

}
