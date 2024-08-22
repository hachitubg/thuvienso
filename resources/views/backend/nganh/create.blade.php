@extends('backend.layouts.master')

@section('title')
Quản Trị - Thêm mới Ngành
@endsection

@section('feature-title')
Thêm mới Ngành
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

<form name="frmCreateNganh" id="frmCreateNganh" method="post" action="{{ url('admin/nganh/store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="manganh">Mã Ngành</label>
    <input type="text" class="form-control" id="manganh" name="manganh" aria-describedby="manganhHelp" placeholder="Nhập mã ngành" value="{{ old('manganh') }}">
  </div>

  <div class="form-group">
    <label for="tennganh">Tên Ngành</label>
    <input type="text" class="form-control" id="tennganh" name="tennganh" aria-describedby="tennganhHelp" placeholder="Nhập Tên ngành" value="{{ old('tennganh') }}">
  </div> 

  <div class="form-group">
    <label for="khoa_id">Khoa</label>
    <select id="khoa_id" name="khoa_id" class="form-control">
      @foreach($listKhoa as $khoa)
        @if(old('khoa_id') == $khoa->id)
        <option value="{{ $khoa->id }}" selected>{{ $khoa->tenkhoa }}</option>
        @else
        <option value="{{ $khoa->id }}">{{ $khoa->tenkhoa }}</option>
        @endif
      @endforeach
    </select>
  </div>

  <a class="btn btn-primary" href="{{ url('admin/nganh') }}" class="btn">Quay về</a>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmCreateNganh").validate({
      rules: {
        manganh: {
          required: true,
          minlength: 3,
          maxlength: 20
        },
        tennganh: {
          required: true,
          minlength: 3,
          maxlength: 500
        },
      },
      messages: {
        manganh: {
          required: "Vui lòng nhập mã ngành",
          minlength: "Mã ngành phải có ít nhất 3 ký tự",
          maxlength: "Mã ngành không được vượt quá 20 ký tự"
        },
        tennganh: {
          required: "Vui lòng nhập tên ngành",
          minlength: "Tên ngành phải có ít nhất 3 ký tự",
          maxlength: "Tên ngành không được vượt quá 500 ký tự"
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