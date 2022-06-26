@extends('layouts.app', [
    'parentSection' => 'income',
    'elementName' => 'income'
])

@section('content')
<div class="container-fluid mt-5">
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">Table Income</h4>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-income">
                <thead class="thead-light">
                    <tr>
                        <th>Category</th>
                        <th>Note</th>
                        <th>Total</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                       <tr>
                           <td>{{$item->category}}</td>
                           <td>{{$item->note}}</td>
                           <td>{{$item->total}}</td>
                           <td>{{$item->created_at}}</td>
                           <td>{{$item->id}}</td>
                       </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script>
    $(document).ready( function () {
        $('#datatable-income').DataTable();
    } );
</script>
@endpush
