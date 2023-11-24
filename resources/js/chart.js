const ctx = document.getElementById('myChart');

$.ajax({
    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getAllCart',
    type: 'GET',
    success: function(res){          
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Pria', 'Wanita'],
                datasets: [{
                    label: '# of Votes',
                    data: [cekPria(res), res.length - cekPria(res)],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    },
    error:function(err){
        console.log(err);
    }
});

function cekPria(data) {
 
    return data.filter(mahasiswa => mahasiswa.jenis_kelamin === 'Pria').length;
}
