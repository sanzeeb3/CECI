@extends('main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
                     <div class="alert alert-success alert-dismissable">Logged in as {{auth()->user()->name}}</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        
        <div class="col-md-7">
            <h3>Monthly Reports</h3>
        </div>

        <div class="col-md-5">
            <h4>Profile Details</h4>
            <table class="table table-striped">
                 <tr><td>1. </td><td>Name</td><td class="name" data-pk="<?php echo auth()->user()->id;?>" data-url="{{url('/edit/name')}}">{{$user->name}}</td><tr>
                <tr><td>2. </td><td>Date of Birth</td><td class="dob" data-pk="<?php echo auth()->user()->id;?>" data-url="{{url('/edit/dob')}}">{{$user->dob}}</td><tr>
                <tr><td>3. </td><td>Contract Start Date</td><td class="contract_start_date" data-pk="<?php echo auth()->user()->id;?>" data-url="{{url('/edit/contract_start_date')}}">{{$user->contract_start_date}}</td><tr>
                <tr><td>4. </td><td>Contract End Date</td><td class="contract_end_date" data-pk="<?php echo auth()->user()->id;?>" data-url="{{url('/edit/contract_end_date')}}">{{$user->contract_end_date}}</td><tr>
                <tr><td>5. </td><td>Partner Organization</td><td class="partner_organization" data-pk="<?php echo auth()->user()->id;?>" data-url="{{url('/edit/partner_organization')}}">{{$user->partner_organization}}</td><tr>
                <tr><td>6. </td><td>Username</td><td class="username" data-pk="<?php echo auth()->user()->id;?>" data-url="{{url('/edit/username')}}">{{$user->username}}</td><tr>
            </table>
        </div>

    </div>
</div>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.fn.editable.defaults.mode = 'inline'; //or popup

$('.name').editable();
$('.dob').editable();
$('.contract_start_date').editable();
$('.contract_end_date').editable(); 
$('.partner_organization').editable(); 
$('.username').editable();  


    

</script>

@endsection
