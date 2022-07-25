@extends('layouts.admin')
@section('content')
    <!-- Button trigger modal -->
    <a href="" @click="addData()" data-target="#exampleModal" data-toggle="modal"
        class="btn btn-sm btn-primary pull-right">Create
        Author</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        var controller = new Vue({
            el: '#controller',
            methods: {
                addData() {
                    this.data = {};
                    // this.actionUrl = '{{ url('author') }}';
                    // this.editStatus = false;
                    console.log("Tes klik");
                    // $('#modalForm').modal("show")
                }
            }


        });
    </script>
@endsection
