@extends('layouts.admin')
@section('header','Book')
@section('content')

ini adalah halaman Book
<br><br>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="{{url('books/create')}}" class="btn btn-sm btn-primary pull-right">Create New Book</a>
              </div>            
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">Number</th>
                      <th>ISBN</th>
                      <th>Title</th>
                      <th>Year</th>
                      <th>ID Pulisher</th>
                      <th>ID Author</th>
                      <th>ID Catalog</th>
                      <th>QTY</th>
                      <th>Price</th>
                      <th>Created At</th>
                      <th>Updated At</th>
                      <th>Action</th>
                      <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($books as $key =>  $book)
                    <tr>
                      <td>{{$key +1}}</td>
                      <td>{{ $book->isbn}}</td>
                      <td>{{ $book->title}}</td>
                      <td>{{ $book->year}}</td>
                      <td>{{ $book->publisher_id}}</td>
                      <td>{{ $book->author_id}}</td>
                      <td>{{ $book->catalog_id}}</td>
                      <td>{{ $book->qty}}</td>
                      <td>{{ $book->price}}</td>
                      <td>{{ date ('d/m/y',strtotime ($book->created_at))}}</td>
                      <td>{{ date('d/m/y', strtotime ($book->updated_at))}}</td>
                      <td> 
                          <a href="{{url('books/'.$book->id.'/edit') }}" class="btn btn-sm btn-primary pull-right">Edit</a>
                          
                          <form action="{{ url('books', ['id' => $book->id]) }}" method="post">
                            <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                            @method('delete')
                            @csrf
                          </form>
                      </td>
                      <!-- <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td> -->
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
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
      </div>
    </div>
  </section>


@endsection