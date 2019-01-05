<?php

namespace App\Http\Controllers;
use App\Room;
use App\Trip;
use App\Map;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotel.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function rooms()
    {
        $rooms=Room::orderBy('id','ASC')->get();
        $data=['rooms'=>$rooms];
        return view('hotel.rooms',$data);
    }
    public function about()
    {
        return view('hotel.about');
    }
    public function trip()
    {
        $trips=Trip::orderBy('id','ASC')->get();
        $data=['trips'=>$trips];
        $maps=Map::orderBy('id','ASC')->get();
        $data2=['maps'=>$maps];
        return view('hotel.trip',$data,$data2);
    }
    public function booking()
    {
        return view('hotel.booking');
    }
    public function review()
    {
        return view('hotel.review');
    }
}
