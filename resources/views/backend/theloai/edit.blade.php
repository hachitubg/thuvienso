@extends('backend.layouts.master')
@section('title')
Quản Trị - Hiệu Chỉnh Thể Loại Sách
@endsection
@section('feature-title')
Hiệu Chỉnh Thể Loại Sách
@endsection
@section('content')
<form name="frmEditTheloai" method="post" action="{{ url('admin/theloai/update',['id'=>$theloai->id]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="matheloai">Mã Thể Loại Sách</label>
    <input type="text" class="form-control" id="matheloai" name="matheloai" aria-describedby="matheloaiHelp" placeholder="Nhập mã thể loại sách . . ." value="{{ $theloai->matheloai }}">
    
  </div>
  <div class="form-group" >
    <label for="tentheloai">Tên Thể Loại Sách</label>
    <input type="text" class="form-control" id="tentheloai" name="tentheloai" aria-describedby="tentheloaiHelp" placeholder="Nhập tên thể loại sách . . ." value="{{ $theloai->tentheloai}}">
   
  </div>
  <a href="{{ url('admin/theloai/index') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection