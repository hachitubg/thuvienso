<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\ActivationMailer;

class PageController extends Controller
{
    public function dashboard() {
        if (request()->cookie('name') != 'admin') {
            session()->flash('error', 'Bạn không có quyền truy cập trang này.');
            return redirect('');
        }

        return view('backend.page.dashboard');
    }
}
