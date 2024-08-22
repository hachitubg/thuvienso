@extends('backend.layouts.master')
@section('title')
Quản Trị - Ngành Học
@endsection
@section('feature-title')
Danh Sách Ngành Học
@endsection
@section('content')

<div style="margin-bottom: 20px;">
    <a href="{{ url('admin/nganh/create') }}" class="btn btn-primary">Thêm mới</a>
    <a href="{{ url('admin/nganh/print') }}" class="btn btn-success">In Danh Sách</a>
</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-success" >
            <th>Mã Ngành</th>
            <th>Tên Ngành</th>     
            <th>Tên Khoa</th>    
            <th colspan="2">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listNganh as $nganh)
        <tr>
            <td>{{$nganh->manganh}}</td>
            <td>{{$nganh->tennganh}}</td>
            <td>{{$nganh->khoa->tenkhoa}}</td>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/nganh/edit', ['id'=>$nganh->id]) }}"><i class="far fa-edit"></i></a>
                
            </td>
            <td>
                <form name="frmDeleteNganh" id="frmDeleteNganh" method="post" action="{{ url('admin/nganh', ['id' => $nganh->id]) }}">
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
                    $(this).parent('#frmDeleteNganh').submit();
                }
                })
        })
    })
</script>
@endsection