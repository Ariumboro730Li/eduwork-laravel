var controller = new Vue({
    el: "#controller",
    data: {
        datas: [],
        data: {},
        actionUrl,
        apiUrl,
        editStatus: false,
    },
    mounted: function() {
        this.datatable();
    },
    methods: {
        datatable() {
            const _this = this;
            _this.table = $('#data-table-example').DataTable({
                ajax: {
                    url: _this.apiUrl,
                    type: 'GET',

                },
                columns

            }).on('xhr', function() {
                _this.datas = _this.table.ajax.json().data;
            });
        },
        addData() {
            this.data = {};
            // this.actionUrl = '{{ url('author') }}';
            // this.editStatus = false;
            // console.log("Tes klik");
            // this.actionUrl = '{{ url('publisher') }}';
            this.editStatus = false;
            $("#exampleModal").modal("show")
        },
        editData(event, row) {
            this.data = this.datas[row];
            // this.actionUrl = '{{ url('publisher') }}' + '/' +
            // this.data.id;
            this.editStatus = true;
            $('#exampleModal').modal("show")
        },
        deleteData(event, id) {
            // this.actionUrl = '{{ url('publisher') }}' + '/';
            if (confirm("Are you sure to delete this data?")) {
                axios.post(this.actionUrl + '/' + id, {
                    _method: 'DELETE'
                }).then(response => {
                    alert('Data berhasil dihapus');

                });

            }

            // console.log(id);


            // console.log(delete_data_penerbit_id);
        },
        submitForm(event, id) {
            event.preventDefault();
            const _this = this;
            // var actionUrl = !this.editStatus ? this.actionUrl : this.actionUrl;
            // var actionUrl
            $('#exampleModal').modal("hide")
            axios.post(this.actionUrl, new FormData($(event.target)[0])).then(response => {
                _this.table.ajax.reload();
            });
            console.log(actionUrl, this.actionUrl);
        }
    }

});
