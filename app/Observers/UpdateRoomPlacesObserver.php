<?php

namespace App\Observers;

use App\Models\Room;

class UpdateRoomPlacesObserver
{
    public function removeQuantity(int $room_id){
        $room = Room::findOrFail($room_id);
        $room->update([
            "places" => -1
        ]);
    }

    public function addQuantity(int $room_id){

    }
}
