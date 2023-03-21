<?php

namespace App\Http\Controllers;

use App\Models\Siaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SiaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.siaran.index',[
            'siarans' => Siaran::latest()->get()
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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Siaran::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
