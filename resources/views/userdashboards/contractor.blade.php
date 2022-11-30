                <!-- Transactions -->
                <div class="col-md-12 order-2 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Request List</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Paypal</small>
                                            <h6 class="mb-0">Send money</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h6 class="mb-0">+82.6</h6>
                                            <span class="text-muted">USD</span>
                                        </div>
                                    </div>
                                </li>
  
                                

                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->

                <div class="card">
                    <h5 class="card-header">Request History</h5>

                    <div class="table-responsive text-nowrap">

                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Request ID</th>
                                    <th>Material ID</th>
                                    <th>Material Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach($req_list as $req_list)
                                <tr>
                                    <td><strong>{{$req_list['request_id']}}</strong></td>
                                    <td>{{$req_list['material_id']}}</td>
                                    <td>{{$req_list['mat_name']}}</td>
                                    <td>{{$req_list['q_taken']}}</td>
                                    <td>
                                        <!-- <span class="badge bg-label-primary me-1">Approved</span> -->
                                        <!-- <span class="badge bg-label-success me-1">Approved</span>  -->
                                        <span class="badge bg-label-warning me-1">Pending</span>
                                    </td>
                                    <td class="col-sm-1">
                                        <!-- <div class="dropdown"> -->
                                        <!-- <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button> 
              <div class="dropdown-menu"> -->
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i></a>
                                            </div>
                                            <div class="col-sm-1">
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></a>
                                            </div>


                                        </div>

                                        <!-- </div>
            </div> -->
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Bootstrap Table with Header Dark -->

                <script>

                </script>