<div class="modal fade" id="AddProductModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><img src="{{ asset('assets/admin/images/close.svg') }}" ></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <button type="button" class="addNewRow btn btn-sm btn-primary mb-2">Add New Row</button>
            @if (count($errors->get('name.*')) > 0)
                @for ($i = 0; $i < count($errors->get('name.*')); $i++)
                  <div class="shadow relative container-fluid py-2 @if($i > 0) mt-3 @endif">
                      <div class="row mb-2">
                          <div class="col">
                              <label for="">Product Name</label>
                              <input type="text" name="name[]" class="form-control" id="" placeholder="Product Name" value="{{old("name.$index")}}">
                              @if($errors->has("name.$i"))
                                <small>{{ $errors->first("name.$index") }}</small>
                              @endif
                          </div>
                          <div class="col">
                              <label for="">Product Price</label>
                              <input type="text" name="price[]" class="form-control" id="" placeholder="Product Price" value="{{old("price.$index")}}">
                              @if($errors->has("price.$i"))
                                <small>{{ $errors->first("price.$index") }}</small>
                              @endif
                          </div>
                      </div>
                      <div class="row mb-2">
                          <div class="col">
                              <label for="">Product Quantity</label>
                              <input type="number" name="quantity[]" class="form-control" id="" placeholder="Product Quantity" value="{{old("quantity.$index")}}">
                              @if($errors->has("quantity.$i"))
                                <small>{{ $errors->first("quantity.$index") }}</small>
                              @endif
                          </div>
                          <div class="col">
                              <label for="">Front Image</label>
                              <input type="file" name="avatar[]" class="form-control">
                          </div>
                      </div>
      
                      <div class="dz-default dz-message dropzone mb-3"></div>
                      <div class="form-group">
                          <textarea name="description[]" id="" class="form-control">{{old("description.$index")}}</textarea>
                          @if($errors->has("description.$i"))
                            <small>{{ $errors->first("description.$index") }}</small>
                          @endif
                      </div>
                      <input type="hidden" name="ids_{{$index}}" class="images_id" value='{{old("ids_$index")}}'>
                      @php
                        $index++;
                      @endphp
                      <button class="jDeleteRow btn-delete-row" type="button" @if($i <= 0) disabled @endif>&times;</button>
                  </div>
                @endfor
            @else
                <div class="shadow relative container-fluid py-2">
                      <div class="row mb-2">
                          <div class="col">
                            <label for="">Product Name</label>
                            <input type="text" name="name[]" class="form-control" id="" placeholder="Product Name" value="{{old("name.$index")}}">
                          </div>
                          <div class="col">
                            <label for="">Product Price</label>
                            <input type="text" name="price[]" class="form-control" id="" placeholder="Product Price" value="{{old("price.$index")}}">
                          </div>
                      </div>
                      <div class="row mb-2">
                          <div class="col">
                            <label for="">Product Quantity</label>
                            <input type="number" name="quantity[]" class="form-control" id="" placeholder="Product Quantity" value="{{old("quantity.$index")}}">
                          </div>
                          <div class="col">
                            <label for="">Front Image</label>
                            <input type="file" name="avatar[]" class="form-control" id="">
                          </div>
                      </div>
                      <div class="dz-default dz-message dropzone mb-3"></div>
                      <div class="form-group">
                        <textarea name="description[]" id="" resize="none" class="form-control">{{old("description.$index")}}</textarea>
                      </div>
                      <input type="hidden" name="ids_0" class="images_id" value="{{old("ids_0")}}">
                      <button class="jDeleteRow btn-delete-row" type="button" disabled>&times;</button>
                  </div>
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
    </div>
  </div>
</div>