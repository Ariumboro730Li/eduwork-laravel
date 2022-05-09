@extends('index')
@section('table')
    <div class="table-responsive pt-3">
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
