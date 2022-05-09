var DATA_COUNT = 30;
var NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 6000 };


// const labels = [
//     'January',
//     'February',
//     'March',
//     'April',
//     'May',
//     'June',
// ];
var labels = [
    '1','2','3','4','5','6','7','8','9','10','11','12','13','14','15',
    '16','17','18','19','20','21','22','23','24','26','27','28','29','30','31'
];
var data = {
    labels: labels,
    datasets: [{
        label: 'Bảng thống kê theo ngày',
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