<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\Room\CreateRoomRequest;
use App\Http\Requests\Room\UpdateRoomRequest;
use App\Http\Requests\RoomStoreRequest;
use App\Http\Resources\Room\RoomResource;
use App\Models\Room;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RoomController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum")->only(["store","update","destroy"]);
    }

    public function index(): AnonymousResourceCollection
    {
        $rooms = Room::useFilters()->dynamicPaginate();

        return RoomResource::collection($rooms);
    }

    public function store(Request $request): JsonResponse
    {

        $room = Room::create([
                 'numberRoom' => $request->numberRoom,
                'HomeName' => $request->HomeName,
                'places' => $request->places,
                'status' => true,
                'image_path' => $request->image_path,
                'description' => $request->description,

        ]);

        return $this->responseCreated('Room created successfully', new RoomResource($room));
    }

    public function show(Room $room): JsonResponse
    {
        return $this->responseSuccess("here is the room", new RoomResource($room));
    }

    public function update(UpdateRoomRequest $request, Room $room): JsonResponse
    {
        $room->update($request->validated());

        return $this->responseSuccess('Room updated Successfully', new RoomResource($room));
    }

    public function destroy(Room $room): JsonResponse
    {
        $room->delete();

        return $this->responseDeleted();
    }

}
