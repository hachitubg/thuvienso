@extends('backend.layouts.master')
@section('title')
Quản Trị - Hiệu Chỉnh Khoa
@endsection
@section('feature-title')
Hiệu Chỉnh Khoa
@endsection
@section('content')
<form name="frmEditKhoa" method="post" action="{{ route('backend.khoa.update',['id'=>$khoa->id]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="makhoa">Mã Khoa</label>
    <input type="text" class="form-control" id="makhoa" name="makhoa" aria-describedby="makhoaHelp" placeholder="Nhập mã Khoa . . ." value="{{ $khoa->makhoa }}">
    
  </div>
  <div class="form-group" >
    <label for="tenkhoa">Tên Khoa</label>
    <input type="text" class="form-control" id="tenkhoa" name="tenkhoa" aria-describedby="tenkhoaHelp" placeholder="Nhập tên Khoa . . ." value="{{ $khoa->tenkhoa}}">
   
  </div>
  <a href="{{ route('backend.khoa.index') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection