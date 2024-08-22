<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
     protected $table='sach';

     public function loaisach(){
     	return $this->belongsTo('App\loaisach');
     }

     public function nhaxuatban(){
          return $this->belongsTo('App\NhaXuatBan', 'manhaxuatban', 'id');
      }
}
;