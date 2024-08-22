@extends('backend.layouts.master')

@section('title')
    Quản trị hệ thống - Thư viện số UTT
@endsection

@section('feature-title')
    Quản trị hệ thống - Thư viện số UTT
@endsection

@section('content')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng số Sách đang có trong Hệ thống</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="productCountText">
                            Chưa Cập Nhật
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" id="btnRefreshProductCount">Làm mới dữ liệu</button>
            </div>
        </div>
    </div>
    <!-- Số đọc giả -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Tổng số Đọc giả đang có trong Hệ thống</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="DocgiaCountText">
                            Chưa Cập Nhật
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-danger" id="btnRefreshDocgiaCount">Làm mới dữ liệu</button>
            </div>
        </div>
    </div> -->
    <!-- mượn sách -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tổng số Đọc giả đang mượn sách</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="MuonsachCountText">
                            Chưa Cập Nhật
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" id="btnRefreshMuonsachCount">Làm mới dữ liệu</button>
            </div>
        </div>
    </div> -->
    <!-- thu thư -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tổng số thủ thư có trong hệ thống</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="ThuthuCountText">
                            Chưa Cập Nhật
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-warning" id="btnRefreshThuthuCount">Làm mới dữ liệu</button>
            </div>
        </div>
    </div> -->

</div>
<div class="row">
    <div class="col-md-6">
        <canvas id="chartOfobjChart" style="width: 100%;height: 400px;"></canvas>
    </div>
    <div class="col-md-6">
        <canvas id="chartOfobjChart1" style="width: 100%;height: 400px;"></canvas>
    </div>
</div>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện Numeraljs -->
<!-- <script src="{{ asset('vendor/Numeral.js/numeral.min.js') }}"></script> -->
<!-- Các script dành cho thư viện ChartJS -->
<script src="{{ asset('vendor/Chart.js/Chart.min.js') }}"></script>
<script>
    $(document).ready(function() {
        function getDataProductCount() {
            // Nhờ AJAX gởi request đến url /admin/api/getProductCount
            $.ajax('{{ url('admin/api/getProductCount') }}', {
                success: function(data) {
                    $('#productCountText').html(data.data[0].SoLuong + ' Quyển');
                },
                error: function() {
                    $('#productCountText').html('Không xử lý được!');
                }
            });
        };
        $('#btnRefreshProductCount').click(function(e) {
            getDataProductCount();
        });
        // Onload
        getDataProductCount();
        //Docgia

        // function getDataDocgiaCount() {
        //     // Nhờ AJAX gởi request đến url /admin/api/getProductCount
        //     $.ajax('{{ url('admin/api/getDocgiaCount') }}', {
        //         success: function(data) {
        //             $('#DocgiaCountText').html(data.data[0].SoLuong + ' Đọc giả');
        //         },
        //         error: function() {
        //             $('#DocgiaCountText').html('Không xử lý được!');
        //         }
        //     });
        // };
        // $('#btnRefreshDocgiaCount').click(function(e) {
        //     getDataDocgiaCount();
        // });
        // // Onload
        // getDataDocgiaCount();

        //Muon sach nhie

        // function getDataMuonsachCount() {
        //     // Nhờ AJAX gởi request đến url /admin/api/getProductCount
        //     $.ajax('{{ url('admin/api/getMuonsachCount') }}', {
        //         success: function(data) {
        //             $('#MuonsachCountText').html(data.data[0].SoLuong + ' Đọc giả');
        //         },
        //         error: function() {
        //             $('#MuonsachCountText').html('Không xử lý được!');
        //         }
        //     });
        // };
        // $('#btnRefreshMuonsachCount').click(function(e) {
        //     getDataMuonsachCount();
        // });
        // // Onload
        // getDataMuonsachCount();
        //thhuthu

        // function getDataThuthuCount() {
        //     // Nhờ AJAX gởi request đến url /admin/api/getProductCount
        //     $.ajax('{{ url('admin/api/getThuthuCount') }}', {
        //         success: function(data) {
        //             $('#ThuthuCountText').html(data.data[0].SoLuong + ' Thủ thư');
        //         },
        //         error: function() {
        //             $('#ThuthuCountText').html('Không xử lý được!');
        //         }
        //     });
        // };
        // $('#btnRefreshThuthuCount').click(function(e) {
        //     getDataThuthuCount();
        // });
        // // Onload
        // getDataThuthuCount();

        // Vẽ chartJS
        var objChart;
        var $chartOfobjChart = document.getElementById("chartOfobjChart").getContext("2d");
        function hdang(){
            $.ajax({
                url: '{{ url('admin/api/getStatiticsCategoryProductCount') }}',
                type: "GET",
                success: function(response) {
                    var myLabels = [];
                    var myData = [];
                    $(response.data).each(function() {
                        myLabels.push((this.TenLoaiSach));
                        myData.push(this.SoLuong);
                    });
                    myData.push(0); // creates a '0' index on the graph
                    if (typeof $objChart !== "undefined") {
                        $objChart.destroy();
                    }
                    $objChart = new Chart($chartOfobjChart, {
                        // The type of chart we want to create
                        type: "horizontalBar",
                        data: {
                            labels: myLabels,
                            datasets: [{
                                data: myData,
                                borderColor: "#9ad0f5",
                                backgroundColor: "#9ad0f5",
                                borderWidth: 1
                            }]
                        },
                        // Configuration options go here
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Báo Cáo Số Lượng Thể Loại Sách"
                            },
                        }
                    });
                }
            });
        };
        $("#btnDrawChartJs").click(function(e) {
            e.preventDefault();    
        });
        hdang();

        // Vẽ bar
        var objChart1;
        var $chartOfobjChart1 = document.getElementById("chartOfobjChart1").getContext("2d");
        function hdang1(){
            $.ajax({
                url: '{{ url('admin/api/getStatiticsCategoryProductCount') }}',
                type: "GET",
                success: function(response) {
                    var myLabels = [];
                    var myData = [];
                    $(response.data).each(function() {
                        myLabels.push((this.TenLoaiSach));
                        myData.push(this.SoLuong);
                    });
                    myData.push(0); // creates a '0' index on the graph
                    if (typeof $objChart1 !== "undefined") {
                        $objChart1.destroy();
                    }
                    $objChart1 = new Chart($chartOfobjChart1, {
                        // The type of chart we want to create
                        type: "bar",
                        data: {
                            labels: myLabels,
                            datasets: [{
                                data: myData,
                                borderColor: "#9ad0f5",
                                backgroundColor: "#9ad0f5",
                                borderWidth: 1
                            }]

                        },
                        // Configuration options go here
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Báo Cáo Số Lượng Thể Loại Sách"
                            },
                        }
                    });
                    
                }
            });
        };
        hdang1();
    });   
</script>
@endsection