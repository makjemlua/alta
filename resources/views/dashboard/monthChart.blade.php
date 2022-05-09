<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 450px;">
    <canvas id="myChart"></canvas>
    
    <div style="position: absolute; top: 0; left: 0;">
        Tháng {{$month}}/{{$year}}
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js">
</script>
<script>
    var datas = "{{ $dates }}";
    var dataChart = JSON.parse(datas.replace(/&quot;/g, '"'));
    var arr = Object.keys(dataChart).map(function (key) { return dataChart[key]; });
    var DATA_COUNT = 12;
    var NUMBER_CFG = {
        count: DATA_COUNT,
        min: 0,
        max: 6000
    };


    // const labels = [
    //     'January',
    //     'February',
    //     'March',
    //     'April',
    //     'May',
    //     'June',
    // ];
    var labels = [
        '1','2','3','4','5','6','7','8','9','10','11','12',
    ];
    var data = {
        labels: labels,
        datasets: [{
            label: 'Bảng thống kê theo tháng',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: arr,
            tension: 0,
        }]
    };
    // </block:setup>

    // <block:config:0>
    var config = {
        type: 'line',
        data: data,
        options: {
            animations: {
                radius: {
                    duration: 400,
                    easing: 'linear',
                    loop: (context) => context.active
                }
            },
            hoverRadius: 12,
            hoverBackgroundColor: 'yellow',
            fill: true,
            interaction: {
                mode: 'nearest',
                intersect: false,
                axis: 'x'
            },
            plugins: {
                tooltip: {
                    enabled: true
                }
            },
        },
    };
    // </block:config>

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
