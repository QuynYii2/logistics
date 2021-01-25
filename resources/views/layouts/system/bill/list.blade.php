@extends('layouts.sidebar')
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">List of warehouses in the system</h5>
                                            </div>
                                            <!-- <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
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
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($list as $value)

                                                        <tr>
                                                            <td class="id_bill" id="{{$value->id}}">{{$value->id}}</td>
                                                            <td>{{$value->name}}</td>
                                                            <td>{{$value->created_at}}</td>
                                                            <td>{{$value->updated_at}}</td>
                                                            <td>
                                                                @foreach($list_warehouses as $key => $staTus)
                                                                 {{$value->delivery == $staTus->id ? $staTus->name : ''}}
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @foreach($list_warehouses as $key => $staTus)
                                                                    {{$value->through == $staTus->id ? $staTus->name : ''}}
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @foreach($list_user as $key => $staTus)
                                                                    {{$value->ware_staff == $staTus->id ? $staTus->name : ''}}
                                                                @endforeach
                                                            </td>
                                                            <td>@foreach($list_user as $key => $staTus)
                                                                    {{$value->shipping_staff == $staTus->id ? $staTus->name : ''}}
                                                                @endforeach</td>
                                                            <td>
                                                                <select class="form-control" name="nation_ids" id="nation_id" data="{{$value->id}}">
                                                                    @foreach($status_array as $key => $staTus)
                                                                        <option value="{{$staTus}}" {{$value->status_bill == $staTus ? 'selected' : ''}}>{{$key}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <!-- Call to action buttons -->
                                                                <ul class="list-inline m-0">
                                                                    <li class="list-inline-item">
                                                                        <a href="/bill/{{$value->id}}/edit">
                                                                            <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                                                        </a>
                                                                    </li>
                                                                    @if($permission == 1 || $permission == 2)
                                                                        <li class="list-inline-item">
                                                                            <a href="/bill/{{$value->id}}/delete/">
                                                                                <button class="btn btn-danger btn-sm rounded-0" type="button" onclick="return confirm('Are You Sure To Delete This Item?')" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                </ul>
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
        $("select[name='nation_ids']").change(function() {
            var id =$(this).attr('data');
            // console.log(id);
            var status =$("#nation_id").val();
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/bill/ChangeStatus',
                data: {'id': id, 'status_bill': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        });
    </script>
</body>

</html>
