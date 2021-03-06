@extends('admin')

@section('styles')
    <style>
        hr {
            margin: 5px 0;
        }
    </style>
@endsection

@section('content')
    <h3 class="h3-title">Quản lý Sản phẩm</h3>

    @include('flash_message')

    <div class="portlet-title">

    </div>
    <div class="portlet-body form">
    </div>

    {{--<div>--}}
    {{--<a href="{{ url('admin/brands/create') }}" class="btn btn-primary">Thêm mới</a>--}}
    {{--</div>--}}

    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover" id="orders-table">
                <thead>
                <tr>
                    <th>Root ID</th>
                    <th>Tên SP</th>
                    <th>Ảnh</th>
                    <th>Short link</th>
                    <th>Giá</th>
                    <th>Hoàn tiền khách</th>
                    <th>Hoàn tiền thực</th>
                    <th>Từ trang</th>
                    <th>SKU</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Thông tin chiết khấu</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th> Ngành hàng </th>
                            <th> Chiết khấu </th>
                        </tr>
                        </thead>
                        <tbody id="modal-body">
                        <tr>
                            <td> 2 </td>
                            <td> Larry </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('scripts')

    <script>

        var orderTable = $('#orders-table').DataTable({
            processing: true,
            bServerSide: true,
            // "order": [[0, "desc"]],
//            dom: 'lBfrtip',
            "aaSorting": [],
            // scrollX: true,
//            stateSave: true,
//            buttons: [
//                {extend: 'colvis', text: '<i class="fa fa-list-ul"></i>'}
//            ],
            searching: false,
            ajax: {
                url: '{{ url('admin/productAttribute.data') }}',
                data: function (d) {

                }
            },
            columns: [
                {data: 'root_id', name: 'root_id'},
                {data: 'name', name: 'name'},
                {data: 'image', name: 'image'},
                {data: 'short_link', name: 'short_link'},
                {data: 'price', name: 'price'},
                {data: 'cash_back', name: 'cash_back'},
                {data: 'cash_back_real', name: 'cash_back_real'},
                {data: 'source', name: 'source'},
                {data: 'sku', name: 'publisher_payout'},
                {data: 'category_name', name: 'category_name'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action'},
            ],

        });

        orderTable.on('xhr', function () {
            var data = orderTable.ajax.params();
        });

        $(document).on('click', '.status-btn', function () {
            var status = $(this).attr('data-status');
            var product_id = $(this).attr('data-product-id');

            $.ajax({
                type: 'POST',
                data: {
                    product_id: product_id,
                    status: status,
                },
                dataType: 'json',
                url: '{{ url('admin/brands/update-status-product') }}',
                success: function (response) {
                    if (response.status === 0) {
                        swal(response.message, '', "warning")
                    } else {
                        swal(response.message, '', "success");
                        orderTable.ajax.reload();
                    }
                }
            });
        });

        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            link = this;

            swal({
                    title: "Bạn muốn xóa thương hiệu này?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Đồng ý xóa",
                    closeOnConfirm: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        window.location = link.href;
                    } else {
                        return false;
                    }
                });
        });

        function getOrderAttr() {
            orderTable.ajax.reload();
        }

        $(document).on('click', '.ck-btn', function () {
            var id = $(this).attr('data-brand-id');

            $.ajax({
                url: '{{url('admin/get-ck-by-brand-id')}}',
                type: 'get',
                data: {id: id},
                dataType: 'html',
                success: function (response) {
                    $('#modal-body').html(response);
                    $('#basic').modal('show');
                },
                error: function (response) {
                    $('#order-detail').html('');
                }
            })
        });

    </script>

@endsection