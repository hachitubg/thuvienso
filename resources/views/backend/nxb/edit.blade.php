@extends('backend.layouts.master')
@section('title')
Quản Trị - Hiệu Chỉnh Chuyên Ngành
@endsection
@section('feature-title')
Hiệu Chỉnh Chuyên Ngành
@endsection
@section('content')
<form name="frmEditNxb" method="post" action="{{ url('admin/nxb/update',['id'=>$nxb->id]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="manxb">Mã Chuyên Ngành</label>
    <input type="text" class="form-control" id="manxb" name="manxb" aria-describedby="manxbHelp" placeholder="Nhập mã Chuyên Ngành . . ." value="{{ $nxb->manxb }}">
    
  </div>
  <div class="form-group" >
    <label for="tennxb">Tên Chuyên Ngành</label>
    <input type="text" class="form-control" id="tennxb" name="tennxb" aria-describedby="tennxbHelp" placeholder="Nhập tên Chuyên Ngành . . ." value="{{ $nxb->tennxb}}">
   
  </div>
  <a href="{{ url('admin/nhaxuatban') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection