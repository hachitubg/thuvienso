@extends('backend.layouts.master')

@section('title')
Quản Trị - Sửa Thông Tin Sách
@endsection

@section('feature-title')
Sửa Thông Tin Sách
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

<form name="frmEditSach" id="frmEditSach" method="post" action="{{ url('admin/sach/update', ['id' => $sach->id]) }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="masach">Mã Sách</label>
    <input type="text" class="form-control" id="masach" name="masach" aria-describedby="masachHelp" placeholder="Nhập mã sách  " value="{{ old('masach', $sach->masach) }}">
  </div>

  <div class="form-group">
    <label for="tensach">Tên Sách</label>
    <input type="text" class="form-control" id="tensach" name="tensach" aria-describedby="tensachHelp" placeholder="Nhập Tên sách " value="{{ old('tensach', $sach->tensach) }}">
  </div>

  <div class="form-group">
    <label for="noidungsach">Nội Dung Sách</label>
    <textarea class="form-control" id="noidungsach" name="noidungsach" aria-describedby="noidungsachHelp" placeholder="Nhập nội dung sách">{{ old('noidung', $sach->noidung) }}</textarea>
  </div>

  <div class="form-group">
    <label for="tentacgia">Tên Tác Giả</label>
    <input type="text" class="form-control" id="tentacgia" name="tentacgia" aria-describedby="tentacgiaHelp" placeholder="Nhập Tên tác giả" value="{{ old('tentacgia', $sach->tentacgia) }}">
  </div>

  <div class="form-group">
    <label for="namxuatban">Năm Xuất Bản</label>
    <input type="number" class="form-control" id="namxuatban" name="namxuatban" aria-describedby="namxuatbanHelp" placeholder="Nhập năm xuất bản" value="{{ old('namxuatban', $sach->namxuatban) }}">
  </div>
  
  <div class="form-group">
    <label for="anh">Ảnh bìa</label>
    <img src="{{ asset('storage/uploads/'. $sach->anh) }}" width="80px" height="80px"/>
    <input type="file" class="form-control" id="anh" name="anh" aria-describedby="anhHelp" accept=".jpg, .png">
  </div>

  <div class="form-group">
    <label for="anh">File Sách</label>
    <input type="file" class="form-control" id="file_sach" name="file_sach" aria-describedby="anhHelp" accept=".pdf">
  </div>

  <div class="form-group">
    <label for="theloai_id">Thể loại sách</label>
    <select id="theloai_id" name="theloai_id" class="form-control">
      @foreach($listTheloai as $theloai)
        @if(old('theloai_id', $sach->theloai_id) == $theloai->id)
        <option value="{{ $theloai->id }}" selected>{{ $theloai->tentheloai }}</option>
        @else
        <option value="{{ $theloai->id }}">{{ $theloai->tentheloai }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="nxb_id">Chuyên ngành</label>
    <select id="nxb_id" name="nxb_id" class="form-control">
      @foreach($listNxb as $nxb)
      <option value="{{ $nxb->id }}">{{ $nxb->tennxb }}</option>
      @endforeach
    </select>
  </div>
  <a href="{{ url('admin/sach') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
  $(document).ready(function() {
    // Khởi tạo CKEditor cho textarea Nội Dung Sách
    CKEDITOR.replace('noidungsach');
    
    $("#frmEditSach").validate({
      rules: {
        masach: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        tensach: {
          required: true,
          minlength: 3,
          maxlength: 500
        },
        tentacgia: {
          required: true,
          minlength: 3,
          maxlength: 200
        },
        theloai_id: {
          required: true
        },
        nxb_id: {
          required: true
        },
        noidungsach: {
          required: true,
          minlength: 100
        },
        namxuatban: {
          required: true,
          minlength: 4,
          maxlength: 4
        },
      },
      messages: {
        masach: {
          required: "Vui lòng nhập mã sách",
          minlength: "Mã sách phải có ít nhất 3 ký tự",
          maxlength: "Mã sách không được vượt quá 50 ký tự"
        },
        tensach: {
          required: "Vui lòng nhập tên sách",
          minlength: "Tên sách phải có ít nhất 3 ký tự",
          maxlength: "Tên sách không được vượt quá 500 ký tự"
        },
        tentacgia: {
          required: "Vui lòng nhập tên tác giả",
          minlength: "Tên tác giả phải có ít nhất 3 ký tự",
          maxlength: "Tên tác giả không được vượt quá 200 ký tự"
        },
        theloai_id:{
          required: "Vui lòng chọn thể loại"
        },
        nxb_id: {
          required: "Vui lòng chọn chuyên ngành"
        },
        noidungsach: {
          required: "Vui lòng điền nội dung sách",
          minlength: "Nội dung sách phải có ít nhất 100 ký tự",
        },
        namxuatban: {
          required: "Vui lòng điền năm xuất bản",
          minlength: "Vui lòng nhập đúng định dạng số năm. VD: 2024",
          maxlength: "Vui lòng nhập đúng định dạng số năm. VD: 2024"
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