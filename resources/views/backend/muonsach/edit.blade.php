@extends('backend.layouts.master')

@section('title')
Quản trị - Chỉnh Sửa Mượn Sách
@endsection

@section('feature-title')
Chỉnh Sửa Mượn Sách
@endsection

@section('content')
<!-- DIV hiển thị thông báo lỗi start -->
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<!-- DIV hiển thị thông báo lỗi end -->

<form name="frmEditMuonsach" id="frmEditMuonsach" method="post" action="{{ url('admin/muonsach/update', ['id' => $muonsach->id]) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="docgia_id">Đọc Giả</label>
        <select id="docgia_id" name="docgia_id" class="form-control">
          @foreach($listDocgia as $docgia)
          @if(old('docgia_id') == $docgia->id)
          <option value="{{ $docgia->id }}" selected>{{ $docgia->tendocgia }}</option>
          @else
          <option value="{{ $docgia->id }}">{{ $docgia->tendocgia }}</option>
          @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="thuthu_id">Nhân viên</label>
        <select id="thuthu_id" name="thuthu_id" class="form-control">
          @foreach($listThuthu as $thuthu)
          @if(old('thuthu_id') == $thuthu->id)
          <option value="{{ $thuthu->id }}" selected>{{ $thuthu->tenthuthu }}</option>
          @else
          <option value="{{ $thuthu->id }}">{{ $thuthu->tenthuthu }}</option>
          @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="sach_id">Sách Mượn</label>
        <select id="sach_id" name="sach_id" class="form-control">
          @foreach($listSach as $sach)
          @if(old('sach_id') == $sach->id)
          <option value="{{ $sach->id }}" selected>{{ $sach->tensach }}</option>
          @else
          <option value="{{ $sach->id }}">{{ $sach->tensach }}</option>
          @endif
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="mamuon">Mã Mượn</label>
        <input type="text" class="form-control" id="mamuon" name="mamuon" aria-describedby="mamuonHelp" placeholder="Nhập mã mượn . . . " value="{{ old('mamuon', $muonsach->mamuon) }}">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="ngaymuon">Ngày Mượn</label>
        <input type="text" class="form-control" id="ngaymuon" name="ngaymuon" aria-describedby="ngaymuonHelp" placeholder="Vd: 30/11/2019 " value="{{ old('ngaymuon', $muonsach->ngaymuon) }}">
      </div>
    </div>   
    <div class="col-md-6">
      <div class="form-group">
        <label for="hantra">Hạn Trả</label>
        <input type="text" class="form-control" id="hantra" name="hantra" aria-describedby="hantraHelp" placeholder="Nhập hạn trả . . . " value="{{ old('hantra', $muonsach->hantra) }}">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="soluong">Số Lượng</label>
        <input type="text" class="form-control" id="soluong" name="soluong" aria-describedby="soluongHelp" placeholder="Nhập số lượng . . . " value="{{ old('soluong', $muonsach->soluong) }}">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="ngaytra">Ngày Trả</label>
        <input type="text" class="form-control" id="ngaytra" name="ngaytra" aria-describedby="ngaytraHelp" placeholder="Vd: 12/11/2019 " value="{{ old('ngaytra', $muonsach->ngaytra) }}">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="tinhtrang">Tình Trạng</label>
        <select id="tinhtrang" name="tinhtrang" class="form-control">
          @if(old('tinhtrang') == $muonsach->tinhtrang)
          <option value="{{ 0 }}" selected >Đang Mượn Sách</option>
          <option value="{{ 1 }}">Đã Trả Sách</option>
          <option value="{{ 2 }}">Quá Hạn Mượn</option>
          @else
          <option value="{{ 0 }}">Đang Mượn Sách</option>
          <option value="{{ 1 }}">Đã Trả Sách</option>
          <option value="{{ 2 }}">Quá Hạn Mượn</option>
          @endif
        </select>
      </div>
    </div>
  </div>
  <a href="{{ url('admin/muonsach') }}" class="btn btn-success">Quay về</a>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmEditMuonsach").validate({
      rules: {
        mamuon: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        ngaymuon: {
          required: true
        },
        hantra: {
          required: true
        },
        soluong: {
          required: true
        },
        ngaytra: {
          required: true
        },
        tinhtrang: {
          required: true
        },
        sach_id: {
          required: true
        },
        thuthu_id: {
          required: true
        },
        docgia_id: {
          required: true
        },
      },
      messages: {
        mamuon: {
          required: "Vui lòng nhập mã mượn sách",
          minlength: "Mã mượn phải có ít nhất 3 ký tự",
          maxlength: "Mã mượn không được vượt quá 50 ký tự"
        },
        ngaymuon: {
          required: "Vui lòng nhập ngày mượn sách"
        },
        hantra: {
          required: "Vui lòng nhập hạn trả sách"
        },
        soluong: {
          required: "Vui lòng nhập số lượng sách mượn"
        },
        ngaytra: {
          required: "Vui lòng nhập ngày trả sách"
        },
        tinhtrang: {
          required: "Vui lòng chọn tình trạng sách"
        },
        sach_id: {
          required: "Vui lòng chọn sách mượn"
        },
        thuthu_id: {
          required: "Vui lòng chọn thủ thư cho mượn sách"
        },
        docgia_id: {
          required: "Vui lòng chọn đọc giả mượn sách"
        },
      },
      errorElement: "em",
      errorPlacement: function(error, element) {
        // Thêm class `invalid-feedback` cho field đang có lỗi
        error.addClass("invalid-feedback");
        if (element.prop("type") === "checkbox") {
          error.insertAfter(element.parent("label"));
        } else {
          error.insertAfter(element);
        }
        // Thêm icon "Kiểm tra không Hợp lệ"
        if (!element.next("span")[0]) {
          $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
            .insertAfter(element);
        }
      },
      success: function(label, element) {
        // Thêm icon "Kiểm tra Hợp lệ"
        if (!$(element).next("span")[0]) {
          $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
            .insertAfter($(element));
        }
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).addClass("is-valid").removeClass("is-invalid");
      }
    });
  });
  
</script>


@endsection