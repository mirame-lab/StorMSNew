@extends('layout')

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>District Store Requestion</h4>
        <form>
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Information</h5>
                            <small class="text-muted float-end">
                                <script>
                                    const date = new Date();
                                    var day =  date.getDate();
                                    var month = date.getMonth();
                                    var yr = date.getFullYear();
                                    document.write(day + "/" + (month+1) + "/" + yr);
                                </script>
                            </small>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="name">Nama</label>
                                <input type="text" class="form-control" id="name" value="{{Auth::user()->name}}"
                                    placeholder="Muhamad Izwan" readonly />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="ic">IC No.</label>
                                <input type="text" class="form-control" id="ic" value="{{Auth::user()->ic}}"
                                    placeholder="931019019999" readonly />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Tel No.</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    value="{{Auth::user()->tel}}" placeholder="658 799 8941" readonly />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="team">Team</label>
                                <input type="text" class="form-control" id="team" value="{{Auth::user()->team}}"
                                    placeholder="Aiman/Hafidz" readonly />
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Material Information</h5>

                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Project</label>
                                <div class="input-group input-group-merge">
                                    <!-- <span id="basic-icon-default-fullname2" class="input-group-text">
                                        
                                    </span> -->
                                    <input list="projectlist" name="projectlist" class="form-control">
                                    <datalist id="projectlist">
                                        @foreach($projectlist as $projectlist)
                                        <option value="{{$projectlist->project_id}} | {{$projectlist->project_name}}">
                                            @endforeach

                                    </datalist>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Item List</label>

                                <div class="demo-inline-spacing ">
                                    <small>Press "+" to add materials.</small>
                                    <ol id="materialList" class="list-group">

                                    </ol>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>

        </form>
    </div>
</div>
</div>
</div>
</div>
<!-- / Content -->
<div class="buy-now">
    <button type="button" class="btn rounded-pill btn-icon btn-buy-now" data-bs-toggle="modal"
        data-bs-target="#backDropModal">
        <span class="tf-icons bx bx-plus"></span></button>
</div>


<!-- Modal -->
<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Add Material</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Description</label>
                        <input list="materiallist" name="materiallist" type="text" id="materialname"
                            class="form-control" placeholder="FIBER DP WO SPLITTER AERIAL"
                            onchange="autofill(this.value)">
                        <datalist id="materiallist">
                            @foreach($materiallist as $materiallist)
                            <option value="{{$materiallist->material_name}}">
                                @endforeach
                        </datalist>

                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="materialID" class="form-label">ID</label>
                        <input type="text" id="materialID" class="form-control" placeholder="1000002626" />
                    </div>
                    <div class="col mb-0">
                        <label for="dobBackdrop" class="form-label">Quantity</label>
                        <input type="number" id="quantity" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="CreateNewItem()">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    function autofill(name) {

        if (name.length == 0) {
            document.getElementById("materialID").value = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("materialID").value = this.responseText;
                }
            };
            xmlhttp.open("GET", "/get-material-id?q=" + name, true);
            xmlhttp.send();
        }
    }


    function CreateNewItem() {
        var li = document.createElement('li');
        var materialID = document.createElement('small');
        var materialName = document.createElement('h6');
        var quantity = document.createElement('p');
        li.className = "list-group-item";
        quantity.className = "mb-1";

        var matID = document.createTextNode(document.getElementById("materialID").value);
        var matName = document.createTextNode(document.getElementById("materialname").value);
        var matQ = document.createTextNode(document.getElementById("quantity").value + " pcs");

        materialID.appendChild(matID);
        materialName.appendChild(matName);
        quantity.appendChild(matQ);

        li.appendChild(materialID);
        li.appendChild(materialName);
        li.appendChild(quantity);



        document.getElementById('materialList').appendChild(li);

    }

   
</script>
@endsection