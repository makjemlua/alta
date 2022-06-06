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
                                                class="fas fa-calendar"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Số thứ tự đã cấp</span>
                                            <span class="info-box-number">{{ $numberAll }}</span>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i
                                                class="fas fa-calendar-check"></i></span>
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
                                                class="fas fa-blog"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Số thứ tự đang chờ</span>
                                            <span class="info-box-number">{{ $numberWaiting }}</span>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-warning elevation-1"><i
                                                class="fas fa-calendar-times"></i></span>
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
                                <div class=""
                                    style="position: absolute; top:-1px; right:0; width:230px;z-index: 999;">
                                    <div class="form-group">
                                        <label for="select_chart" class="col-sm-6 control-label">Xem theo</label>
                                        <div class="col-sm-6">
                                            <select name="select_chart" id="select_chart" class="form-control">
                                                <option id="select_chart_" value="1"
                                                    data-url="{{ route('home.index.day') }}">Ngày</option>
                                                <option id="select_chart_" value="2"
                                                    data-url="{{ route('home.index.month') }}">Tuần</option>
                                                <option id="select_chart_" value="3"
                                                    data-url="{{ route('home.index.week') }}">Tháng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="chart tab-pane active" id="revenue-chart"
                                    style="position: relative; height: 450px;">
                                    <canvas id="myChart"></canvas>

                                    <div style="position: absolute; top: 0; left: 0;">
                                        Tháng {{ $month }}/{{ $year }}
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
                                    <input type="text" name="device" value="{{round(($deviceActive/$device)*100)}}" class="dial" data-min="0"
                                        data-max="100">
                                </div>
                                <div class="col-md-4 overview-device">
                                    <div class="overview-device-number">{{$device}}</div>
                                    <div class="overview-device-name"><i class="fas fa-desktop"></i> Thiết bị</div>
                                </div>
                                <div class="col-md-6 overview-actives">
                                    <ul>
                                        <li class="overview-active">Đang hoạt động: <span>{{$deviceActive}}</span></li>
                                        <li class="overview-active">Ngưng hoạt động: <span>{{$deviceInactive}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 overview-cpn">
                            <div class="row">
                                <div class="col-md-2" class="">
                                    <input type="text" name="service" value="{{round(($serviceActive/$service)*100)}}" class="dial" data-min="0"
                                        data-max="100">
                                </div>
                                <div class="col-md-4 overview-device">
                                    <div class="overview-device-number">{{$service}}</div>
                                    <div class="overview-device-name"><i class="fas fa-comments"></i> Dịch vụ</div>
                                </div>
                                <div class="col-md-6 overview-actives">
                                    <ul>
                                        <li class="overview-active">Đang hoạt động: <span>{{$serviceActive}}</span></li>
                                        <li class="overview-active">Ngưng hoạt động: <span>{{$serviceInactive}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 overview-cpn">
                            <div class="row">
                                <div class="col-md-2" class="">
                                    <input type="text" name="number" value="{{round(($numberWaiting/$numberAll)*100)}}" class="dial" data-min="0"
                                        data-max="100">
                                </div>
                                <div class="col-md-4 overview-device">
                                    <div class="overview-device-number">{{$numberAll}}</div>
                                    <div class="overview-device-name"><i class="fab fa-elementor"></i> Cấp số</div>
                                </div>
                                <div class="col-md-6 overview-actives">
                                    <ul>
                                        <li class="overview-active">Đang chờ: <span>{{$numberWaiting}}</span></li>
                                        <li class="overview-active">Đã sử dụng: <span>{{$numberUsed}}</span></li>
                                        <li class="overview-active">Bỏ qua: <span>{{$numberMissed}}</span></li>
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
        $(function() {
            $(document).on('change', 'select', function() {
                let form_data = $('#select_chart').serialize();
                var value = $('#select_chart :selected').val();
                if (value == 1) {
                    $.ajax({
                        url: 'home/day',
                        //data: form_data,
                        type: 'GET',
                        contentType: "application/json; charset=utf-8",
                        success: function(respose) {
                            $('#revenue-chart').html(respose);
                        }
                    });
                } else if (value == 2) {
                    $.ajax({
                        url: 'home/week',
                        data: form_data,
                        type: 'GET',
                        success: function(respose) {
                            $('#revenue-chart').html(respose);
                        }
                    });
                } else if (value == 3) {
                    $.ajax({
                        url: 'home/month',
                        data: form_data,
                        type: 'GET',
                        success: function(respose) {
                            $('#revenue-chart').html(respose);
                        }
                    });
                }
            })
        });
        var datas = "{{ $dates }}";
        var dataChart = JSON.parse(datas.replace(/&quot;/g, '"'));
        var arr = Object.keys(dataChart).map(function(key) {
            return dataChart[key];
        });
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
