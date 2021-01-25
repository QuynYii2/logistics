


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

