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
                                                            <th>Email</th>
{{--                                                            <th>Permission</th>--}}
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($list as $value)
                                                        <tr>
                                                            <td>{{$value->id}}</td>
                                                            <td>{{$value->name}}</td>
                                                            <td>{{$value->email}}</td>
{{--                                                            <td>{{$value->id_role}}</td>--}}
                                                            <td>
                                                            <input data-id="{{$value->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->status ? 'checked' : '' }}>
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
    <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
         console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/userChangeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>

</body>

</html>
