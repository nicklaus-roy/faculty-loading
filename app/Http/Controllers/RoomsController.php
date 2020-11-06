<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
	public function index()
	{
		// get all of the rooms
		$rooms = Room::get();
		return view('rooms.index', compact('rooms'));
	}

	public function show(Room $room)
	{
		return view('rooms.show', compact('room'));
	}

	public function create()
	{
		$buildings = ['Main', 'Nursing', 'Science'];
		return view('rooms.create', compact('buildings'));
	}

	public function store()
	{
		
		$room->save();$room = new Room;
		$room->building = request()->building;
		$room->number = request()->number;

		return redirect('/rooms');
	}

	public function edit(Room $room)
	{
		$buildings = ['Main', 'Nursing', 'Science'];
		return view('rooms.edit', compact('room', 'buildings'));
	}

	public function update(Room $room)
	{
		$room->update([
			'building' => request()->building,
			'number' => request()->number
		]);

		return redirect('/rooms');
	}

	public function delete(Room $room)
	{
		$room->delete();
		return redirect('/rooms');
	}
}
