<?php

namespace App\Http\Controllers\Home;

use App\Models\RequestLagu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestLaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.request-lagu.index',[
            'lagus' => RequestLagu::latest()->get()
        ]);
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
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function show(RequestLagu $requestLagu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestLagu $requestLagu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestLagu $requestLagu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestLagu $requestLagu)
    {
        //
    }
}
