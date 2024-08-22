<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Khoa extends Model
{
    public $timestamps = false; //Dùng để bỏ Updated_at và created_at nếu không có khi chạy sẽ bị lỗi 
    
    protected $table        = 'qltv_khoa'; //bảng
    protected $fillable     = ['makhoa', 'tenkhoa']; // những cột có thể thay đổi và sữa 
    protected $guarded      = ['id']; //cột id không thể thay đổi
    protected $primaryKey   = 'id';
    //Tạo liên kết vs docgia và thuthu
    public function docgia(){
        return $this->hasMany('App\Qltv_Docgia', 'khoa_id', 'id'); //Một khoa có nhiều đọc giả
    }
    public function thuthu(){
        return $this->hasMany('App\Qltv_Thuthu', 'khoa_id', 'id'); //Một khoa có nhiều thuthu
    }
}
