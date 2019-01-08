<?php

namespace App\Http\Controllers;
use App\Trip;
use App\View;
use App\Tripdetail;
use Illuminate\Http\Request;

class TripdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Tripdetail  $tripdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Tripdetail $tripdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tripdetail  $tripdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Tripdetail $tripdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tripdetail  $tripdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tripdetail $tripdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tripdetail  $tripdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tripdetail $tripdetail)
    {
        //
    }
    public function detail($id)
    {
        $tripdetails = Tripdetail::find($id);
        $data = ['tripdetails' => $tripdetails];

        $views = View::where('tripdetails_id',$id)->get();
        $data2 = ['views'=>$views];

        return view('hotel.view.detail', $data,$data2);
    }
}
