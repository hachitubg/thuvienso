@extends('admin.admin')
@section('css')
<script src="{{ asset("ckeditor/ckeditor.js") }}"></script>
    <style>
      table tr{
        line-height: 2.5;
      }
      table tr .first_td{
      width: 150px;
      font-weight: bold;
      font-size: 120%;
    }
    table tr .second_td{
      padding-left: 30px;
    }
    .text{
      width: 820px;
      height: 40px;
    }
    </style>
@endsection
@section('')
	<li class="nav-item active" >
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản lý chi tiết sách</span></a>
    </li>
@endsection()
@section('tenbang')
	<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Chi tiết sách</a>
            </li>
            <li class="breadcrumb-item active">Thêm chi tiết</li>
	</ol>
@endsection
@section('table')
<div style="width: 1140px;margin: auto;">
    <form action="{{ route('adminsqlchitietsach/insert/post') }}" method="post">
      {{ csrf_field() }}
      <table style="width: 1000px;margin: auto;">
    <tr>
      <td colspan="2"><center><h2>Thêm chi tiết sản phẩm</h2></center></td>
    </tr>
    <tr>
      <td class="first_td"><label>Tên sách:</label></td>
      <td class="second_td"><select name="tensach"style="width: 820px;height: 40px;">
                                  @foreach($sach as $tensach)
                                        <option value="{{ $tensach->id }}">
                                     {{ $tensach->tensach }}
                                    </option>
                                  @endforeach
                                  </select></td>
    </tr>
    <tr>
      <td class="first_td"><label>Ngôn ngữ:</label></td>
      <td class="second_td"><select name="ngonngu"style="width: 820px;height: 40px;">
                                  @foreach($ngonngu as $tenngonngu)
                                        <option value="{{ $tenngonngu->id }}">
                                     {{ $tenngonngu->ten}}
                                    </option>
                                  @endforeach
                                  </select></td>
    </tr>
    <tr>
      <td class="first_td"><label>Số trang:</label></td>
      <td class="second_td"><input type="text" class="text" name="sotrang" required=""></td>
    </tr>
    <tr>
      <td class="first_td"><label>Năm xuất bản:</label></td>
      <td class="second_td"><input type="text" class="text" name="namxuatban" required=""></td>
    </tr>
    <tr>
      <td class="first_td"><label>Kích thước:</label></td>
      <td class="second_td"><input type="text" class="text" name="kichthuoc" required=""></td>
    </tr>
    <tr>
      <td class="first_td"><label>Trọng lượng:</label></td>
      <td class="second_td"><input type="text" class="text" name="trongluong" required=""></td>
    </tr>
    <tr>
      <td class="first_td"><label>Ngày phát hành:</label></td>
      <td class="second_td"><input type="text" class="text" name="ngayphathanh" required=""></td>
    </tr>
    <tr>
      <td class="first_td"><label>Nội dung:</label></td>
      <td class="second_td" ><textarea class="ckeditor" id="demo" rows="4" cols="54" name="noidung" required>
      </textarea></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center;"><br><input type="submit" value="Thêm" style="width: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" style="width: 100px;"></td>
    </tr>
  </table>
    </form>
  </div>
@endsection