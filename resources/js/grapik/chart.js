const ctx = document.getElementById('myChart');

$.ajax({
    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getAllCart',
    type: 'GET',
    success: function (res) {
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

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Kuantitas',
                    data: data,
                    backgroundColor: backgroundColors,
                    borderWidth: 1,
                    barThickness: 35
                }]
            },
            options: {
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 2
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
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
