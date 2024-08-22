<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Thuthu extends Model
{
    public $timestamps = false; //Dùng để bỏ Updated_at và created_at nếu không có khi chạy sẽ bị lỗi 
    protected $table        = 'qltv_thuthu';
    protected $fillable     = ['mathuthu', 'tenthuthu', 'chucvu', 'gioitinh', 'namsinh', 'diachi', 'sdt', 'email', 'quequan', 'anh','khoa_id', 'nganh_id'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';
    //Tạo quan hệ vs nganh và khoa
    public function nganh(){
        return $this->belongsTo('App\Qltv_Nganh', 'nganh_id', 'id');
    }
    public function khoa(){
        return $this->belongsTo('App\Qltv_Khoa', 'khoa_id', 'id');
    }
    //Tạo liên kết vs muonsach
    public function muonsach(){
        return $this->hasMany('App\Qltv_Muonsach', 'thuthu_id', 'id'); //Một thử thư có thể cho muợn nhiều sách
    }
}
