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
        <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">

            <?php

            for ($i = 0; $i < count($all_req_materials); $i++) {

            ?>
                <div class="accordion-item card">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-{{$i}}" aria-controls="accordionIcon-1">
                        <div class="avatar flex-shrink-0 me-3">
                            @if(!$all_req_materials[$i]["materials"][0]['SK_approval'])<span class="avatar-initial rounded bg-label-warning"><i class="bx bx-time"></i></span>
                            @endif
                            @if($all_req_materials[$i]["materials"][0]['SK_approval'])<span class="avatar-initial rounded bg-label-success"><i class="bx bx-check-square"></i></span>
                            @endif
                        </div>
                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">{{$all_req_materials[$i]["materials"][0]['request_id']}} | {{$all_req_materials[$i]["materials"][0]['requester_name']}}</small>
                                <div>
                                    <p class="mb-0">{{$all_req_materials[$i]["materials"][0]['project_id']}}</p>
                                </div>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                                <h6 class="mb-0">{{count($all_req_materials[$i]["materials"])}}</h6>
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
                                        for ($j = 0; $j < count($all_req_materials[$i]["materials"]); $j++) {
                                            // print_r($all_req_materials[$i]['materials'][$j]['id']);
                                        ?>

                                            <form method="POST" action="{{route('requestlist.update', $all_req_materials[$i]['materials'][$j]['id'])}}">
                                                @csrf
                                                @METHOD('PUT')
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">{{$all_req_materials[$i]["materials"][$j]['material_id']}}</small>
                                                        <h6 class="mb-0">{{$all_req_materials[$i]["materials"][$j]['mat_name']}}
                                                        </h6>
                                                    </div>
                                        
                                                    @if($all_req_materials[$i]["materials"][$j]['drum_no'])
                                                    @php
                                                    $drumlist = json_decode($all_req_materials[$i]["materials"][$j]['drum_no']);
                                                    @endphp
                                                    <br>
                                                    <ol>
                                                        @foreach($drumlist as $drumlist)
                                                        <li>
                                                            {{$drumlist->drum_no}}
                                                        </li>
                                                        @endforeach
                                                    </ol>
                                                    @endif
                                                    <span class="badge bg-primary">{{$all_req_materials[$i]["materials"][$j]['q_taken']}}</span>

                                                    <input name="mat_id[]" type="hidden" value="{{$all_req_materials[$i]['materials'][$j]['material_id']}}">
                                                    <input name="id[]" type="hidden" value="{{$all_req_materials[$i]['materials'][$j]['id']}}">
                                                    <input name="approve[]" type="hidden" value="1">

                                                </li>

                                            <?php
                                        }
                                            ?>
                                    </ul>
                                    <button type="submit" class="btn btn-primary">Approve</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php  } ?>

        </div>
    </div>
</div>