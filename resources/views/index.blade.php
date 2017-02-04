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
        <div class="report">
        @foreach($user->reports as $report)
            <h5><b>Report for the month {{$report->month}}</b></h5>
            <table class="table table-striped">
            <tr><td>Mandate duration (dates):</td><td> {{$report->duration}}</td></tr>
            <tr><td>In general, how is your mandate going this month?:</td><td> {{$report->q1}}</td></tr>
            <tr><td>Describe a positive moment or experience from this month relating to your mandate in Nepal.</td><td>{{$report->q2}}</td></tr>
            <tr><td>What challenges are you experiencing in your mandate and how are you working to overcome them?</td><td>{{$report->q3}}</td></tr>
            <tr><td>How much of your work plan have achieved so far? (Rough estimate in percentage)</td><td>{{$report->q4}}</td></tr>
            <tr><td>Number of tools created for Partner Organizations and types of tools created so far in your mandate?</td><td>{{$report->q5}}</td></tr>
            <tr><td>Number of trainings conducted:</td><td> {{$report->q6}}</td></tr>
            <tr><td>Number of women attended the training</td><td>{{$report->q7}}</td></tr>
            <tr><td>Number of men attended the training</td><td>{{$report->q8}}</td></tr>
            </table>
        @endforeach
        </div>
        
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
