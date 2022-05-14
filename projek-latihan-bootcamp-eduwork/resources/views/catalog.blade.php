@extends('layouts.admin')
@section('tablecatalog')
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
                    <th>
                        Action
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
                        <td>
                            <a href="{{ url('/catalogs_edit/' . $katalog->id . '/edit') }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('catalogs', ['id' => $katalog->id]) }}" method="post">
                                <input class="btn btn-danger btn-sm" type="submit" value="Delete"
                                    onclick="return confirm('Are you sure?')">
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
