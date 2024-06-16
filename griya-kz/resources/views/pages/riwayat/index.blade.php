@extends('layouts.app')

@section('title', 'Data Grafik')

@section('content')
<div class="content-body">
    <div class="container">
        <h2>Data Pendaftaran dan Khitan</h2>
        <div class="row">
            <div class="col-md-6">
                <canvas id="patientChart" width="400" height="200"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="khitanChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Pastikan Chart.js dimuat -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var patientLabels = ['January', 'February', 'March', 'April', 'May', 'June'];
            var patientData = [10, 20, 30, 40, 50, 60];

            var khitanLabels = ['January', 'February', 'March', 'April', 'May', 'June'];
            var khitanData = [5, 15, 25, 35, 45, 55];

            // Debugging: Output data to the console
            console.log('Patient Labels:', patientLabels);
            console.log('Patient Data:', patientData);
            console.log('Khitan Labels:', khitanLabels);
            console.log('Khitan Data:', khitanData);

            var ctx1 = document.getElementById('patientChart').getContext('2d');
            var patientChart = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: patientLabels,
                    datasets: [{
                        label: 'Pendaftaran Pasien',
                        data: patientData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
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

            var ctx2 = document.getElementById('khitanChart').getContext('2d');
            var khitanChart = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: khitanLabels,
                    datasets: [{
                        label: 'Data Khitan',
                        data: khitanData,
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 2,
                        fill: false
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
</div>

@endsection