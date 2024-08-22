@extends('print.layout.paper')

@section('title')
In Danh Sách Mượn Sách
@endsection

@section('paper-size')
A4
@endsection

@section('paper-class')
A4
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="text-align: left;vertical-align: middle;">
                    <span style="font-weight: bold;font-size: 1.2em;">ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI</span> </br>
                    <span style="font-size: 0.9em;"><b>Địa Chỉ</b>:  54 Triều Khúc, Thanh Xuân Nam,Thanh Xuân, Hà Nội</span> </br>
                    <span style="font-size: 0.9em;"><b>Hotline</b>:  0243.552.6713 - 0243.552.6714</span> </br>
                    <span style="font-size: 0.9em;"><b>Email</b>:    infohn@utt.edu.vn</span> </br>
                    <span style="font-size: 0.9em;">-----------------------------</span> </br>
                </td>
                <td style="text-align: right;vertical-align: middle;">
                    <span style="font-weight: bold;font-size: 1em;">Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam</span> </br>
                    <span style="font-size: 1em;padding-right: 30px;">Độc lập - Tự do - Hạnh phúc</span> </br></br>
                    <span style=" font-size: 1em;">.........,Ngày......Tháng......Năm......</span> </br>
                    <span style=" padding-right: 70px;">-------------------</span> </br>
                </td>
            </tr>
        </table>

        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="text-align: center;">
                    <span style="font-weight: bold;font-size: 1.2em;">DANH SÁCH ĐỌC GIẢ ĐÃ MƯỢN SÁCH</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Mượn</th>
                <th>Thông Tin đọc giả</th>
                <th>Thông Tin thủ thư</th>
                <th>Ngày Mượn</th>
                <th>Ngày dự định trả</th>
                <th>Thông tin tóm tắt sách</th>
            </tr>
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
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection