var controller = new Vue({
    el: '#controller',
    data: {
        datas: [],
        data: {},
        actUrl,
        apiUrl,
        editStatus: false,
    },
    mounted: function() {
        this.datatable();
    },
    methods: {
        datatable(){
            const _this = this;
            _this.table = $('#dataTable').DataTable({
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
            $('#modal-default').modal('show');    
        },
        editData(event, row) {
            this.data = this.datas[row];
            this.editStatus = true;
            $('#modal-default').modal('show');    
        },
        deleteData(event, id) {
            if (confirm("Are you sure?")) {
                axios.post(this.actUrl+'/'+id, {_method: 'DELETE'}).then(response => {
                    alert('Data has been removed');
                    $(event.target).parents('tr').remove();
                });
            }
        },
        submitForm(event, id) {
            event.preventDefault();
            const _this = this;
            var actUrl = ! this.editStatus ? this.actUrl : this.actUrl+'/'+id;
            axios.post(actUrl, new FormData($(event.target)[0])).then(response => {
                $('#modal-default').modal('hide');
                _this.table.ajax.reload();
            });
        },
    }
});