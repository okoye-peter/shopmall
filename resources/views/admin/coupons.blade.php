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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Coupons</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Coupons</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Coupon Code</th>
                                    <th>Start</th>
                                    <th>Expire</th>
                                    <th>Staus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>123sacxcb56y</td>
                                    <td>2011/01/25</td>
                                    <td>2011/01/30</td>
                                    <td>
                                        <span class="badge badge-rounded badge-primary">Inactive</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>123sacxcb56y</td>
                                    <td>2011/01/25</td>
                                    <td>2011/01/30</td>
                                    <td>
                                        <span class="badge badge-rounded badge-info">In Progress</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>123sacxcb56y</td>
                                    <td>2011/01/25</td>
                                    <td>2011/01/30</td>
                                    <td>
                                        <span class="badge badge-rounded badge-danger">Expired</span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Coupon Code</th>
                                    <th>Start</th>
                                    <th>Expire</th>
                                    <th>Staus</th>
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