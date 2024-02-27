<canvas id="organizationSizeChart"></canvas>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('organizationSizeChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($chartData['labels']) !!},
                datasets: [{
                    label: 'Organization Size',
                    data: {!! json_encode($chartData['datasets'][0]['data']) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
    });
</script>
