<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Nganh extends Model
{
    public $timestamps = false;
    protected $table        = 'qltv_nganh';
    protected $fillable     = ['manganh', 'tennganh'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';

    //Tạo liên kết vs docgia và thuthu
    public function docgia(){
        return $this->hasMany('App\Qltv_Docgia', 'nganh_id', 'id'); //Một ngành có nhiều đọc giả
    }

    public function thuthu(){
        return $this->hasMany('App\Qltv_Thuthu', 'nganh_id', 'id'); //Một ngành có nhiều thủ thư
    }

    public function khoa(){
        return $this->belongsTo('App\Qltv_Khoa', 'makhoa', 'id');
    }
}
