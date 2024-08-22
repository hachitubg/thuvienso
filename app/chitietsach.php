<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietsach extends Model
{
    protected $table ='chitietsach';
    protected $fillable = ['namxuatban', 'noidung', 'created_at'];
}
