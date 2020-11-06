@extends('layouts.master')
@section('content')
	<div class="container">
		<h5>Create Room Form</h5>
		<form method="POST" action="/rooms">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Building</label>
			<select class="custom-select" name='building'>
				@foreach($buildings as $building)
					<option value="{{ $building }}">{{ $building }}</option>
				@endforeach
			</select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Room Number</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" name="number">
		  </div>	


		  <button type="submit" class="btn btn-primary">Submit</button>
 		</form>
	</div>
@endsection