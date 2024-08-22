@extends('backend.layouts.master')
@section('title')
Quản Trị - Thêm Mới Khoa
@endsection
@section('feature-title')
Thêm Mới Khoa
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
<form name="frmCreateKhoa" id="frmCreateKhoa" method="post" action="{{ url('admin/khoa/store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="makhoa">Mã Khoa</label>
    <input type="text" class="form-control" id="makhoa" name="makhoa" aria-describedby="makhoaHelp" placeholder="Nhập mã Khoa . . .">
    
  </div>
  <div class="form-group" >
    <label for="tenkhoa">Tên Khoa</label>
    <input type="text" class="form-control" id="tenkhoa" name="tenkhoa" aria-describedby="tenkhoaHelp" placeholder="Nhập tên Khoa . . .">
    
  </div>
  <a href="{{ url('admin/khoa') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmCreateKhoa").validate({
      rules: {
        makhoa: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        tenkhoa: {
          required: true,
          minlength: 3,
          maxlength: 500
        },
      },
      messages: {
        makhoa: {
          required: "Vui lòng nhập mã Khoa",
          minlength: "Mã Khoa phải có ít nhất 3 ký tự",
          maxlength: "Mã Khoa không được vượt quá 50 ký tự"
        },
        tenkhoa: {
          required: "Vui lòng nhập tên Khoa",
          minlength: "Tên Khoa phải có ít nhất 3 ký tự",
          maxlength: "Tên Khoa không được vượt quá 500 ký tự"
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