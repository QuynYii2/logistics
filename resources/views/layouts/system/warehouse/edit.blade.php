@extends('layouts.sidebar')
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Edit warehouse: {{$detail[0]->name}}</h5>
                                        </div>
                                        <div class="card-body">
                                        @if (session('notsuccess'))
                                        <div class="alert alert-success">
                                            <p>{{ session('notsuccess') }}</p>
                                        </div>
                                        @endif
                                            <div class="row">
                                                @foreach ($detail as $value)
                                                <div class="col-md-12">
                                                    <form method="post" action="/warehouse/update">
                                                         @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                                            <input type="text" name="name_warehouse" class="form-control" id="exampleInputName" aria-describedby="nameHelp" value = "{{$value->name}}" placeholder="Enter name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Name Manager</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="name_manager">
                                                                <option>{{$value->name_manager}}</option>
                                                                @foreach ($manager_warehouse as $values)
                                                                    <option>{{$values->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Name Staff</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="name_staff">
                                                                <option>{{$value->name_staff}}</option>
                                                                @foreach ( $staff_warehouse as $values)
                                                                    <option>{{$values->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                                @endforeach
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ form-element ] end -->
                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

     <!-- Required Js -->
     <script src="../assets/js/vendor-all.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>

</body>

</html>
