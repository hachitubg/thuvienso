<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Nxb extends Model
{
    public $timestamps = false; //Dùng để bỏ Updated_at và created_at nếu không có khi chạy sẽ bị lỗi 
    
    protected $table        = 'qltv_nxb'; //bảng
    protected $fillable     = ['manxb', 'tennxb']; // những cột có thể thay đổi và sữa 
    protected $guarded      = ['id']; //cột id không thể thay đổi
    protected $primaryKey   = 'id';
    //Tạo liên kết vs sach
    public function sach(){
        return $this->hasMany('App\Qltv_Sach', 'nxb_id', 'id'); //Một nxb có nhiều sách
    }
}
