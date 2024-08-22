@extends('backend.layouts.master')
@section('title')
    Quản Trị - Sách
@endsection
@section('feature-title')
    Danh Sách
@endsection
@section('content')
@if(Session::has('message'))
    <script>
        alert('{{ Session::get('thongbao') }}');
    </script>
@endif

<div style="margin-bottom: 20px;">
    <a href="{{ url('admin/sach/create') }}" class="btn btn-primary">Thêm mới</a>
    <a href="{{ url('admin/sach/print') }}" class="btn btn-success">In Danh Sách</a>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-success" >
            <th>Mã Sách</th>
            <th>Tên Sách</th>
            <th>Tên Tác Giả</th>
            <th>Ảnh bìa</th>
            <th>Thể Loại</th>
            <th>Chuyên Ngành</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($listSach as $sach)
        <tr>
            <td>{{$sach->masach}}</td>
            <td>{{$sach->tensach}}</td>
            <td>{{$sach->tentacgia}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $sach->anh) }}" width="80px" height="80px"/>
            </td>
            <td>{{$sach->theloai->tentheloai}}</td>
            <td>{{$sach->nxb->tennxb}}</td>
            @if($sach->trangthaisach == 1)
            @else
            @endif
            <td>
                <a class="btn btn-primary" href="{{ url('admin/sach/edit', ['id'=>$sach->id]) }}"><i class="far fa-edit"></i></a>
            </td>
            <td>
                <form name="frmDeleteSach" id="frmDeleteSach" method="post" action="{{ url('admin/sach', ['id' => $sach->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn btn-danger btn-icon-split btn-delete">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    <tbody>
</table>

{{ $users->links() }}
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function(){
        $('.btn-delete').click(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Bạn Có Chắc Xóa Không?',
                text: "Nếu bạn xóa thì dữ liệu này sẽ không phục hồi được!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Xóa Dữ liệu!',
                    'Dữ liệu của bạn đã được xóa',
                    'Thành Công'
                    )

                    //submit form
                    $(this).parent('#frmDeleteSach').submit();
                }
                })
        })
    })
</script>
@endsection