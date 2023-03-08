<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Interaksi;
use Illuminate\Http\Request;
use App\Models\Siaran;

class InteraksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.interaksi.index', [
            'Interaksis' => Interaksi::latest()->with()->paginate(15)
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
     * @param  \App\Models\Interaksi  $interaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Interaksi $interaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interaksi  $interaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Interaksi $interaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interaksi  $interaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interaksi $interaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interaksi  $interaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interaksi $interaksi)
    {
        //
    }
}