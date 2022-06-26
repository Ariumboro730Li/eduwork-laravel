<div class="mb-3">
    <button type="button" class="btn btn-primary btn-sm" onclick="getModalAdd()">
      Add Income
    </button>
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form id="modalForm">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal Income</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            @csrf
                            <div class="form-group">
                                <label for="">Category</label>
                                {{-- <input type="text" class="form-control" name="category" id="category"> --}}
                                <select name="category_id" id="category_id" class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label for="">Note</label>
                                <input type="text" class="form-control" name="note" id="note">
                            </div>
                            <div class="form-group">
                                <label for="">Total</label>
                                <input type="number" class="form-control" name="total" id="total">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="javascript:void(0)" id="submitForm" class="btn btn-primary">Execute</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
