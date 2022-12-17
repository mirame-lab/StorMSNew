<div class="accordion-item card">
    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-{{$i}}" aria-controls="accordionIcon-1">
        <div class="avatar flex-shrink-0 me-3">
            @if(!$req_materials[$i]["materials"][0]['SK_approval'])<span class="avatar-initial rounded bg-label-warning"><i class="bx bx-time"></i></span>
            @endif
            @if($req_materials[$i]["materials"][0]['SK_approval'])<span class="avatar-initial rounded bg-label-success"><i class="bx bx-check-square"></i></span>
            @endif
        </div>
        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
            <div class="me-2">
                <small class="text-muted d-block mb-1">{{$req_materials[$i]["materials"][0]['request_id']}}</small>
                <div>
                    <p class="mb-0">{{$req_materials[$i]["materials"][0]['project_id']}}</p>
                </div>
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
                        $j = 0;
                        ?>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="me-2">
                                <small class="text-muted d-block mb-1">{{$req_materials[$i]["materials"][$j]['material_id']}}</small>
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