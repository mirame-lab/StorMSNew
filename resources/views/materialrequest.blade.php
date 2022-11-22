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
                            <small class="text-muted float-end">tarikh</small>
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

                                    <ol id="materialList" class="list-group">
                                        <li class="list-group-item">
                                            <small>1000002626</small>
                                            <h6>FIBER DP WO SPLITTER AERIAL</h6>

                                            <p class="mb-1">
                                                2 pcs
                                            </p>
                                        </li>
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
    <button type="button" onclick="CreateNewItem()"
        class="btn rounded-pill btn-icon btn-buy-now"><span class="tf-icons bx bx-plus"></span></button>
</div>

<script>
    function CreateNewItem(){
        var li = document.createElement('li');
        var materialID = document.createElement('small');
        var materialName = document.createElement('h6');
        var quantity = document.createElement('p');
        li.className = "list-group-item";
        quantity.className = "mb-1";

        var matID = document.createTextNode("1000002626");
        var matName = document.createTextNode("FIBER DP WO SPLITTER AERIAL");
        var matQ = document.createTextNode("2 pcs");

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