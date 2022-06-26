@extends('layouts.app', [
    'parentSection' => 'income',
    'elementName' => 'income'
])

@section('content')
@include("layouts.alert-mesages")
<div class="container-fluid mt-5">
    @include("contents.income.modals")
    @include("contents.income.datatable")
</div>
@endsection
@push('js')
<script>
    let configView = {
        "url" : "{{url('')}}"
    };
    let messageSuccess;
    let messageError;
</script>
<script src="{{asset('js/alert-messages.js')}}"></script>
<script src="{{ asset('js/pages/income/modal-add.js') }}?token={{$tokenJS}}"></script>
<script src="{{ asset('js/pages/income/datatable.js') }}?token={{$tokenJS}}"></script>
<script src="{{ asset('js/pages/income/index.js') }}?token={{$tokenJS}}"></script>
@endpush
