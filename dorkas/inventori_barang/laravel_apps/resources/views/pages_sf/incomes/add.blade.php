@extends('layouts.app', ['activePage' => 'income', 'menuParent' => 'income', 'titlePage' => __('Add Incomes')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card text-left">
                    <div class="card-body">
                        <form action="{{route('page.income.add.post')}}" method="post">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="">Category</label>
                                <input type="text"  class="form-control" name="category" id="" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Total</label>
                                <input type="number"  class="form-control" name="total" id="" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("js")
@endpush
