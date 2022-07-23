@extends('layouts.admin')
@section('header', 'Author')

@section('css')
    
@endsection

@section('content')
<div id="controller">
    <div class="container-fluid px-4">
        <a href="#" @click="addData()" class="btn btn-sm btn-primary mb-2">Create New</a>
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nomer HP</th>
                    <th class="text-center">Alamat</th>
                    {{-- <th class="text-center">Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $key => $authors)                
                <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td>{{ $authors->name }}</td>
                    <td>{{ $authors->email }}</td>
                    <td>{{ $authors->phone_number }}</td>
                    <td>{{ $authors->address }}</td>
                    {{-- <td>
                        <a href="{{ url('authors/'.$authors->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
    
                        <form action="{{ url('authors', ['id' => $authors->id]) }}" method="post">
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                            @method('delete')
                            @csrf
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Author</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url('authors') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" required>
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                            <label class="form-label">Nomer HP</label>
                            <input type="text" name="phone_number" class="form-control" required>
                            <label class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control" required>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var controller = new Vue({
        el: '#controller',
        data: {
            data: {},
            actUrl: '{{ url('authors') }}'
        },
        mounted() {

        },
        methods: {
            addData() {
                // console.log('add data');
                $('#modal-default').modal();    
            },
            editData() {

            },
            deleteData() {

            }
        }
    });
</script>
@endsection