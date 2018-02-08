<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'company';
    public $timestamps = false;

    public function Pendaftaran()
    {
      return $this->hasMany('App\Pendaftaran');
    }

}
