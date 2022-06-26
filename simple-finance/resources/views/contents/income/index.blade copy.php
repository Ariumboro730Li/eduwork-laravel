@extends('layouts.app', [
    'parentSection' => 'income',
    'elementName' => 'income'
])

@section('content')
<div class="container-fluid mt-5">
    {{-- <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title">Table Income</h4>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <tr>
                        <th>Category</th>
                        <th>Note</th>
                        <th>Total</th>
                        <th>Created At</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
    </div> --}}
    <h1>Tanpa AJAX = <span>{{Illuminate\Support\Str::random(100)}}</span></h1>
    <br>
    <br>
    <h1> Dengan Ajax =  <span id="h1Ajax"></span></h1>
    <a name="" id="changeAjax" onclick="changeAjax()" class="btn btn-primary" href="#" role="button">Change Ajax</a>
    <br>
    <br>
    <h1> Dengan Ajax & Set Interval =  <span id="h1AjaxInterval"></span></h1>
</div>

@endsection
@push('js')
<script>
    changeAjaxSetInterval();
    function changeAjax(){
        $.ajax({
            type : "get",
            url : `{{url('')}}/income/get-string`,
            success: function(response){
                $(`#h1Ajax`).html(response);
            }
        })
    }
    function changeAjaxSetInterval(){
        setInterval(() => {
            $.ajax({
                type : "get",
                url : `{{url('')}}/income/get-string`,
                success: function(response){
                    $(`#h1AjaxInterval`).html(response);
                }
            })
        }, 1000);
    }
</script>
@endpush
