<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lagu;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLaguRequest;
use App\Http\Requests\UpdateLaguRequest;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.lagu.index', [
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
    public function store(StoreLaguRequest $request)
    {
        // validasikan semua yg ada di request
        $validate = $this->validate($request, [
            'title' => ['required', 'max:255', 'string'],
            'artis' => ['required', 'max:255', 'string'],
            'genre' => ['required', 'max:255', 'string'],
            'album' => ['required', 'max:255', 'string'],
            'audio' => ['required', 'mimes:mp3,flac,wav,webm']
        ]);

        // cek apakah validasi audionya sama dengan request tipe file audio dari form, kalau sama taro audionya di folder audio
        // kalau gk diisi kosongkan aja
        $request['audio'] == $request->file('audio') ? $validate['audio'] = $request->file('audio')->store('audios') : null;

        Lagu::create($validate);

        return redirect('/lagu')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function show(Lagu $lagu)
    {
        return view('admin.lagu.show', [
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
        return view('admin.lagu.edit', [
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
    public function update(UpdateLaguRequest $request, Lagu $lagu)
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

        if($lagu->audio){
            Storage::delete([$lagu->audio]);
        }

        return redirect('/lagu')->with('success', 'Deleted Successfully!');
    }
}