@extends('backend.layouts.master')
@section('title')
Quản Trị - Thêm Mới Thể Loại Sách
@endsection
@section('feature-title')
Thêm Mới Thể Loại Sách
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
<form name="frmCreateTheloai" id="frmCreateTheloai" method="post" action="{{ url('admin/theloai/store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="matheloai">Mã Thể Loại Sách</label>
    <input type="text" class="form-control" id="matheloai" name="matheloai" aria-describedby="matheloaiHelp" placeholder="Nhập mã Thể Loại Sách . . .">
    
  </div>
  <div class="form-group" >
    <label for="tentheloai">Tên Thể Loại Sách</label>
    <input type="text" class="form-control" id="tentheloai" name="tentheloai" aria-describedby="tentheloaiHelp" placeholder="Nhập tên Thể Loại Sách . . .">
    
  </div>
  <a href="{{ url('admin/theloaisach') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmCreateTheloai").validate({
      rules: {
        matheloai: {
          required: true,
          minlength: 3,
          maxlength: 20
        },
        tentheloai: {
          required: true,
          minlength: 3,
          maxlength: 500
        },
      },
      messages: {
        matheloai: {
          required: "Vui lòng nhập mã thể loại sách",
          minlength: "Mã thể loại sách phải có ít nhất 3 ký tự",
          maxlength: "Mã thể loại sách không được vượt quá 20 ký tự"
        },
        tentheloai: {
          required: "Vui lòng nhập tên thể loại sách",
          minlength: "Tên thể loại sách phải có ít nhất 3 ký tự",
          maxlength: "Tên thể loại sách không được vượt quá 500 ký tự"
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