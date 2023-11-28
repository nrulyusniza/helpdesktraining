<?php

namespace App\Http\Controllers;

use App\Ticstatus;
use Illuminate\Http\Request;

class TicstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticstatuss = Ticstatus::all();
  
        return view('ticstatuss.index', compact('ticstatuss'));
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
     * @param  \App\Ticstatus  $ticstatus
     * @return \Illuminate\Http\Response
     */
    public function show(Ticstatus $ticstatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticstatus  $ticstatus
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticstatus $ticstatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticstatus  $ticstatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticstatus $ticstatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticstatus  $ticstatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticstatus $ticstatus)
    {
        //
    }

    public function allticstatus(Ticstatus $ticstatus)
    {
        $ticstatuss = Ticstatus::all();
  
        return view('ticstatuss.allticstatus', compact('ticstatuss'));
    }
}
