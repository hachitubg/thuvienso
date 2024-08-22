@extends('backend.layouts.master')
@section('title')
Quản Trị - Thủ Thư
@endsection
@section('feature-title')
Danh Sách Thủ Thư
@endsection
@section('content')
<a href="{{ url('admin/thuthu/create') }}" class="btn btn-primary">Thêm mới</a>
<a href="{{ url('admin/thuthu/print') }}" class="btn btn-success">In Danh Sách</a>
<table class="table table-bordered table-hover table-responsive">
    <thead>
        <tr class="table-success" >
            <th colspan="2">Chức Năng</th>
            <th>Mã Thủ Thư</th>
            <th>Tên Thủ Thư</th>
            <th>Ảnh</th>
            <th>Khoa</th>
            <th>Ngành</th>   
            <th>Chức Vụ</th>
            <th>Giới Tính</th>
            <th>Năm Sinh</th>
            <th>Địa Chỉ</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Quê Quán</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listThuthu as $thuthu)
        <tr>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/thuthu/edit', ['id'=>$thuthu->id]) }}"><i class="far fa-edit"></i></a>
                
            </td>
            <td>
                <form name="frmDeleteThuthu" id="frmDeleteThuthu" method="post" action="{{ url('admin/thuthu', ['id' => $thuthu->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn btn-danger btn-icon-split btn-delete">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                </form>
            </td>
            <td>{{$thuthu->mathuthu}}</td>
            <td>{{$thuthu->tenthuthu}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $thuthu->anh) }}" width="80px" height="80px"/>
            </td>
            <td>{{$thuthu->khoa->tenkhoa}}</td>
            <td>{{$thuthu->nganh->tennganh}}</td>
            <td>{{$thuthu->chucvu}}</td>
            <td>{{$thuthu->gioitinh}}</td>
            <td>{{$thuthu->namsinh}}</td>
            <td>{{$thuthu->diachi}}</td>
            <td>{{$thuthu->sdt}}</td>
            <td>{{$thuthu->email}}</td>
            <td>{{$thuthu->quequan}}</td>
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
                    $(this).parent('#frmDeleteThuthu').submit();
                }
                })
        })
    })
</script>
@endsection