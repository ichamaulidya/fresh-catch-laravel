// areaChart.js

$(document).ready(function () {
    // Data contoh untuk grafik (gantilah dengan data yang sesuai)
    var chartData = {
        series: [{
            name: 'Sales',
            data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
        }],
        chart: {
            type: 'area',
            height: 350
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        },
        fill: {
            colors: ['#39afd1']
        },
        dataLabels: {
            enabled: false
        },
        title: {
            text: 'Sales Trend',
            align: 'left'
        }
    };

    // Inisialisasi dan menampilkan chart
    var areaChart = new ApexCharts(document.getElementById('areaChart'), chartData);
    areaChart.render();
});
