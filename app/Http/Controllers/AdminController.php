<?php

namespace App\Http\Controllers;
use App\Booking;
use App\Tripdetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::orderBy('id','ASC')->get();
        $data=['bookings'=>$bookings];
        return view('admin.index',$data);
    }

    public function index2()
    {
        $tripdetails=Tripdetail::orderBy('id','ASC')->get();
        $data2=['tripdetails'=>$tripdetails];
        return view('admin.tripdetail.index',$data2);
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
        Booking::create($request->all());
        return redirect()->route('admin.booking.index');
    }

    public function store2(Request $request)
    {
        Tripdetail::create($request->all());
        return redirect()->route('admin.tripdetail.index');
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
        $bookings=Booking::find($id);
        $data = ['bookings' => $bookings];
        return view('admin.edit', $data);
    }

    public function edit2($id)
    {
        $tripdetails=Tripdetail::find($id);
        $data2 = ['tripdetails' => $tripdetails];
        return view('admin.tripdetail.edit', $data2);
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

        $bookings=Booking::find($id);
        $bookings->update($request->all());
        return redirect()->route('admin.booking.index');
    }

    public function update2(Request $request, $id)
    {
        $tripdetails=Tripdetail::find($id);
        $tripdetails->update($request->all());
        return redirect()->route('admin.tripdetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect()->route('admin.booking.index');
    }

    public function destroy2($id)
    {
        Tripdetail::destroy($id);
        return redirect()->route('admin.tripdetail.index');
    }

    public function home()
    {
        return view('admin.home');
    }
}
