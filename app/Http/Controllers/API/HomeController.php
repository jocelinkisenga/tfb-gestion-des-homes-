<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Room\RoomResource;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $rooms = Room::useFilters()->dynamicPaginate();

        return RoomResource::collection($rooms);
    }
}
