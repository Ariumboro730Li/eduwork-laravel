@extends('layouts.admin')
@section('content')
    <div id="controller" class="row">
        <div class="col-lg-12">
            <h2 class="card-title">Katalog Page </h2>
            <div class="col-md-2">
                <button class="btn btn-primary"class="btn btn-sm btn-primary pull-right">Create Data
                    Katalog</button>
            </div>
            <div class="card-body p-0">
                <table id="tbl-ctlg" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="30px">No.</th>
                            <th>Nama Katalog</th>
                            <th>Total Books</th>
                            <th>Created At</th>
                            <th class="text-right"> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catalogs as $key => $catalog)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $catalog->name }}</td>
                                <td>{{ count($catalog->catalog) }}</td>
                                <td>{{ formatDate($catalog->created_at) }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Data Modal Katalog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off" @submit.prevent="submitForm($event, data.id)">
                            @csrf
                            {{-- <input type="hidden" name="_method" value="PUT"> --}}
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Katalog:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                {{-- <button type="submit" class="btn btn-primary" v-if="editStatus"
                                v-on:click="editData(book.id)">
                                Edit Changes</button> --}}
                                <button type="submit" class="btn btn-primary">
                                    Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
