@extends('layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4">Project List</h4>
<div class="card">
<h5 class="card-header">Table Basic</h5>
<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
          <th>Project ID</th>
                <th>Project</th>
            </tr>
      </thead>
    <tbody class="table-border-bottom-0">
        @foreach($proj as $proj)
        @php $c++; @endphp
        <tr id="row{{$c}}" style='cursor: pointer; cursor: hand;' onclick="showdetail('{{$c}}')" >
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong id = "p_id{{$c}}">{{$proj->project_id}}</strong></td>
            <td id = "p_name{{$c}}" >{{$proj->project_name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>

<!-- style='cursor: pointer; cursor: hand;'
onclick="window.location='google.com';" -->
@endsection

<script>
    
   function showdetail(id){
    var row = document.getElementById('row'+id);
    var p_id = document.getElementById('p_id'+id);
    var p_name = document.getElementById('p_name'+id);

       if(p_id.innerText != '') console.log(p_id.innerText+" | "+p_name.innerText);
       else console.log(p_name.innerText);
    }
</script>