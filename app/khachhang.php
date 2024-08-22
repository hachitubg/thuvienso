<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
     protected $table='khachhang';
     protected $fillable = ['ten','name','mat_khau','sdt','diachi','mail'];
     public $timestamps = true;
     
     protected static function boot()
{
    parent::boot();

    // auto-sets values on creation
    static::creating(function ($query) {
        $query->maquyen= 1;
    });
}

     public function phanquyen(){
          return $this->belongsTo('App\phanquyen','maquyen','id');
        }

}
