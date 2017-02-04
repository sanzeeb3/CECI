@extends('main')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-7">

		<h1>Monthly Report:</h1>
		
			<p><b>Purpose:</b> Monthly Written Updates is a Monitoring and Evaluations tool to help CECI Uniterra- Nepal as well as Volunteers track mandate progress and any potential challenges that volunteers may be facing in their mandates. This allows CECI Uniterra, volunteers and partners to assess progress, provide support and address any issues or concerns. This also helps volunteers track their progress for their final end of mandate report.</p><br>

			<p><b>Expectations:</b>Each volunteer with a mandate over one month in length is to provide a Monthly Written Update. Written Updates should only take about half an hour to complete per month and the answers for the questions should be few lines each. Your monthly Written Update is due by the 15th of next month. </p>
			<br><br>


			<form method="POST" action={{url('/postReport)')}} role="form-control">

 				<label for="name" class="col-md-4 control-label">Volunteer Name <b style="color:red">*</b></label>
 					<div class="col-md-6">
        				<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
 					</div>
					<br><br>

 				<label class="col-md-4 control-label">Written Update for Month (e.g. May 2015): <b style="color:red">*</b></label>
 					<div class="col-md-6">
        				<input type="text" class="form-control" name="month" value="{{ old('month') }}" required autofocus>
 					</div>
					<br><br><br>

 				<label class="col-md-4 control-label">Mandate duration (dates): <b style="color:red">*</b> </label>
 					<div class="col-md-6">
        				<input type="date" class="form-control" name="duration" value="{{ old('duaration') }}" required autofocus>
 					</div>
					<br><br><br>

 				<label class="col-md-6 control-label">In general, how is your mandate going this month? </label>
 					<div class="col-md-6">
        				<textarea class="form-control" name="q1" value="{{ old('q1') }}" autofocus></textarea>
 					</div>
					 <br><br><br>
 			
 				<label class="col-md-6 control-label">Describe a positive moment or experience from this month relating to your mandate in Nepal. </label>
 					<div class="col-md-6">
        				<textarea class="form-control" name="q2" value="{{ old('q2') }}"  autofocus></textarea>
 					</div>
 					<br><br><br><br>

 				<label class="col-md-6 control-label">What challenges are you experiencing in your mandate and how are you working to overcome them? </label>
 					<div class="col-md-6">
        				<textarea class="form-control" name="q3" value="{{ old('q3') }}" autofocus></textarea>
 					</div>
 					<br><br><br><br>
 			
 				<label class="col-md-6 control-label">How much of your work plan have achieved so far? (Rough estimate in percentage)</label>
 					<div class="col-md-6">
        				<textarea class="form-control" name="q4" value="{{ old('q4') }}"  autofocus></textarea>
 					</div>
 					<br><br><br><br>
 			
 				<label class="col-md-6 control-label">Number of tools created for Partner Organizations and types of tools created so far in your mandate?</label>
 					<div class="col-md-6">
        				<textarea class="form-control" name="q5" value="{{ old('q5') }}"  autofocus></textarea>
 					</div>
			 		<br><br><br><br>
 			
 				<label class="col-md-6 control-label">Number of trainings conducted:</label>
 					<div class="col-md-6">
        				<input type="text" class="form-control" name="q6" value="{{ old('q6') }}" autofocus>
 					</div>
 					<br><br>

 				<label class="col-md-6 control-label">Number of women attended the training</label>
 					<div class="col-md-6">
        				<input type="text" class="form-control" name="q7" value="{{ old('q7') }}"  autofocus>
 					</div> 
 					<br><br>

 				<label class="col-md-6 control-label">Number of men attended the training</label>
 					<div class="col-md-6">
        				<input type="text" class="form-control" name="q8" value="{{ old('q8') }}" autofocus>
 					</div><br><br><br><Br>

 				<button type="submit" class="btn btn-default">Submit</button>
 			
 			</form><br><br><br><br>

 		</div>
 	</div>
 </div>

@endsection
