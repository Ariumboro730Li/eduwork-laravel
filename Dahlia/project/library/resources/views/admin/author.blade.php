@extends('layouts.admin')
@section('header','Author')
@section('css')

@endsection

ini adalah halaman Author

<section class="content">
    <div id="controller">   
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">            
                                <a href="#" @click="addData(), editData(), deleteData()" data-target ="#modal-default" data-toggle="modal" class="btn btn-sm btn-primary pull-right">Create New Author</a>
                                </div>
                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm float-right">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
                                    </div>    
                            </div>
                        
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">Number</th>
                                        <th class="text-center">ID_Author</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Phone Number</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Total Books</th>
                                        <th class="text-center">Created At</th>
                                        <th class="text-center">Updated At</th>
                                        <!-- <th style="width: 40px">Label</th> -->
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach ($authors as $key =>  $author)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{ $author->id_author}}</td>
                                            <td>{{ $author->name}}</td>
                                            <td>{{ $author->email}}</td>
                                            <td>{{ $author->phone_number}}</td>
                                            <td>{{ $author->address}}</td>
                                            <td>{{count ($author->books)}}</td>
                                            <td>{{ date ('d/m/y',strtotime ($author->created_at))}}</td>
                                            <td>{{ date('d/m/y', strtotime ($author->updated_at))}}</td>
                                            
                                            <td>  
                                                <a href="#" @click="editData({$author})" class="btn btn-sm btn-primary pull-right">Edit</a>
                                                <!-- <form action="{{ url('authors', ['id' => $author->id]) }}" method="post"> -->
                                                <!-- <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                                @method('delete')
                                                @csrf
                                                </form> -->
                                                <a href="#" @click="deleteData({$author->id})" class="btn btn-sm btn-primary pull-right">Edit</a>
                                                
                                            </td>

                                            <!-- <td><span class="badge bg-danger"></span></td> -->
                                        </tr>
                                        @endforeach
                                
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" :action="actionUrl" autocomplete="off">

                        <div class="modal-header">
                            <h4 class="modal-title">Author</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                @csrf

                                <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                
                                <div class="form group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" :value="data.name" required="">
                                </div>
                                <div class="form group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" :value="data.email" required="">
                                </div>
                                <div class="form group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number" :value="data.phone_number" required="">
                                </div>
                                <div class="form group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="address" :value="data.address" required="">
                                </div>
                            </div>
                        <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>   
                    </form>
                    
                        
            <!-- /.modal -->
    </div>

</section>
   

@endsection

@section('js')
    <sript class="text/javascript">
        var controller = new Vue({
            el:'#controller',
            data:{
                data:{}
                actionUrl : '{{url('authors')}}',
                editStatus:false

            },
            mounted: fuction (){

            },
            methods:{
                addData() {
                    this.data={};
                    this.actionUrl='{{url('authors')}}';
                    this.editStatus = false;
                    $('#modal-default').modal();
                },
                editData(data) {
                    this.data=data ;
                    this.actionUrl='{{url('authors')}}'+'/'+data.id;
                    this.editStatus = true;
                    $('#modal-default').modal()
                },
                deleteData(id) {
                    this.actionUrl '{{url('authors')}}'+'/'+id;
                    if(confirm("Are you sure?")){
                        axios.post(this.actiosUrl,{_method:'DELETE'}).then(response => {
                            location.reload();
                        });
                    }
                }

            }
        });
    </sript>


@endsection