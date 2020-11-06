@extends('layouts.master')
@section('content')
	<div class="container">
		<h5>Rooms </h5>
		<h5>Building: {{ $room->building }}</h5>
		<h5>Number: {{ $room->number }}</h5>
	</div>
@endsection