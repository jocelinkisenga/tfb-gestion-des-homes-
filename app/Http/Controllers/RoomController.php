<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Resources\RoomResource;

class RoomController extends Controller
{
    public object $room;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RoomResource::collection(Room::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        Room::create(
            [
                "code" => $request->code,
                "places" => $request->places,
                "status" => $request->status,
                "description" => $request->description
            ]
        );
        return response()->json([
            'message' => 'room created successfully'
            ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show( int $id)
    {

        return new RoomResource($this->room = Room::findOrFail($id));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {

        return response()->json([
            'message' => 'room updated successfully'
            ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
