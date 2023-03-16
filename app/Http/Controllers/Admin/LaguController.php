<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lagu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lagu.index',[
            'lagus' => Lagu::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lagu.create');
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
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function show(Lagu $lagu)
    {
        return view('admin.lagu.show',[
            'lagu' => Lagu::find($lagu)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function edit(Lagu $lagu)
    {
        return view('admin.lagu.edit',[
            'lagus' => $lagu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lagu $lagu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lagu $lagu)
    {
        Lagu::destroy($lagu->id);

        return redirect('/lagu')->with('success','Deleted Successfully!');
    }
}
