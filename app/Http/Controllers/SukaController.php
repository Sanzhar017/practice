<?php

namespace App\Http\Controllers;

use App\Models\Suka;
use Illuminate\Http\Request;

class ukaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suki = Suka::get();

        return view('s.index', ['suki'=>$suki]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suki = Suka::get();

        return view('s.create', ['suki'=>$suki]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->validate([
          'name'=>'required'
       ]);

       Suka::create($data);

       return redirect()->route('suka.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suka  $suka
     * @return \Illuminate\Http\Response
     */
    public function show(Suka $suka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suka  $suka
     * @return \Illuminate\Http\Response
     */
    public function edit(Suka $suka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suka  $suka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suka $suka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suka  $suka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suka $suka)
    {
        //
    }
}
