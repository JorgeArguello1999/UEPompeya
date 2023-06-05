export function myPieChart(data_keys, data_values){
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: data_keys,
            datasets: [{
                label: 'Número',
                data: data_values,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                hoverOffset: 4
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += context.formattedValue || '';
                            return label;
                        }
                    }
                },
                legend: {
                    display: true,
                    position: 'left'
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'left'
                },
                datalabels: {
                    anchor: 'end',
                    align: 'start',
                    rotation: 90 // Rotación de las etiquetas (90 grados)
                }
            }
        }
    });
}