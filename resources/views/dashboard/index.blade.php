@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h4 class="text-left">Dashboard</h4>

            </div>
        </section>
        <div class="container">
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
                                            <span class="info-box-text">CPU Traffic</span>
                                            <span class="info-box-number">
                                                10
                                                <small>%</small>
                                            </span>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1"><i
                                                class="fas fa-thumbs-up"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Likes</span>
                                            <span class="info-box-number">41,410</span>
                                        </div>

                                    </div>

                                </div>


                                <div class="clearfix hidden-md-up"></div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1"><i
                                                class="fas fa-shopping-cart"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Sales</span>
                                            <span class="info-box-number">760</span>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-warning elevation-1"><i
                                                class="fas fa-users"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">New Members</span>
                                            <span class="info-box-number">2,000</span>
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
                                    <canvas id="myChart" height="475"
                                        style="height: 300px; display: block; width: 676px;" width="845"
                                        class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    rgregt
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/jquery.twbsPagination.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
