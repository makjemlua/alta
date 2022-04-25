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
                                    <canvas id="myChart" height="475" style="height: 300px; display: block; width: 676px;"
                                        width="845" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Tổng quan</h3>
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body text-center" style="position: relative;">
                              <div id="multiRadialbar" style="min-height: 178.7px;"><div id="apexchartsu4n5ll77" class="apexcharts-canvas apexchartsu4n5ll77 apexcharts-theme-light" style="width: 131px; height: 178.7px;"><svg id="SvgjsSvg1400" width="131" height="178.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1402" class="apexcharts-inner apexcharts-graphical" transform="translate(-21.5, 0)"><defs id="SvgjsDefs1401"><clipPath id="gridRectMasku4n5ll77"><rect id="SvgjsRect1404" width="182" height="200" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasku4n5ll77"><rect id="SvgjsRect1405" width="180" height="202" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1406" class="apexcharts-radialbar"><g id="SvgjsG1407"><g id="SvgjsG1408" class="apexcharts-tracks"><g id="SvgjsG1409" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 88 17.62439024390244 A 70.37560975609756 70.37560975609756 0 1 1 87.98771713902892 17.624391315784266" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.8958048780487813" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 17.62439024390244 A 70.37560975609756 70.37560975609756 0 1 1 87.98771713902892 17.624391315784266"></path></g><g id="SvgjsG1411" class="apexcharts-radialbar-track apexcharts-track" rel="2"><path id="apexcharts-radialbarTrack-1" d="M 88 25.609756097560975 A 62.390243902439025 62.390243902439025 0 1 1 87.98911084828308 25.609757047818725" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.8958048780487813" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 25.609756097560975 A 62.390243902439025 62.390243902439025 0 1 1 87.98911084828308 25.609757047818725"></path></g><g id="SvgjsG1413" class="apexcharts-radialbar-track apexcharts-track" rel="3"><path id="apexcharts-radialbarTrack-2" d="M 88 33.59512195121951 A 54.40487804878049 54.40487804878049 0 1 1 87.99050455753722 33.595122779853185" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.8958048780487813" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 33.59512195121951 A 54.40487804878049 54.40487804878049 0 1 1 87.99050455753722 33.595122779853185"></path></g><g id="SvgjsG1415" class="apexcharts-radialbar-track apexcharts-track" rel="4"><path id="apexcharts-radialbarTrack-3" d="M 88 41.58048780487805 A 46.41951219512195 46.41951219512195 0 1 1 87.99189826679138 41.580488511887644" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.8958048780487813" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 41.58048780487805 A 46.41951219512195 46.41951219512195 0 1 1 87.99189826679138 41.580488511887644"></path></g></g><g id="SvgjsG1417"><g id="SvgjsG1422" class="apexcharts-series apexcharts-radial-series" seriesName="Apples" rel="1" data:realIndex="0"><path id="SvgjsPath1423" d="M 88 17.62439024390244 A 70.37560975609756 70.37560975609756 0 0 1 114.36316743029933 153.25112912114656" fill="none" fill-opacity="0.85" stroke="rgba(0,143,251,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.9853658536585375" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="158" data:value="44" index="0" j="0" data:pathOrig="M 88 17.62439024390244 A 70.37560975609756 70.37560975609756 0 0 1 114.36316743029933 153.25112912114656"></path></g><g id="SvgjsG1424" class="apexcharts-series apexcharts-radial-series" seriesName="Oranges" rel="2" data:realIndex="1"><path id="SvgjsPath1425" d="M 88 25.609756097560975 A 62.390243902439025 62.390243902439025 0 1 1 68.72035435094841 147.33664801665861" fill="none" fill-opacity="0.85" stroke="rgba(0,227,150,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.9853658536585375" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="198" data:value="55" index="0" j="1" data:pathOrig="M 88 25.609756097560975 A 62.390243902439025 62.390243902439025 0 1 1 68.72035435094841 147.33664801665861"></path></g><g id="SvgjsG1426" class="apexcharts-series apexcharts-radial-series" seriesName="Bananas" rel="3" data:realIndex="2"><path id="SvgjsPath1427" d="M 88 33.59512195121951 A 54.40487804878049 54.40487804878049 0 1 1 40.416421494021066 114.37600826637755" fill="none" fill-opacity="0.85" stroke="rgba(254,176,25,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.9853658536585375" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="241" data:value="67" index="0" j="2" data:pathOrig="M 88 33.59512195121951 A 54.40487804878049 54.40487804878049 0 1 1 40.416421494021066 114.37600826637755"></path></g><g id="SvgjsG1428" class="apexcharts-series apexcharts-radial-series" seriesName="Berries" rel="4" data:realIndex="3"><path id="SvgjsPath1429" d="M 88 41.58048780487805 A 46.41951219512195 46.41951219512195 0 1 1 47.400579838348825 65.49537392066271" fill="none" fill-opacity="0.85" stroke="rgba(255,69,96,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="2.9853658536585375" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-3" data:angle="299" data:value="83" index="0" j="3" data:pathOrig="M 88 41.58048780487805 A 46.41951219512195 46.41951219512195 0 1 1 47.400579838348825 65.49537392066271"></path></g><circle id="SvgjsCircle1418" r="39.97160975609755" cx="88" cy="88" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1419" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1420" font-family="Overpass, sans-serif" x="88" y="78" text-anchor="middle" dominant-baseline="auto" font-size="0.825rem" font-weight="400" fill="#adb5bd" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Overpass, sans-serif; fill: rgb(173, 181, 189);">Total</text><text id="SvgjsText1421" font-family="Overpass, sans-serif" x="88" y="104" text-anchor="middle" dominant-baseline="auto" font-size="1.53125rem" font-weight="700" fill="#495057" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Overpass, sans-serif;">249</text></g></g></g></g><line id="SvgjsLine1430" x1="0" y1="0" x2="176" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1431" x1="0" y1="0" x2="176" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1403" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 172px; height: 219px;"></div></div><div class="contract-trigger"></div></div></div> <!-- / .card-body -->
                          </div>
                    </div>
                    <div class="col-md-12">2</div>
                    <div class="col-md-12">3</div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/jquery.twbsPagination.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
