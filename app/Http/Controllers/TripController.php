<?php

namespace App\Http\Controllers;

use App\Trip;
use App\Tripdetail;
use Illuminate\Http\Request;

class TripController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }


    public function onedaytrip()
    {
        return view('hotel.trip.onedaytrip');
    }

    public function onedayplanA()
    {
        return view('hotel.trip.onedayplanA');
    }

    public function onedayplanB()
    {
        return view('hotel.trip.onedayplanB');
    }

    public function onedayplanC()
    {
        return view('hotel.trip.onedayplanC');
    }

    public function twodaytrip()
    {
        return view('hotel.trip.twodaytrip');
    }

    public function twodayplanA()
    {
        return view('hotel.trip.twodayplanA');
    }

    public function twodayplanB()
    {
        return view('hotel.trip.twodayplanB');
    }

    public function twodayplanC()
    {
        return view('hotel.trip.twodayplanC');
    }

    public function threedaytrip()
    {
        return view('hotel.trip.threedaytrip');
    }

    public function threedayplanA()
    {
        return view('hotel.trip.threedayplanA');
    }

    public function threedayplanB()
    {
        return view('hotel.trip.threedayplanB');
    }

    public function threedayplanC()
    {
        return view('hotel.trip.threedayplanC');
    }
    public function detail($id)
    {
        $trips = Trip::find($id);
        $data = ['trips' => $trips];

        $tripdetails = Tripdetail::where('trips_id',$id)->get();
        $data2 = ['tripdetails' => $tripdetails];

        return view('hotel.trip.detail', $data,$data2);
    }
}

