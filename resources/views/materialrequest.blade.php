@extends('layout')

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>District Store Requestion</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Basic Information</h5>

                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="name">Nama</label>
                            <input type="text" class="form-control" id="name" value="{{Auth::user()->name}}"
                                placeholder="Mohamad Izwan" readonly />
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
                        <small class="text-muted float-end" id="req_date">
                            <script>
                                const date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var yr = date.getFullYear();
                                document.write(day + "/" + (month + 1) + "/" + yr);
                            </script>
                        </small>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Project</label>
                            <div class="input-group input-group-merge">
                                <!-- <span id="basic-icon-default-fullname2" class="input-group-text">
                                        
                                    </span> -->
                                <input list="projectlist" name="projectlist" class="form-control" id="project">
                                <datalist id="projectlist">
                                    @foreach($projectlist as $projectlist)
                                    <option value="{{$projectlist->project_id}} | {{$projectlist->project_name}}">
                                        @endforeach

                                </datalist>
                            </div>
                        </div>
                        <form method="POST" action="{{route('requestlist.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Item List</label>

                                <div class="demo-inline-spacing ">
                                    <small>Press "+" to add materials. </small>
                                    <ol id="materialList" class="list-group">
                                        <!-- <li class="list-group-item">
                                            <small>1000000747</small>
                                            <h6>CABLE OFC LOOSE U/G 12C</h6>
                                            <ul id="drumlist">

                                            </ul>
                                            <p class="mb-1 mt-3"> 2000m </p>
                                        </li> -->
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
    <div class="modal fade" id="backDropModal" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Add Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBackdrop" class="form-label">Description</label>
                            <input list="materiallist" name="materiallist" type="text" id="materialname"
                                class="form-control" placeholder="FIBER DP WO SPLITTER AERIAL" value=""
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
                            <input type="text" id="materialID" class="form-control" placeholder="1000002626"
                                onchange="cables()" />
                        </div>
                        <div class="col mb-0">
                            <label for="dobBackdrop" class="form-label">Quantity</label>
                            <input type="number" id="quantity" class="form-control" />
                        </div>
                    </div>

                    <div id="cable" class="col mt-3" style="display: none">
                        <label for="nameBackdrop" class="form-label">Drum list</label>
                        <div id="cablelist" class="input-group ">
                            <small>Select required drum(s). </small>
                            <!-- <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Drum
                            </button>
                            <ul id="cablelist" class="dropdown-menu">

                            </ul>
                            <input id="drum_no" type="text" class="form-control" aria-label="Text input with dropdown button" /> -->
                        </div>
                        <!-- <input list="cablelist" name="cablelist" type="text" id="cable" class="form-control" 
                            placeholder="GVC2021344">
                        <datalist id="cablelist"> -->
                        <!-- @foreach($cableslist as $cableslist)
                            <option value="{{$cableslist->drum_no}} | {{$cableslist->balance}}">
                                @endforeach 
                        </datalist> -->

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" onclick="CreateNewItem()"
                        data-bs-dismiss="modal">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        var drums = [];
        var count = 0;

        function setval(value, amount, id) {
            // document.getElementById('drum_no').value = value;


            if (document.getElementById(id).checked) {
                drums.push(
                    {
                        drum_no: value,
                        balance: amount
                    }
                );
            }
            else {
                const filtereddrums = drums.filter(drum => drum.drum_no !== value);
                drums = filtereddrums;
            }

            // console.log(drums);
            let total = drums.reduce(
                function (previousValue, currentValue) {
                    return previousValue + currentValue.balance;
                }, 0
            );
            // console.log(total);
            document.getElementById('quantity').value = total;
        }

        function autofill(name) {
            var cablelist = document.getElementById('cablelist');

            if (name.length == 0) {
                document.getElementById("materialID").value = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("materialID").value = this.responseText;
                        drum_no = document.getElementById('materialID').value;

                        console.log(parseInt(drum_no));
                        if ((parseInt(drum_no) >= 1000000747) && (parseInt(drum_no) <= 1000000767) || parseInt(drum_no) == 1000004845) {
                            document.getElementById('cable').style.display = "block";

                            var xmlhttp2 = new XMLHttpRequest();
                            xmlhttp2.onreadystatechange = function () {
                                // console.log(this.responseText);
                                const drumlist = JSON.parse(this.responseText);
                                // console.log(Object.keys(drumlist));
                                const keys = Object.keys(drumlist);
                                if (cablelist.innerHTML) cablelist.innerHTML = " ";
                                for (let i = 0; i < keys.length; i++) {

                                    // console.log(drumlist[keys[i]].drum_no);
                                    // var li = document.createElement('li');
                                    // li.value = drumlist[keys[i]].drum_no;
                                    // var a = document.createElement('a');
                                    // a.setAttribute('class', 'dropdown-item');
                                    // a.setAttribute('href', '#');
                                    // a.setAttribute('o l ick', 'setval(' + '"' + drumlist[keys[]].drum_no + '"' + ',' + drumlist[keys[i]].balance + ');');
                                    // var drum_no = document.createTextNode(drumlist[keys[i]].drum_no + " | " + drumlist[keys[i]].balance);
                                    // a.appendChild(drum_no);
                                    // li.appendChild(a);
                                    // cablelist.appendChild(li);

                                    var div = document.createElement('div');
                                    div.setAttribute('class', 'form-check');

                                    var inp = document.createElement('input');
                                    inp.setAttribute('class', 'form-check-input');
                                    inp.setAttribute('type', 'checkbox');
                                    inp.setAttribute('value', drumlist[keys[i]].drum_no);
                                    inp.setAttribute('id', 'defaultCheck' + (i + 1));
                                    inp.setAttribute('onclick', 'setval(' + '"' + drumlist[keys[i]].drum_no + '"' + ',' + drumlist[keys[i]].balance + ', this.id)');

                                    // var hiddenip = document.createElement('input');
                                    // hiddenip.setAttribute('id', drumlist[keys[i]].drum_no);
                                    // hiddenip.setAttribute('value', drumlist[keys[i]].balance);
                                    // hiddenip.setAttribute('type', 'hidden');
                                    // div.appendChild(hiddenip);

                                    div.appendChild(inp);

                                    var label = document.createElement('label');
                                    label.setAttribute('class', 'form-check-label');
                                    label.setAttribute('for', 'defaultCheck' + (i + 1));
                                    var txt = document.createTextNode(drumlist[keys[i]].drum_no + '........' + drumlist[keys[i]].balance);
                                    label.appendChild(txt);

                                    div.appendChild(label);

                                    cablelist.appendChild(div);

                                }

                            }

                            xmlhttp2.open("GET", "/get-drum-list?q=" + drum_no, true);
                            xmlhttp2.send();

                        }
                        else {
                            document.getElementById('cable').style.display = "none";
                        }
                    }
                };
                xmlhttp.open("GET", "/get-material-id?q=" + name, true);
                xmlhttp.send();



            }

            // if(parseInt(document.getElementById("materialID").value))
        }


        function CreateNewItem() {
            count++;
            drum_no = document.getElementById("materialID").value;

            var li = document.createElement('li');
            var materialID = document.createElement('small');
            var materialName = document.createElement('h6');
            var quantity = document.createElement('p');
            li.className = "list-group-item";
            quantity.className = "mb-1";

            var matID = document.createTextNode(document.getElementById("materialID").value);
            var matName = document.createTextNode(document.getElementById("materialname").value);
            var matQ = document.createTextNode(document.getElementById("quantity").value + " pcs");
            if ((parseInt(drum_no) >= 1000000747) && (parseInt(drum_no) <= 1000000767) || parseInt(drum_no) == 1000004845) matQ = document.createTextNode(document.getElementById("quantity").value + " M");

            materialID.appendChild(matID);
            materialName.appendChild(matName);
            quantity.appendChild(matQ);

            li.appendChild(materialID);
            li.appendChild(materialName);
            if ((parseInt(drum_no) >= 1000000747) && (parseInt(drum_no) <= 1000000767) || parseInt(drum_no) == 1000004845) {
                
                var ul = document.createElement('ol');
                ul.setAttribute('class','mb-3');
                drums.forEach(element => {
                    console.log(element.drum_no);
                    var li = document.createElement('li');
                    var drumtxt = document.createTextNode(element.drum_no + ' [' + element.balance + ']');

                    li.appendChild(drumtxt);

                    ul.appendChild(li);
                });

                li.appendChild(ul);
            }
            li.appendChild(quantity);

            var req_date = document.createElement('input');
            var ic = document.createElement('input');
            var proj_id = document.createElement('input');
            var mat_id = document.createElement('input');
            var quantity = document.createElement('input');
            var cables = document.createElement('input');
            var del = document.createElement('span');
            var trash = document.createElement('i');

            req_date.setAttribute('name', 'req_date[]');
            ic.setAttribute('name', 'ic[]');
            proj_id.setAttribute('name', 'proj_id[]');
            mat_id.setAttribute('name', 'mat_id[]');
            quantity.setAttribute('name', 'quantity[]');
            cables.setAttribute('name', 'cables[]');
            del.setAttribute('class', 'badge bg-danger');
            trash.setAttribute('class', 'bx bx-trash me-2');

            trash.setAttribute('onclick', 'deleteMat('+ count +')');

            del.appendChild(trash);
            li.appendChild(del);

            req_date.value = document.getElementById('req_date').innerText;
            ic.value = document.getElementById('ic').value;
            proj_id.value = document.getElementById('project').value;
            mat_id.value = document.getElementById('materialID').value;
            quantity.value = document.getElementById('quantity').value;
            cables.value = JSON.stringify(drums);


            req_date.setAttribute('type', 'hidden');
            ic.setAttribute('type', 'hidden');
            proj_id.setAttribute('type', 'hidden');
            mat_id.setAttribute('type', 'hidden');
            quantity.setAttribute('type', 'hidden');
            cables.setAttribute('type', 'hidden');

            li.appendChild(req_date);
            li.appendChild(ic);
            li.appendChild(proj_id);
            li.appendChild(mat_id); 
            li.appendChild(quantity);
            li.appendChild(cables);


            li.setAttribute('id',String(count));

            // document.getElementsByName('req_date')[0].style.visibility = "hidden";
            // document.getElementsByName('ic')[0].style.visibility = "hidden";
            // document.getElementsByName('proj_id')[0].style.visibility = "hidden";
            // document.getElementsByName('mat_id')[0].style.visibility = "hidden";
            // document.getElementsByName('quantity')[0].style.visibility = "hidden";

            document.getElementById('materialList').appendChild(li);

        }

        function deleteMat(id){
            document.getElementById(id).innerHTML = "";
        }



    </script>
    @endsection