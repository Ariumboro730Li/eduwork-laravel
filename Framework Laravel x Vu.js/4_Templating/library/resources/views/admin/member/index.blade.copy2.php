@extends('layouts.admin')

@section('header', 'Member')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div id="controller">
    <!-- Data Table -->
    <div class="row">
        <div class="col-12">
            <!-- Displaying The Success Message of Modifying DataBase -->
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Displaying The Validation Errors -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <h4 class="py-3">Oops, There's something wrong!</h4>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <a href="#" @click="addData()" class="btn btn-primary">Add new Member</a>
                        </div>
                        <div class="col-2">
                            <select class="form-control" name="sex">
                                <option value="0">--Filter--</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-body p-3">
                    <table id="dataTable" class="table table-striped table-bordered text-center w-100">
                        <thead>
                            <tr>
                                <th class="align-middle" style="width: 10px;">#</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Gender</th>
                                <th class="align-middle">Phone Number</th>
                                <th class="align-middle">Address</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Join Date</th>
                                <th class="align-middle" style="width: 80px;">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

	<div class="modal fade show" id="modalmadul">
		<div class="modal-dialog">
          <div class="modal-content">
			  <form method="post" :action="actionUrl"autocomplete="off" @submit="submitForm($event,data.id)">
            <div class="modal-header">
              <h4 class="modal-title">Member</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				@csrf

				<input type="hidden" name="_method" value="PUT" v-if="editStatus">

                <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Enter Member's name" name="name" required :value="data.name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option :selected="data.gender == 'M'" value="M">Male</option>
                                <option :selected="data.gender == 'F'" value="F">Female</option>
                            </select>
                            @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                id="phone" placeholder="Enter member's phone" name="phone_number" required
                                :value="data.phone_number">
                            @error('phone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                placeholder="Enter member's address" name="address" required :value="data.address">
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Enter Member's email" name="email" required :value="data.email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>
</div>
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript">
var actionUrl = "{{ url('members') }}";
		var apiUrl = "{{ url('api/members') }}";

		var columns = [{
		        data: 'DT_RowIndex',
		        class: 'text-center',
		        orderable: false
		    },
		    {
		        data: 'name',
		        class: 'text-center',
		        orderable: false
		    },
		    {
		        data: 'email',
		        class: 'text-center',
		        orderable: true
		    },
		    {
		        data: 'phone_number',
		        class: 'text-center',
		        orderable: true
		    },
		    {
		        data: 'address',
		        class: 'text-center',
		        orderable: true
		    },
		    {
				render: function (index, row, data, meta) {
					return `
						<button onclick="memberVue.editData(event, ${meta.row})"  class="btn btn-sm btn-warning text-white">Edit</button>
						<button onclick="memberVue.deleteData(event, ${data.id})"  class="btn btn-sm btn-danger text-white">Delete</button>
					`;
				},
				orderable: false,
				width: '160px',
				class: 'text-center'
			}
		];
		var memberVue = new Vue({
			el: "#controller",
			data: {
				dataList: [],
				data: {},
				actionUrl,
				apiUrl,
				editStatus: false
			},
			mounted() {
				this.datatable();
			},
			methods: {
				datatable() {
					const _this = this;
					_this.table = $('#datatable').DataTable({
						ajax: {
							url: _this.apiUrl,
							type: 'GET'
						},
						columns,
					}).on('xhr',function() {
						_this.dataList = _this.table.ajax.json().data;
					})
				},
				addData() {
					this.data = {};
					this.actionUrl='{{ url('members') }}';
					this.editStatus = false;
					$('#modalmadul').modal();
				},
				editData(event, row) {
					this.data = this.dataList[row]
					this.editStatus = true
					$('#modalmadul').modal();
				},
				deleteData(event, id) {
					if (confirm('Are you sure?')) {
						$(event.target).parents('tr').remove();
						axios.post(this.actionUrl + '/' + id, {_method: 'DELETE'}).then(response => {
							location.reload();
					    });
                    }
				},
				submitForm(event, id) {
					event.preventDefault()
					const _this = this
					var url = ! this.editStatus ? this.actionUrl : this.actionUrl + '/' + id
					axios.post(url, new FormData($(event.target)[0])).then(response => {
						$('#modalmadul').modal('hide')
						_this.table.ajax.reload();
					})
				}
			}
		})
</script>
@endsection
