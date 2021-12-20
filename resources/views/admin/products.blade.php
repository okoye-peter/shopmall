<x-admin-layout>
    @push('css')
        <!-- Datatable -->
        <link href="{{ asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.css" />
        <style>
            .btn-close{
                background: transparent;
                outline: none;
                border: 0px;
            }
            .btn-close img{
                width: 1em;
            }
            .dz-image img {
                width: 100%;
                height: 100%;
            }
            .dropzone {
                border: 2px dashed #028AF4;
                padding: 0.65em;
            }
            .dropzone .dz-preview{
                margin: 9px 14px;
            }
            .dropzone .dz-preview.dz-complete .dz-success-mark {
                opacity: 1;
            }
            .dropzone .dz-preview.dz-error .dz-success-mark {
                opacity: 0;
            }
            .dropzone .dz-preview .dz-error-message{
                top: 144px;
            }
            .jDeleteRow.btn-delete-row{
                border: 0px;
                display: block;
                width: 18px;
                height: 18px;
                line-height: 18px;
                font-size: 14px;
                border-radius: 50%;
                background: #aaa;
                color: #fff;
                margin: 3px auto;
                text-align: center;
                padding: 0;
            }
            .jDeleteRow.btn-delete-row:disabled{
                opacity: 0.2;
                cursor:default;
            }
            small{
                color:red;
            }
        </style>
    @endpush
    @if ($errors->any())
        <div class="row">
            <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                <strong>Validation Failed!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @if ($errors->has('name'))
                        <li>{{ $errors->first('name') }}</li>
                    @endif 
                    @if ($errors->has('description'))
                        <li>{{ $errors->first('description') }}</li>
                    @endif 
                    @if ($errors->has('price'))
                        <li>{{ $errors->first('price') }}</li>
                    @endif 
                    @if ($errors->has('quantity'))
                        <li>{{ $errors->first('quantity') }}</li>
                    @endif 
                    @if ($errors->has('avatar'))
                        <li>{{ $errors->first('avatar') }}</li>
                    @endif
                </ul>
            </div>
        </div>
    @endif
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Products List!</h4>
                <span>
                    <!-- trigger add product modal -->
                    <button class="btn btn-primary btn-sm"  type="button" data-toggle="modal" data-target="#AddProductModal">Add new Product</button>
                </span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Products</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <img src="{{ asset('assets/images/wilson-montoya-UFRxTmcMvNE-unsplash.jpg') }}" style="width: 4em;border-radius: 50%;    height: 4em;">
                                            <span>Donna Snider</span>
                                        </div>
                                    </td>
                                    <td>27.9</td>
                                    <td>10</td>
                                    <td>2011/01/25</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="#" class="btn btn-xs btn-outline-warning">edit</a>
                                            <a href="#" class="btn btn-xs btn-outline-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modals --}}
    <x-add-products-component></x-add-products-component>
    @push('script')
        <!-- Datatable -->
        <script src="{{ asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/plugins-init/datatables.init.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone-min.min.js"></script>
        <script>
            Dropzone.autoDiscover = false;

            function generateUniqeID() {
                return '_' + Math.random().toString(36).substr(2, 9);
            }

            window.onload = () => {
                $('.dropzone').each(function(index, dropzone){
                    $(dropzone).attr('id', generateUniqeID());
                    instatiateDropzone($(dropzone).attr('id'));
                })
            }

            function instatiateDropzone(id) {
                $(`#${id}`).dropzone({ 
                    url: @json(route('files.store')),
                    method: "post",
                    uploadMultiple: true,
                    maxFilesize: 4, //max size of 4mb
                    paramName: 'files',
                    acceptedFiles: ".jpeg,.jpg,.png",
                    maxFiles: 4,
                    headers:{'csrf-token': $('meta[name="csrf-token"]').attr('content')},
                    addRemoveLinks: true,
                    addedFile: function(file) {
                        if (this.files.length) {
                            var _i, _len;
                            for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
                            {
                                if(this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModified.toString() === file.lastModified.toString())
                                {
                                    this.removeFile(file);
                                }
                            }
                        }
                    },
                    renameFile: function(file) {
                        return new Date().getTime() + '_' + file.name;    // to rename file name but i didn't use it. i renamed file with php in controller.
                    },
                    removedfile: function(file) {		
                        var name = file.upload.filename;

                        swal({
                            title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: 'POST',
                                    url: @json(route('files.delete')),
                                    data: {
                                            filename: name,
                                            _token: $('meta[name="csrf-token"]').attr('content')
                                        },
                                    success: function (response){
                                        swal({
                                            title: "Success",
                                            text: "File has been successfully deleted!",
                                            icon: "success",
                                            button: "ok",
                                        });
                                        let ids = $(`#${id}`).closest('.shadow').find('input.images_id');
                                        let arr =  ids.val().split(',');
                                        arr = arr.filter(a=>{
                                            return a != '' && a != ','
                                        })
                                        // delete image id from array
                                        let set = new Set(arr)
                                        set.delete(response)
                                        arr=[...set];
                                        ids.val(arr);
                                    },
                                    error: function(e) {
                                        swal({
                                            title: "Oops",
                                            text: "sorry something went wrong!",
                                            icon: "error",
                                            button: "ok",
                                        });
                                    }
                                });
                                var fileRef;
                                return (fileRef = file.previewElement) != null ? 
                                fileRef.parentNode.removeChild(file.previewElement) : void 0;
                            }
                        });
                    },
                    error: function(file, response){
                    if($.type(response) === "string")
                            var message = response; //dropzone sends it's own error messages in string
                        else
                            var message = response.message;
                        file.previewElement.classList.add("dz-error");
                        _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                        _results = [];
                        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                            node = _ref[_i];
                            _results.push(node.textContent = message);
                        }
                        return _results;
                    },
                    sending: function(file, xhr, formData) {
                        formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
                    },
                    success: function(file, response){
                        let ids = $(`#${id}`).closest('.shadow').find('input.images_id');
                        let arr =  ids.val().split(',');
                        arr = arr.concat(response);
                        ids.val(arr);
                    },
                    completemultiple:function(){
                        let ids = $(`#${id}`).closest('.shadow').find('input.images_id');
                        let arr =  ids.val().split(',');
                        // filter the array to get the numeric values
                        arr = arr.filter(a=>{
                            return a != '' && a != ','
                        })
                        // Set gets the unique numeric value
                        arr=[...new Set(arr)];
                        ids.val(arr);
                    },
                });
            }
            
            // delete row from form
            $(".jDeleteRow").click(function() {
                var rowCount = $(this).closest('form').find('.shadow').length;
                if (rowCount > 1) {
                    $(this).closest('.shadow').remove();
                }
            });
            // add row to form
            $(".addNewRow").click(function() {
                var lastRow = $(this).closest('form').find('.shadow').last();
                var newRow = lastRow.clone(true, true); //use true to copy event bindings with rows.  Doesn't always work with 3rd party plugins.
                newRow.find('input').val('');
                newRow.addClass('mt-3');
                newRow.find('.dz-message.dropzone').remove();
                let dz = $(('<div class="dz-default dz-message dropzone mb-3"></div>'));
                dz.attr('id', generateUniqeID());
                dz.insertBefore( newRow.find(".form-group").last());
                setTimeout(() => {
                    instatiateDropzone(dz.attr('id'));
                }, 1500);
                newRow.find('.jDeleteRow').removeAttr("disabled");
                // remove error message if any
                newRow.find('small').remove();
                $(`#${dz.attr('id')}`).closest('.shadow').find('input.images_id').val('');
                newRow.find('textarea').val('');
                newRow.insertAfter(lastRow);
                // set name for hidden ids input
                let index = $(this).closest('form').find('.shadow').index(newRow);
                newRow.find('input.images_id').attr('name', `ids_${index}`);
            });
        </script>
        @if (session()->has('success'))
            <script>
                swal({
                    title: "Success",
                    text: @json(session()->get('success')),
                    icon: "success",
                    button: "ok",
                });
            </script>
        @endif
    @endpush
</x-admin-layout>