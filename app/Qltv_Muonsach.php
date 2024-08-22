<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Muonsach extends Model
{
    public $timestamps = false;
    protected $table        = 'qltv_muonsach';
    protected $fillable     = ['mamuon', 'ngaymuon', 'hantra', 'soluong', 'ngaytra', 'tinhtrang', 'thuthu_id', 'docgia_id', 'sach_id'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';
    public function phantrang(){
    	return Qltv_Muonsach::paginate(5);
    }
    //Tạo quan hệ vs docgia, thuthu và sach
    public function thuthu(){
        return $this->belongsTo('App\Qltv_Thuthu', 'thuthu_id', 'id');
    }
    public function docgia(){
        return $this->belongsTo('App\Qltv_Docgia', 'docgia_id', 'id');
    }
    public function sach(){
        return $this->belongsTo('App\Qltv_Sach', 'sach_id', 'id');
    }
}
