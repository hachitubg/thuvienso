<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Sach extends Model
{
    public $timestamps = false;
    protected $table        = 'qltv_sach';
    protected $fillable     = ['masach', 'tensach', 'tentacgia', 'soluong', 'noidung', 'namxuatban','trangthaisach', 'anh', 'theloai_id', 'nxb_id', 'created_at'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';
    //Tạo quan hệ vs the loai và nxb
    public function theloai(){
        return $this->belongsTo('App\Qltv_Theloai', 'theloai_id', 'id');
    }
    public function nxb(){
        return $this->belongsTo('App\Qltv_Nxb', 'nxb_id', 'id');
    }
    //Tạo liên kết vs muonsach
    public function muonsach(){
        return $this->hasMany('App\Qltv_Muonsach', 'sach_id', 'id'); //Một cuốn sách có thể được mượn nhiều
    }
}
