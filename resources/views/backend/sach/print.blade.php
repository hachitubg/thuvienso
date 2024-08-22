@extends('print.layout.paper')

@section('title')
In danh sách Sách
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
                    <span style="font-weight: bold;font-size: 1.2em;">DANH SÁCH THÔNG TIN SÁCH</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Tên Tác Giả</th>
                <th>Thể Loại</th>
                <th>Chuyên Ngành</th>
                <th>Số Lượng Sách</th>
                <th>Trạng Thái Sách</th>
            </tr>
            @foreach($listSach as $sach)
            <tr>
                <td>{{$sach->masach}}</td>
                <td>{{$sach->tensach}}</td>
                <td>{{$sach->tentacgia}}</td>
                <td>{{$sach->theloai->tentheloai}}</td>
                <td>{{$sach->nxb->tennxb}}</td>
                <td>{{$sach->soluong}} Cuốn</td>
                @if($sach->trangthaisach == 1)
                    <td>Còn Sách</td>
                @else
                    <td>Sách đã hết</td>
                @endif
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection