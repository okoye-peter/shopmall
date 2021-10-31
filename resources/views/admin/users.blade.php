<x-admin-layout>
    @push('css')
        <!-- Datatable -->
        <link href="{{ asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    @endpush
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span class="ml-1">Datatable</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>2011/01/25</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            {{-- <a href="#" class="btn btn-xs btn-outline-info" data-target="#ViewUer">Info</a> --}}
                                            <a href="#" class="btn btn-xs btn-outline-warning">Deactive</a>
                                            <a href="#" class="btn btn-xs btn-outline-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
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
    @push('script')
        <!-- Datatable -->
        <script src="{{ asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/plugins-init/datatables.init.js') }}"></script>
    @endpush
</x-admin-layout>