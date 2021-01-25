@extends('layouts.sidebar')
<!-- [ Header ] end -->
<!-- [ Main Content ] start -->

<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <form style="margin-left: 20px; margin-top: 60px;">
                                <div class="form-row">
                                    <div class="col">
                                        <select class="form-control ware_staff"  id="warehouse" name="warehouse">
                                            <option value="">Select Warehouse</option>
                                            @foreach($warehouse as $key => $staTus)
                                                <option value="{{$staTus->id}}">{{$staTus->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ware_staff" id="Status" name="status">
                                            <option value="">Select Statics</option>
                                            <option value="1">Đang nhập kho</option>
                                            <option value="2">Đã nhập kho</option>
                                            <option value="3">Chờ giao hàng</option>
                                            <option value="4">Đang giao hàng</option>
                                            <option value="5">Đã nhận hàng</option>
                                            <option value="0">Hủy đơn</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control ware_staff" id="ware_staff" name="ware_staff">
                                            <option value="">Select Warehouse Staff</option>
                                            @foreach($user as $key => $staTus)
                                                <option value="{{$staTus->id}}">{{$staTus->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row filter">
                            <!-- [ stiped-table ] start -->
                            <div class="col-xl-12 text-center">.
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        <p>{{ session('success') }}</p>
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>#id</th>
                                                    <th>Name</th>
                                                    <th>Date created</th>
                                                    <th>Date update</th>
                                                    <th>Delivery</th>
                                                    <th>Through</th>
                                                    <th>Warehouse Staff</th>
                                                    <th>Shipping Staff</th>
                                                    <th>Status Bill</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($list as $value)
                                                    <tr>
                                                        <td class="id_bill" id="{{$value->id}}">{{$value->id}}</td>
                                                        <td>{{$value->name}}</td>
                                                        <td>{{$value->created_at}}</td>
                                                        <td>{{$value->created_at}}</td>
                                                        <td>
                                                            @foreach($warehouse as $key => $staTus)
                                                                {{$value->delivery == $staTus->id ? $staTus->name : ''}}
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($warehouse as $key => $staTus)
                                                                {{$value->through == $staTus->id ? $staTus->name : ''}}
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($user as $key => $staTus)
                                                                {{$value->ware_staff == $staTus->id ? $staTus->name : ''}}
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($user as $key => $staTus)
                                                                {{$value->shipping_staff == $staTus->id ? $staTus->name : ''}}
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($status_array as $key => $staTus)
                                                                @if($value->status_bill == $staTus)
                                                                {{$key}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ stiped-table ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Required Js -->
<script src="{{ asset('js/vendor-all.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/pcoded.min.js') }}"></script>
<script type="text/javascript">
    $( ".ware_staff" ).change(function() {
        var status =$("#Status").val();
        var ware_staff =$("#ware_staff").val();
        var warehouse =$("#warehouse").val();
        console.log(ware_staff);
        $.ajax(

            {

                url: "/bill/staticss",

                type: 'GET',
                data: {'status_bill': status, 'ware_staff': ware_staff, 'warehouse':warehouse},

            }).done(

            function(data){
                $('.filter').html(data.html)
            }
        );
    });
</script>
</body>

</html>
