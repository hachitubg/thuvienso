@extends('backend.layouts.master')

@section('title')
    Quản Trị - Người dùng
@endsection

@section('feature-title')
    Danh sách người dùng
@endsection

@section('content')
<table class="table table-bordered table-hover table-responsive" style="width: 100%; table-layout: fixed;">
    <thead>
        <tr class="table-success">
            <th style="width: 10%;">Chức Năng</th>
            <th style="width: 18%;">Tên người dùng</th>
            <th style="width: 18%;">Email</th>
            <th style="width: 18%;">Khoa</th>
            <th style="width: 18%;">Ngành</th>
            <th style="width: 16%;">Thời gian tạo tài khoản</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listDocgia as $docgia)
        <tr>
            <td style="text-align: center; vertical-align: middle;">
                <form style="display: flex; justify-content: center; align-items: center;" name="frmDeleteDocgia" id="frmDeleteDocgia" method="post" action="{{ url('admin/docgia', ['id' => $docgia->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger btn-icon-split btn-delete" style="display: flex; align-items: center; justify-content: center; height: 100%;">
                        <span class="icon text-white-50" style="display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                </form>
            </td>
            <td>{{$docgia->name}}</td>
            <td>{{$docgia->email}}</td>
            <td>{{$docgia->khoa->tenkhoa}}</td>
            <td>{{$docgia->nganh->tennganh}}</td>
            <td>{{$docgia->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
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
                    $(this).parent('#frmDeleteDocgia').submit();
                }
                })
        })
    })
</script>
@endsection