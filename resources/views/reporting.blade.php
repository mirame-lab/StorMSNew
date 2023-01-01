@extends('layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Stock Take</h5> <!-- / Content -->
        <div class="buy-now">
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#backDropModal1">Add stock
                <span class="tf-icons bx bx-plus"> </span></button>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#backDropModal2">Add material
               <span class="tf-icons bx bx-plus"> </span></button>
        </div>




          <!-- Modal -->
        <div class="modal fade" id="backDropModal1" tabindex="-1">
            <div class="modal-dialog">
               <form id="addstock" class="modal-content" method="POST" action="">
                    @method('PUT')
                    @csrf
           <div class="modal-header">
                        <h5 class="modal-title" id="backDropModal1Title">Add Stock Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                    <div class="modal-body">
                        <div class="row">
                     <div class="col mb-3">
                                <label for="nameBackdrop" class="form-label">Description</label>
                                <input list="materiallist" name="materiallist" type="text" id="materialname" class="form-control" placeholder="FIBER DP WO SPLITTER AERIAL" value="" oninput="autofill(this.value); setformid(this.value); iscable(this.value); ">
                        <datalist id="materiallist">
                                    @foreach($materiallist as $material)
                                    <option value="{{$material->material_name}}">
                         @endforeach
                                </datalist>

                    </div>
                        </div>
                        <div class="row g-2">
           <div class="col mb-0">
                                <label for="materialID" class="form-label">ID</label>
                                <input type="text" name="materialID" id="materialID" class="form-control" placeholder="1000002626" />
        </div>
                            <div class="col mb-0">
                                <label for="dobBackdrop" class="form-label">Quantity</label>
                             <input type="number" name="quantity" id="quantity" class="form-control" oninput="" />
                            </div>
                        </div>
        <div id="cable" style="">
                         
                                <div class="row g-2">
                         <div class="col mt-3">
                                    <input type="hidden" name="mat_id" id="mat_id"/>
                                    <input type="hidden" name="mat_name" id="mat_name"/>
                      <input type="hidden" name="q" id="q" />
                                        <label for="drum" class="form-label">Drum No</label>
                                        <input type="text" name="drum" id="drum" class="form-control" placeholder="GLZ2202122" />
                                    </div>
                                </div>

                </div>
                        <div class="modal-footer mt-6">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                            </button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" >Save</button>
                        </div>

</div>

</form>
</div>
</div>



<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Material Number</th>
                <th>Material Name</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">

            @foreach($materiallist as $materiallist)
            <?php $count++; ?>
            <tr>

                <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button" aria-expanded="false"
                        aria-controls="collapseExample{{$count}}">{{$count}}</a>

                </td>
                <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button" aria-expanded="false"
                        aria-controls="collapseExample{{$count}}"><i
                            class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{$materiallist->material_id}}</strong>
                    </a></td>
                <td> <a data-bs-toggle="collapse" href="{{route('get-history-list', ['mat_id'=>$materiallist->material_id])}}" target=”_blank” role="button" aria-expanded="false"
                        aria-controls="collapseExample{{$count}}">{{$materiallist->material_name}}</a></td>
                <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button" aria-expanded="false"
                        aria-controls="collapseExample{{$count}}">{{$materiallist->quantity}}</a>
                    <input type="hidden" id="{{$materiallist->material_name}}" value="{{$materiallist->material_id}}">
                    <div class="collapse" id="collapseExample{{$count}}">


            </tr>
            <div class="collapse" id="collapseExample">
                <tr>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="backDropModal2" tabindex="-1">
    <div class="modal-dialog">
        <form id="addmat" class="modal-content" method="POST" action="{{route('cables.store')}}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModal2Title">Add Material</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="materialname" class="form-label">Description</label>
                        <input name="materialname" type="text" id="materialname" class="form-control"
                            placeholder="FIBER DP WO SPLITTER AERIAL" value="">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mt-0">
                        <label for="mat_id" class="form-label">ID</label>
                        <input type="text" name="mat_id" id="mat_id" class="form-control" placeholder="1000002626" />
                    </div>
                </div>
                <div class="col mb-0">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" name="qty" id="qty" class="form-control" />
                </div>
                <div class="mt-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" class="form-select" id="type" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Cable">Cable</option>
                        <option value="EA">EA</option>
                    </select>
                </div>
                <div class="col mb-0">
                    <label for="drum" class="form-label">Drum no</label>
                    <input type="text" name="drum" id="drum" class="form-control" />
                </div>

                <div>
                    <div>

                        <div class="modal-footer mt-6">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Create</button>
                        </div>

                    </div>

        </form>
    </div>
</div>
</div>
@endsection

<script>
    function setformid(mat_name) {

        var form = document.getElementById('addstock');
        var mat_id = document.getElementById(mat_name).value;
        console.log(mat_id);

        form.action = '{{route("material.update",' + mat_id + ')}}';
    }

    function setinput(result = false) {
        var id = document.getElementById('materialID').value;

        if (result) {

            var name = document.getElementById('materialname').value;
            var quantity = document.getElementById('quantity').value;

            var id_inp = document.getElementById('mat_id');
            var name_inp = document.getElementById('mat_name');
            var id_q = document.getElementById('q');

            id_inp.value = id;
            name_inp.value = name;
            id_q.value = quantity;
        }
    }
    function submitform() {

        document.getElementById('cableform').submit();
        alert('drum no submitted');
    }

</script>