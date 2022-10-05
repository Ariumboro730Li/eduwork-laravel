@extends('admin.layouts.app')
@section('header', 'Dashboard')

@section('content')

<div class="container-fluid px-4 mb-5">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <a href="{{ url('members') }}" style="text-decoration: none">
                    <div class="card-body text-white">Total Anggota</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="small text-white stretched-link">{{ $total_anggota }}</p>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <a href="{{ url('books') }}" style="text-decoration: none">
                    <div class="card-body text-white">Total Buku</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="small text-white stretched-link" href="#">{{ $total_buku }}</p>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <a href="#" style="text-decoration: none">
                    <div class="card-body text-white">Total Peminjaman</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="small text-white stretched-link" href="#">{{ $total_peminjaman }}</p>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <a href="{{ url('publishers') }}" style="text-decoration: none">
                    <div class="card-body text-white">Total Penerbit</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="small text-white stretched-link" href="#">{{ $total_penerbit }}</p>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Grafik Peminjaman - Pengembalian
                </div>
                <div class="card-body"><canvas id="grafikPeminjaman" width="100%" height="50"></canvas></div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-pie me-1"></i>
                    Grafik Penerbit
                </div>
                <div class="card-body"><canvas id="grafikPenerbit" width="100%" height="50"></canvas></div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Grafik Penulis
                </div>
                <div class="card-body"><canvas id="grafikPenulis" width="100%" height="30"></canvas></div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var label_donat = '{!! json_encode($label_donat) !!}';
    var data_donat  = '{!! json_encode($data_donat) !!}';
    var data_bar = '{!! json_encode($data_bar) !!}';
    var label_area = '{!! json_encode($label_area) !!}';
    var data_area = '{!! json_encode($data_area) !!}';
    var ctx = document.getElementById("grafikPenerbit");
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: JSON.parse(label_donat),
        datasets: [{
        data: JSON.parse(data_donat),
        backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', '#333333', '#23a310', '#871ae1', '#1ee230'],
        }],
    },
    });
    // bar grafik
    var ctk = document.getElementById("grafikPeminjaman");
    var myLineChart = new Chart(ctk, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: JSON.parse(data_bar),
    },
    options: {
        scales: {
        xAxes: [{
            time: {
            unit: 'month'
            },
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 12
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: 10,
            maxTicksLimit: 12
            },
            gridLines: {
            display: true
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });
    // Grafik Penulis
    var ctx = document.getElementById("grafikPenulis");
    var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: JSON.parse(label_area),
        datasets: [{
        label: "Sessions",
        lineTension: 0.3,
        backgroundColor: "rgba(2,117,216,0.2)",
        borderColor: "rgba(2,117,216,1)",
        pointRadius: 5,
        pointBackgroundColor: "rgba(2,117,216,1)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgba(2,117,216,1)",
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data: JSON.parse(data_area),
        }],
    },
    options: {
        scales: {
        xAxes: [{
            time: {
            unit: 'date'
            },
            gridLines: {
            display: false
            },
            ticks: {
            maxTicksLimit: 20
            }
        }],
        yAxes: [{
            ticks: {
            min: 0,
            max: 5,
            maxTicksLimit: 20
            },
            gridLines: {
            color: "rgba(0, 0, 0, .125)",
            }
        }],
        },
        legend: {
        display: false
        }
    }
    });
</script>
@endsection
