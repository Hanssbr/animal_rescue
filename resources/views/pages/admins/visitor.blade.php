@extends('layouts.adminboard')

@section('page-heading', 'Visitors')
@section('content')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bar Chart - Visitors</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Tambahkan pustaka Chart.js -->
    </head>

    <body>

        <h4>Grafik Pengunjung</h4>

        @php
            $labels = $visitors->pluck('date'); // Mengambil tanggal
            $data = $visitors->pluck('total_visitors'); // Mengambil total pengunjung
        @endphp

        <script>
            const visitorLabels = @json($labels); // Mengirim data tanggal ke JavaScript
            const visitorData = @json($data); // Mengirim data jumlah pengunjung ke JavaScript
        </script>

        <!-- Tempat untuk menampilkan grafik -->
        <canvas id="visitorBarChart" width="400" height="200"></canvas>

        <script>
            window.onload = function() {
                var ctx = document.getElementById('visitorBarChart').getContext('2d');

                // Membuat grafik batang
                var visitorBarChart = new Chart(ctx, {
                    type: 'bar', // Jenis grafik: batang
                    data: {
                        labels: visitorLabels, // Data label (tanggal)
                        datasets: [{
                            label: 'Total Visitors', // Label grafik
                            data: visitorData, // Data jumlah pengunjung
                            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna batang
                            borderColor: 'rgba(75, 192, 192, 1)', // Warna garis tepi batang
                            borderWidth: 1 // Ketebalan garis tepi batang
                        }]
                    },
                    options: {
                        responsive: true, // Grafik akan menyesuaikan ukuran layar
                        scales: {
                            y: {
                                beginAtZero: true, // Mulai dari nol
                                title: {
                                    display: true,
                                    text: 'Jumlah Pengunjung' // Judul sumbu Y
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Tanggal' // Judul sumbu X
                                }
                            }
                        }
                    }
                });
            };
        </script>

    </body>

    </html>




@endsection
