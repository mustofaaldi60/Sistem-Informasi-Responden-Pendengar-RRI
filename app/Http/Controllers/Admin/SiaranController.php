<?php

namespace App\Http\Controllers\Admin;

use App\Models\Siaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siaran.index', [
            'siarans' => Siaran::latest()->paginate(15)
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
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function show(Siaran $siaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Siaran $siaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siaran $siaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siaran $siaran)
    {
        //
    }
}
