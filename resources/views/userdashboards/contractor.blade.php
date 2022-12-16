<!-- Transactions -->
<div class="col-md-12 order-2 mb-4">
    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Request List</h5>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
            </div>
        </div>
        <!-- <div class="card-body">
            <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">

                <?php  

                // for($i=0; $i<count($req_materials); $i++){
                    $i=0;
                    ?>
                <div class="accordion-item card">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionIcon-{{$i}}" aria-controls="accordionIcon-1">
                        <div class="avatar flex-shrink-0 me-3">
                            @if(!$req_materials[$i]["materials"][0]['SK_approval'])<span
                                class="avatar-initial rounded bg-label-warning"><i class="bx bx-time"></i></span>
                            @endif
                            @if($req_materials[$i]["materials"][0]['SK_approval'])<span
                                class="avatar-initial rounded bg-label-success"><i
                                    class="bx bx-check-square"></i></span>
                            @endif
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small
                                    class="text-muted d-block mb-1">{{$req_materials[$i]["materials"][0]['request_id']}}</small>
                                <div><p class="mb-0">{{$req_materials[$i]["materials"][0]['project_id']}}</p></div>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">{{count($req_materials[$i]["materials"])}}</h6>
                                <span class="text-muted">item(s)</span>
                            </div>
                        </div>
                    </button>
                    <div id="accordionIcon-{{$i}}" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            <div class="col-lg-12">
                                <small class="text-light fw-semibold">Material List</small>
                                <div class="demo-inline-spacing mt-3">
                                    <ul class="list-group">
                                        <?php
                                            // for($j=0; $j<count($req_materials[$i]["materials"]); $j++){
                                                $j=0;
                                        ?>

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="me-2">
                                                <small
                                                    class="text-muted d-block mb-1">{{$req_materials[$i]["materials"][$j]['material_id']}}</small>
                                                <h6 class="mb-0">{{$req_materials[$i]["materials"][$j]['mat_name']}}
                                                </h6>
                                            </div>
                                            <span class="badge bg-primary">{{$req_materials[$i]["materials"][$j]['q_taken']}}</span>
                                        </li>

                                        <?php
                                            // }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php  
            // }?>

            </div>
        </div> -->
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
                        <!--  -->
                        @if($req_list['SK_approval']) <span class="badge bg-label-success me-1">Approved</span> 
                        @else <span class="badge bg-label-warning me-1">Pending</span>
                        @endif
                    </td>
                    <td class="col-sm-1">
                        <!-- <div class="dropdown"> -->
                        <!-- <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button> 
              <div class="dropdown-menu"> -->
                        <div class="row">
                            <div class="col-sm-1">
                                <a class="dropdown-item" href="javascript:void(0);"><i
                                        class="bx bx-edit-alt me-1"></i></a>
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