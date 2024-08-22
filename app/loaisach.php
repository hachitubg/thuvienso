<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisach extends Model
{
	protected $table='loaisach';
    public function danhmuc(){
    	return $this->belongsTo('App\danhmuc','madanhmuc','id');
  	}
  	  public function sach(){
    	return $this->hasMany('App\sach','madanhmuc','id');
    }
}
