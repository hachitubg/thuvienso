@extends('backend.layouts.master')

@section('title')
Quản Trị - Thêm Mới Mượn Sách
@endsection

@section('feature-title')
Thêm Mới Mượn Sách
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
<form name="frmCreateMuonsach" id="frmCreateMuonsach" method="post" action="{{ url('admin/muonsach/store') }}" enctype="multipart/form-data">
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
        <label for="thuthu_id">Thủ Thư</label>
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
  </div>
  <div class="card border-success text-white bg-gradient-primary mb-3">
    <div class="card-header bg-gradient-primary">
      <h6 class="card-subtitle mb-2">Chọn Sách Mượn</h6>
    </div>
    <div class="card-body">
      <table class="table table-bordered text-white">
        <thead>
          <tr>
            <th style="width: 40%;">Sách Mượn</th>
            <th style="width: 20%;">Mã Mượn</th>
            <th style="width: 20%;">Số Lượng</th>
            <th style="width: 20%;">Hạn Trả</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <select class="form-control" name="sach_id" id="sach_id">
                @foreach($listSach as $sach)
                <option value="{{ $sach->id }}">{{ $sach->tensach }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <input type="text" class="form-control" name="mamuon" id="mamuon" />
            </td>
            <td>
              <input type="text" class="form-control" name="soluong" id="soluong" />
            </td>
            <td>
              <input type="text" class="form-control" name="hantra" id="hantra" />
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <a href="{{ url('admin/muonsach') }}" class="btn btn-success">Quay về</a>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmCreateMuonsach").validate({
      rules: {
        mamuon: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        hantra: {
          required: true
        },
        soluong: {
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
        hantra: {
          required: "Vui lòng nhập hạn trả sách"
        },
        soluong: {
          required: "Vui lòng nhập số lượng sách mượn"
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