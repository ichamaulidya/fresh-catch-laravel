// buildingChart.js

$(document).ready(function () {
    // Data contoh untuk building chart (gantilah dengan data yang sesuai)
    $.ajax({
        url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getWaitingAll',
        type: 'GET',
        success: function (res) {
            // Proses data res di sini sesuai kebutuhan Anda
            const productQuantities = {};

            res.forEach(item => {
                const productName = item.nama_produk;
                const quantity = item.kuantitas;

                if (productQuantities[productName]) {
                    productQuantities[productName] += quantity;
                } else {
                    productQuantities[productName] = quantity;
                }
            });

            const labels = Object.keys(productQuantities);
            const data = Object.values(productQuantities);

            const backgroundColors = labels.map(() => getRandomColor());

            // Data hasil pengolahan
            var buildingChartData = {
                series: [{
                    name: 'Sales',
                    data: data
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                    },
                },
                xaxis: {
                    categories: labels
                },
                fill: {
                    colors: backgroundColors
                },
                title: {
                    text: 'Sales Product',
                    align: 'left'
                }
            };

            // Inisialisasi dan menampilkan building chart
            var buildingChart = new ApexCharts(document.getElementById('buildingChart'), buildingChartData);
            buildingChart.render();
        },
        error: function (err) {
            console.log(err);
        }
    });

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});
