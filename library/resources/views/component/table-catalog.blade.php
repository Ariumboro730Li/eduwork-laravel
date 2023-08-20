<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Catalog</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th class='text-center'>Name</th>
              <th class='text-center'>Total Books</th>
              <th class='text-center'>Created_At</th>
            </tr>
          </thead>
          <tbody>
            @foreach($catalogs as $key=> $catalog)
            <tr>
              <td>{{ $catalog->id }}</td>
              <td>{{ $catalog->name }}</td>
              <td class="text-center">{{ $catalog->books_count }}</td>
              <td class="text-center">{{ date('d F Y', strtotime($catalog->created_at)) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
