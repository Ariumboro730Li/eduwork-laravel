@extends('layouts.admin')
@section('tablepublisher')
    <div class="table-responsive-xl">
        <div class="header">
            <a href="{{ url('publisher/create') }}" class="btn btn-sm btn-primary pull-right">Create Publisher</a>
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
                        Email
                    </th>
                    <th>
                        No Telepon
                    </th>
                    <th>
                        Alamat
                    </th>
                    <th>
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publishers as $key => $penerbit)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            {{ $penerbit->name }}
                        </td>
                        <td>
                            {{ $penerbit->email }}
                        </td>
                        <td>
                            {{ $penerbit->phone_number }}
                        </td>
                        <td>
                            {{ $penerbit->address }}
                        </td>
                        <td>
                            <a href="{{ url('/publisher/' . $penerbit->id . '/edit') }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('publisher', ['id' => $penerbit->id]) }}" method="post">
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
        {{-- </div> --}}
    @endsection
