@extends('backend.layouts.master')

@section('title')
Quản Trị - Danh Sách Đọc Giả Mượn Sách
@endsection

@section('feature-title')
Danh Sách Đọc Giả Mượn Sách
@endsection

@section('content')
<a href="{{ url('admin/muonsach/create') }}" class="btn btn-primary">Thêm mới</a>
<a href="{{ url('admin/muonsach/printdg') }}" class="btn btn-success">In danh sách</a>
<table class="table table-bordered table-striped ">
    <thead>
        <tr class="table-success">
            <th>Mã Đọc Giả</th>
            <th>Tên Đọc Giả</th>
            <th>Chức Vụ</th>
            <th>Giới Tính</th>
            <th>Năm Sinh</th>
            <th>Địa Chỉ</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Tổng số sách đã mượn</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listMuonsach as $muonsach)
        <tr>
            <td>{{ $muonsach->madocgia }}</td>
            <td>{{ $muonsach->tendocgia }}</td>
            <td> {{ $muonsach->chucvu }}</td>
            <td>{{ $muonsach->gioitinh }}</td>
            <td>{{ $muonsach->namsinh }}</td>
            <td>{{ $muonsach->diachi }}</td>
            <td>{{ $muonsach->sdt }}</td>
            <td>{{ $muonsach->email }}</td>
            <td>{{ $muonsach->TongSoSach }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection