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
        <div class="col-md-8">
            <table class="table table-hover">
            	<h3>All Volunteers List:</h3><br>
            	<thead><tr><td>S.N.</td><td>Name</td><td>Partner Organization</td><td>Options</td></tr></thead>
            	<?php $i=1;?>
            	@foreach($users as $user)
            	<tbody>
            		<tr><td>{{$i}}</td><td>{{$user->name}}</td><td>{{$user->partner_organization}}</td>
            			<td>
            				<a href="" class="show" data-id="<?php echo $user->id;?>"><button class="btn btn-default">Show Details</button></a>
            				
            					@if(auth()->user()->is_admin==1)            					
            						<a href="" data-id="<?php echo $user->id;?>"><button class="btn btn-default" disabled>Edit</button></a>
            						<a href="" class="delete" data-id="<?php echo $user->id;?>"><button class="btn btn-default">Delete</button></a>
            						
            					@else           					
            						<a href="" data-id="<?php echo $user->id;?>"><button class="btn btn-default">Edit</button></a>
            						<a href="" class="delete" data-id="<?php echo $user->id;?>"><button class="btn btn-default" disabled>Delete</button></a>            					
            					@endif 

						</td>
					</tr>
				</tbody>
				@endforeach
			</table>
        </div>
    </div>
</div>


<script>

$('.table').DataTable();

</script>
@endsection
