const DATA_COUNT = 7;
const NUMBER_CFG = { count: DATA_COUNT, min: 0, max: 6000 };

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];
const data = {
    labels: labels,
    datasets: [{
        label: 'Bảng thống kê theo ngày',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [150, 250, 453, 299, 240, 303, 500],
        tension: 0.4,
    }]
};
// </block:setup>

// <block:config:0>
const config = {
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
        interaction: {
            mode: 'nearest',
            intersect: false,
            axis: 'x'
        },
        plugins: {
            tooltip: {
                enabled: false
            }
        },
        scales: {
            x: {
                //type: 'time',
                //min: new Date('2022-04-14').valueOf(),
                //max: new Date('2022-04-21').valueOf()
            }
        }
    },
};
// </block:config>

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);