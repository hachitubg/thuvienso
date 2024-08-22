@extends('backend.layouts.master')
@section('title')
Quản Trị - Khoa
@endsection
@section('feature-title')
Danh Sách Khoa
@endsection
@section('content')

@if(Session::has('message'))
    <script>
        alert('{{ Session::get('thongbao') }}');
    </script>
@endif

<div style="margin-bottom: 20px;">
    <a class="btn btn-primary" href="{{ url('admin/khoa/create') }}" >Thêm Mới</a>
    <a href="{{ url('admin/khoa/print') }}" class="btn btn-success">In danh sách</a>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-success" style="text-align: center;">
            <th>Mã Khoa</th>
            <th>Tên Khoa</th>
            <th colspan="3" >Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listKhoa as $khoa)
        <tr>
            <td>{{$khoa->makhoa}}</td>
            <td>{{$khoa->tenkhoa}}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/khoa/edit', ['id'=>$khoa->id]) }}"><i class="far fa-edit"></i></a>
            </td>
            <td>
                <form name="frmDeleteKhoa" id="frmDeleteKhoa" method="post" action="{{ url('admin/khoa', ['id' => $khoa->id]) }}">
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
                    $(this).parent('#frmDeleteKhoa').submit();
                }
                })
        })
    })
</script>
@endsection
