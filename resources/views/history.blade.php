@extends('layout')

@section('content')

              <!-- Contextual Classes -->
              <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">{{$description}}</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Remark</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                @foreach($history as $history)
                    <tr class="{{$history['vartype']}}">
                        <td>{{$history['date']}}</td>
                        <td>{{$history['remark']}}</td>
                        <td><small class=
                            @if($history['vartype'] == 'table-success') "text-success fw-semibold"
                            @elseif($history['vartype'] == 'table-danger') "text-danger fw-semibold"
                            @endif
                        
                        > @if($history['vartype'] == 'table-success') +
                          @elseif($history['vartype'] == 'table-danger') -
                          @endif {{$history['qty']}}</small></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> <!--/ Contextual Classes -->
@endsection