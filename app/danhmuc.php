<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
	protected $table='danhmuc';
    public function loaisach(){
    	
    	return $this->hasMany('loaisach','madanhmuc','id');
    }
}
