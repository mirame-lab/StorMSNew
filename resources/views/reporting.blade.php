@extends('layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Stock Take</h5>
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

                        <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button"
                                aria-expanded="false" aria-controls="collapseExample{{$count}}">{{$count}}</a>

                        </td>
                        <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button"
                                aria-expanded="false" aria-controls="collapseExample{{$count}}"><i
                                    class="fab fa-angular fa-lg text-danger me-3"></i><strong>{{$materiallist->material_id}}</strong>
                            </a></td>
                        <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button"
                                aria-expanded="false"
                                aria-controls="collapseExample{{$count}}">{{$materiallist->material_name}}</a></td>
                        <td> <a data-bs-toggle="collapse" href="#collapseExample{{$count}}" role="button"
                                aria-expanded="false"
                                aria-controls="collapseExample{{$count}}">{{$materiallist->quantity}}</a></td>
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
@endsection