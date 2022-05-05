@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h4 class="text-left">Dashboard</h4>

            </div>
        </section>
        <div class="container ctn-dasboard">
            <div class="row">
                <div class="col-md-9">
                    <section class="content">
                        <div class="content-fluid">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-info elevation-1"><i
                                                class="fas fa-cog"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Số thứ tự đã cấp</span>
                                            <span class="info-box-number">{{ $numberAll }}</span>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i
                                                class="fas fa-thumbs-up"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Số thứ tự đã sử dụng</span>
                                            <span class="info-box-number">{{ $numberUsed }}</span>
                                        </div>

                                    </div>

                                </div>


                                <div class="clearfix hidden-md-up"></div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1"><i
                                                class="fas fa-shopping-cart"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Số thứ tự đang chờ</span>
                                            <span class="info-box-number">{{ $numberWaiting }}</span>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-warning elevation-1"><i
                                                class="fas fa-users"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Số thứ tự đã bỏ qua</span>
                                            <span class="info-box-number">{{ $numberMissed }}</span>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content p-0">

                                <div class="chart tab-pane active" id="revenue-chart"
                                    style="position: relative; height: 450px;">
                                    <canvas id="myChart" height="475" style="height: 300px; display: block; width: 676px;"
                                        width="845" class="chartjs-render-monitor"></canvas>
                                    <div class="" style="position: absolute; top:-1px; right:0; width:230px;">
                                        <div class="form-group">
                                            <label for="is_sale" class="col-sm-6 control-label">Xem theo</label>
                                            <div class="col-sm-6">
                                                <select name="is_sale" id="is_sale" class="form-control">
                                                    <option value="0">Ngày</option>
                                                    <option value="1">Tuần</option>
                                                    <option value="2">Tháng</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p style="font-size: 25px">Tổng quan</p>
                    <div class="overview">
                        <div class="col-md-12 overview-cpn">
                            <div class="row">
                                <div class="col-md-2" class="">
                                    <input type="text" name="device" value="75" class="dial" data-min="0" data-max="100">
                                </div>
                                <div class="col-md-3 overview-device">
                                    <div>123213</div>
                                    <div><i class="fas fa-desktop"></i> Thiết bị</div>
                                </div>
                                <div class="col-md-7">
                                    <ul>
                                        <li class="overview-active">Đang hoạt động: 435435</li>
                                        <li class="overview-active">Ngưng hoạt động: 3532</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 overview-cpn">
                            <div class="row">
                                <div class="col-md-2" class="">
                                    <input type="text" name="service" value="75" class="dial" data-min="0" data-max="100">
                                </div>
                                <div class="col-md-3 overview-device">
                                    <div>123213</div>
                                    <div><i class="fas fa-comments"></i> Dịch vụ</div>
                                </div>
                                <div class="col-md-7">
                                    <ul>
                                        <li class="overview-active">Đang hoạt động: 435435</li>
                                        <li class="overview-active">Ngưng hoạt động: 3532</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 overview-cpn">
                            <div class="row">
                                <div class="col-md-2" class="">
                                    <input type="text" name="number" value="75" class="dial" data-min="0" data-max="100">
                                </div>
                                <div class="col-md-3 overview-device">
                                    <div>123213</div>
                                    <div><i class="fab fa-elementor"></i> Cấp số</div>
                                </div>
                                <div class="col-md-7">
                                    <ul>
                                        <li class="overview-active">Đang chờ: 435435</li>
                                        <li class="overview-active">Đã sử dụng: 3532</li>
                                        <li class="overview-active">Bỏ qua: 3532</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calendar">
                        <div id="datepicker"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/jquery.twbsPagination.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
        $(function() {
            $(".dial").knob({
                'width': 40,
                'height': 40,
                'readOnly': true,
                'inputColor': '#000',
                'fgColor': '#FF7506'
            });
        });
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
