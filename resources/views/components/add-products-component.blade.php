<div class="modal fade" id="AddProductModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><img src="{{ asset('assets/admin/images/close.svg') }}" ></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <button type="button" class="addNewRow btn btn-sm btn-primary mb-2">Add New Row</button>
            <div class="shadow relative container-fluid py-2">
                <div class="row mb-2">
                    <div class="col">
                        <label for="">Product Name</label>
                        <input type="text" name="name[]" class="form-control" id="" placeholder="Product Name">
                    </div>
                    <div class="col">
                        <label for="">Product Price</label>
                        <input type="text" name="price[]" class="form-control" id="" placeholder="Product Price">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="">Product Quantity</label>
                        <input type="number" name="quantity[]" class="form-control" id="" placeholder="Product Quantity">
                    </div>
                    <div class="col">
                        <label for="">Front Image</label>
                        <input type="file" name="front[]" class="form-control" id="">
                    </div>
                </div>

                <div id="dropZone" class="dz-default dz-message dropzone mb-3"></div>
                <div class="form-group">
                    <textarea name="description" id="" resize="none" class="form-control"></textarea>
                </div>
                <input type="hidden" name="ids[]" class="images_id" value="">
                <button class="jDeleteRow btn-delete-row" type="button" disabled>&times;</a>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>