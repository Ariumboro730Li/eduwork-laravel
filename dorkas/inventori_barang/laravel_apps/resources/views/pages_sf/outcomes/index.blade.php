@extends('layouts.app', ['activePage' => 'outcome', 'menuParent' => 'outcome', 'titlePage' => __('Outcomes')])
@section('content')
<div class="content">
    <div class="alert alert-success alertMessage position-fixed fixed-top" hidden id="alertSuccess" role="alert">
        <h4 id="alert-heading-success">Success</h4>
    </div>
    <div class="alert alert-danger alertMessage position-fixed fixed-top" hidden id="alertDanger" role="alert">
        <span id="alert-heading-danger">Error</span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="card text-left">
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
            </div>
            </div>

            <div class="card text-left">
                <div class="card-body">
                    {{-- <a name="" id="" class="btn btn-info" href="{{route("page.outcome.add")}}" role="button">Add Outcome</a> --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalOutcome">
                      Add Outcome
                    </button>
                    <div class="table-responsive mt-4">
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Category</th>
                                    <th>Total</th>
                                    <th>Timestamp</th>
                                    <th>Timestamp Edit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalOutcome" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formOutcome">
                <div class="modal-header">
                    <h5 class="modal-title">Outcome</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <input type="number" hidden name="id" id="input_id">
                    <div class="container-fluid">
                        <div class="form-group mt-4">
                            <label for="">Category</label>
                            <input type="text"  class="form-control" name="category" id="input_category" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Total</label>
                            <input type="number"  class="form-control" name="total" id="input_total" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="submitOutcome()" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push("js")
<script>
    let configView = {
        url : "{{url('')}}",
        category : null,
    };
</script>
<script src="{{asset('js/pages_sf/outcome/graph.js')}}"></script>
<script src="{{asset('js/pages_sf/outcome/datatable.js')}}"></script>
<script src="{{asset('js/pages_sf/outcome/form.js')}}"></script>
@endpush
