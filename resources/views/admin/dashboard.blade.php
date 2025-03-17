@include('admin.blocks.header')

<div class="container body">
    <div class="main_container">
        @include('admin.blocks.sidebar')

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row" style="display: inline-block;width: 100%">
                <div class="tile_count">
                    <div class="col-md-3 col-sm-4 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Tổng số tours đang hoạt động</span>
                        <div class="count green"><i class="fa fa-sort-asc"></i> 0</div>
                    </div>
                    <div class="col-md-3 col-sm-4 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Tổng số lượt booking</span>
                        <div class="count green"><i class="fa fa-sort-asc"></i> 0</div>
                    </div>
                    <div class="col-md-3 col-sm-4 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Số người dùng đăng ký</span>
                        <div class="count green"><i class="fa fa-sort-asc"></i> 2,500</div>
                    </div>
                    <div class="col-md-3 col-sm-4 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Tổng doanh thu</span>
                        <div class="count red">0 vnđ</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <div class="x_panel tile fixed_height_320 overflow_hidden">
                        <div class="x_title">
                            <h2>Điểm đến</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="" style="width:100%">
                                <tr>
                                    <th style="width:37%;">
                                        <p>Tổng hợp danh sách tours</p>
                                    </th>
                                    <th>
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <p class="">Tên</p>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5" style="text-align: center">
                                            <p class="">Phần Trăm</p>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <canvas class="canvasDoughnut" height="140" width="140"></canvas>
                                    </td>
                                    <td>
                                        <table class="tile_info">
                                            <tr>
                                                <td><p><i class="fa fa-square red"></i>Miền Bắc</p></td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td><p><i class="fa fa-square green"></i>Miền Trung</p></td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td><p><i class="fa fa-square purple"></i>Miền Nam</p></td>
                                                <td>0%</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Đặt tour</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="echart_donut" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tours <small>được đặt nhiều nhất</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Số chỗ đã đặt</th>
                                        <th>Số chỗ còn trống</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>Tour Demo</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Đơn đặt mới</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ và tên</th>
                                        <th>Tên tours</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0</td>
                                        <td>Khách hàng Demo</td>
                                        <td>Tour Demo</td>
                                        <td>0</td>
                                        <td><span class="badge badge-warning">Chưa xác nhận</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Doanh thu theo tháng</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>

@include('admin.blocks.footer')