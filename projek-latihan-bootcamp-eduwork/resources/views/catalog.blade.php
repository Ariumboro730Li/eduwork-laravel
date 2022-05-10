@extends('index')
@section('table')
    <div class="table-responsive pt-3">
        <div class="header">
            <a href="{{ url('catalogs/create') }}" class="btn btn-sm btn-primary pull-right">Create Catalog</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Created At
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalogs as $key => $katalog)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $katalog->name }}
                        </td>
                        <td>
                            {{ date('H:i:s - d m Y', strtotime($katalog->created_at)) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
