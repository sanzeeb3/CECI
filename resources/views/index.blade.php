@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
                     <div class="alert alert-success alert-dismissable">Logged in as {{$name}}</div>
        </div>
    </div>
</div>
@endsection
