@extends('layouts.admin')
@section('header','Catalog')
@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"> 
                <a href="{{url('catalogs/create')}}" class="btn btn-sm btn-primary pull-right">Create New Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 20px">Number</th>
                      <th class="text-center">ID_Catalog</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Total Books</th> 
                      <th class="text-center">Created At</th>
                      <th class="text-center">Updated At</th>                     
                      <th class="text-center">Action</th>
                      <!-- <th style="width: 40px">Label</th> -->
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($catalogs as $key =>  $catalog)
                    <tr>
                      <td>{{$key +1}}</td>
                      <td>{{ $catalog->id_catalog}}</td>
                      <td>{{ $catalog->name}}</td>
                      <td>{{count ($catalog->books)}}</td>
                      <td>{{ date ('d/m/y',strtotime ($catalog->created_at))}}</td>
                      <td>{{ date('d/m/y', strtotime ($catalog->updated_at))}}</td>
                      <td>  
                          <a href="{{url('catalogs/'.$catalog->id.'/edit') }}" class="btn btn-sm btn-primary pull-right">Edit</a>
                          
                        <form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="post">
                          <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                          @method('delete')
                          @csrf
                        </form>
                      </td>
                      <!-- <td><span class="badge bg-danger"></span></td> -->
                    </tr>
                    @endforeach
                    <!-- <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div> -->
      </div>
    </div>

    
  </section>

            <!-- /.card -->
@endsection