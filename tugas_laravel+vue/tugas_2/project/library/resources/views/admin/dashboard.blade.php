@extends('layouts.admin')
@section('header', 'Dashboard')

@section('css')

@endsection

@section('content')
<section class="content">
      <div class="container-fluid">
 <div class="row">
          <div class="col-sm-6 col-lg-3 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> {{ $total_buku}} </h3>
                <p>Total Buku</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-book"></i>
              </div>
              <a href=" {{ url('books') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> {{ $total_anggota }} </h3>

                <p>Total Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href=" {{ url('members') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> {{ $total_penerbit }} </h3>

                <p>Total Penerbit</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-pricetag"></i>
              </div>
              <a href="{{ url('publisher') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $total_transaksi }}</h3>
                <p>Total Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-social-usd"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>
<div class="row">
   <div class="col-sm-12 col-lg-12 col-xl-6">
       <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
    </div> 

   
     <div class="col-sm-12 col-lg-12 col-xl-6">
             <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
     </div>    <!-- /.card -->   

       <div class="col-sm-12 col-lg-12 col-xl-12">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Line Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 950px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div> 
       </div>     
</div>       
</div>
</section>       
@endsection


@section('js')
<script>
    var label_donut = '{!! json_encode($label_chartdonat) !!}'; 
    var data_donut =  '{!! json_encode($data_chartdonat) !!}';
    var data_bar =  '{!! json_encode($data_bar) !!}';
    var data_line =  '{!! json_encode($data_line) !!}';

   $(function () {



    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: JSON.parse(label_donut),
      datasets: [
        {
          data: JSON.parse(data_donut),
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc','red','#D5d'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })



 var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','Agustus','September','October','November','December'],
      datasets: JSON.parse(data_bar)
    }

    var arealineData = {
      labels  : ['2020', '2021', '2022', '2023'],
      datasets: JSON.parse(data_line)
    }


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    // var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, arealineData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false


    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

  
  })


</script>
@endsection