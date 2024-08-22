<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Docgia extends Model
{
    public $timestamps = false;
    protected $table        = 'qltv_docgia';
    protected $fillable     = ['madocgia', 'tendocgia', 'chucvu', 'gioitinh', 'namsinh', 'diachi', 'sdt', 'email', 'quequan', 'anh','khoa_id', 'nganh_id'];
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
        return $this->hasMany('App\Qltv_Muonsach', 'docgia_id', 'id'); //Một đọc giả có thể muợn nhiều sách
    }
}
