@extends('layout')

@section('content')

<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    @if(Auth::User()->role == "Contractor")
    @include('userdashboards.contractor')
    @elseif(Auth::User()->role == "Storekeeper")
    @include('userdashboards.storekeeper')
    @endif
  </div>
</div>

@endsection