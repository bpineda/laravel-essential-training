<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room as Room;
use App\Client as Client;
use App\Reservation as Reservation;

class ReservationsController extends Controller
{


    function index(Request $request)
    {

        $dateFrom = $request->input("dateFrom");
        $dateTo = $request->input("dateTo");
        
        $client = new Client();
        $room = new Room();

        $data = [];
        $data['dateFrom'] = $dateFrom;
        $data['dateTo'] = $dateTo;
        $data['rooms'] = $room->getAvailableRooms($dateFrom, $dateTo);
        $data['client'] = $client->find(1)->first();
        return view('reservations/index', $data );
    }

    function bookRoom(  $client_id, 
                        $room_id, 
                        $date_in, 
                        $date_out )
    {
        $reservation = new Reservation();
        $reservation->bookRoom(   $client_id, 
                                $room_id, 
                                $date_in, 
                                $date_out );
        return redirect()->route('clients');
    }
}
