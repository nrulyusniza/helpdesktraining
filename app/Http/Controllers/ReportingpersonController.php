<?php

namespace App\Http\Controllers;

use App\Reportingperson;
use Illuminate\Http\Request;

class ReportingpersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportingpersons = Reportingperson::all();
  
        return view('reportingpersons.index', compact('reportingpersons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportingpersons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rptpers_name' => 'required',
        ]);
  
        Reportingperson::create($request->all());
   
        return redirect()->route('reportingpersons.index')
                        ->with('success','New Reporting Person created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reportingperson  $reportingperson
     * @return \Illuminate\Http\Response
     */
    public function show(Reportingperson $reportingperson)
    {
        return view('reportingpersons.show', compact('reportingperson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reportingperson  $reportingperson
     * @return \Illuminate\Http\Response
     */
    public function edit(Reportingperson $reportingperson)
    {
        return view('reportingpersons.edit', compact('reportingperson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reportingperson  $reportingperson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reportingperson $reportingperson)
    {
        $request->validate([
            'rptpers_name' => 'required',
        ]);
  
        $reportingperson->update($request->all());
  
        return redirect()->route('reportingpersons.index')
                        ->with('success','Reporting Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reportingperson  $reportingperson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reportingperson $reportingperson)
    {
        $reportingperson->delete();

       return redirect()->route('reportingpersons.index')
                        ->with('success','Reporting Person deleted successfully');
    }

    public function allreportingperson(Reportingperson $reportingperson)
    {
        $reportingpersons = Reportingperson::all();
  
        return view('reportingpersons.allreportingperson', compact('reportingpersons'));
    }
}
