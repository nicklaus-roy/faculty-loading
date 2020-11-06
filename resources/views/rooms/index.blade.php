@extends('layouts.master')
@section('content')
	<div class="container">
		<h5>Rooms</h5>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Building</th>
					<th>Room Number</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($rooms as $room)
					<tr>
						<td>{{ $room->id }}</td>
						<td>{{ $room->building }}</td>
						<td>{{ $room->number }}</td>
						<td>
							<a href="/rooms/{{ $room->id }}">Show</a>
							|
							<a href="/rooms/{{ $room->id }}/edit">Edit</a>
							<a href="/rooms/{{ $room->id }}/delete">Delete</a>
<!-- 							<form method='POST' action='/rooms/{{ $room->id }}'>
								@method('DELETE')
								@csrf
								<button type="submit">Delete</button>
							</form>
 -->						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection