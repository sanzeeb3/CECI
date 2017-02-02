@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                     <div class="alert alert-success alert-dismissable">Logged in as: {{ $user }}</div>
        </div>
    </div>
</div>
@endsection
