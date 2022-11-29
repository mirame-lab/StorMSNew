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

<script>

</script>