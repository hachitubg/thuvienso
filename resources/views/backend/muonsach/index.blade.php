@extends('backend.layouts.master')

@section('title')
Quản Trị - Danh Sách Mượn Sách
@endsection

@section('feature-title')
Danh Sách Mượn Sách
@endsection

@section('content')
<a href="{{ url('admin/muonsach/create') }}" class="btn btn-primary">Thêm mới</a>
<a href="{{ url('admin/muonsach/print') }}" class="btn btn-success">In danh sách</a>
<table class="table table-bordered table-striped table-responsive">
    <thead>
        <tr>
            <th>Mã Mượn</th>
            <th>Thông Tin đọc giả</th>
            <th>Thông Tin thủ thư</th>
            <th>Ngày Mượn</th>
            <th>Ngày dự định trả</th>
            <th>Thông tin tóm tắt sách</th>
            <th>Tình trạng</th>
            <th colspan="2">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listMuonsach as $muonsach)
        <tr>
            <td>{{ $muonsach->mamuon }}</td>
            <td>
                Họ tên: <b>{{ $muonsach->tendocgia }}</b><br />
                Chức vụ: {{ $muonsach->chucvu }}<br /> 
                Email: {{ $muonsach->email }}<br /> 
                Điện thoại: {{ $muonsach->sdt }}<br /> 
            </td>
            <td>
                Mã Thủ Thư: {{ $muonsach->mathuthu }}<br/>
                Họ tên: <b>{{ $muonsach->tenthuthu }}</b><br />
            </td>
            <td>{{$muonsach->ngaymuon}}</td>
            <td>{{$muonsach->ngaytra}}</td>
            <td>
                Tên sách: <b>{{ $muonsach->tensach }}</b><br />
                Tên tác giả: {{ $muonsach->tentacgia }}<br />
                Tên thể loại: {{ $muonsach->tentheloai }}<br />
                Tên chuyên ngành: {{ $muonsach->tennxb }}
            </td>
            <td>
                @if($muonsach->tinhtrang == 0)
                    <span class="badge badge-primary">Đang mượn sách</span>
                @elseif($muonsach->tinhtrang == 2)
                    <span class="badge badge-danger">Hết hạn mượn</span>
                @else
                    <span class="badge badge-success">Đã trả sách</span>
                @endif
            </td>
            <td>
                <a class="btn btn-primary" href="{{ url('admin/muonsach/edit', ['id'=>$muonsach->id]) }}"><i class="far fa-edit"></i></a>
            </td>
            <td>
                <form name="frmDeleteMuonsach" id="frmDeleteMuonsach" method="post" action="{{ url('admin/muonsach', ['id' => $muonsach->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn btn-danger btn-delete">
                            <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
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
                    $(this).parent('#frmDeleteMuonsach').submit();
                }
                })
        })
    })
</script>
@endsection