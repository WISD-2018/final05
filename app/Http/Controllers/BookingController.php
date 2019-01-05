<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;
use App\Room;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
    public function time(Request $request)
    {
        $start = $request['StartTime'];
        $rooms=Room::orderBy('id','ASC')->get();
        $results =Booking::where('StartTime',$request->StartTime)->get();
        return view('hotel.booking.1',[
            'start'=>$start,
            'rooms'=>$rooms,
            'results' => $results,
        ]);
    }
    public function room(Request $request)
    {
        $start = $request['StartTime'];
        $results =Room::where('name',$request->chose)->get();
        return view('hotel.booking.2',[
            'start'=>$start,
            'results' => $results,
        ]);
    }
    public function check(Request $request)
    {
        $start = $request['StartTime'];
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $country = $request['country'];
        $address = $request['address'];
        $results =Room::where('name',$request->chose)->get();
        return view('hotel.booking.3',[
            'start'=>$start,
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'country'=>$country,
            'address'=>$address,
            'results' => $results,
        ]);
    }
    public function final(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('hotel.index');
    }
}
