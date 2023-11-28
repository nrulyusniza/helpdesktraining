<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Ticketlog;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
  
        return view('tickets.index', compact('tickets'));
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
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    public function allticket(Ticket $ticket)
    {
        // query if ticket type = 1; 1=Ticket
        $tickets = Ticket::where('ticket_type', '1')->get();
  
        return view('tickets.allticket', compact('tickets'));
    }

    public function allconsumable(Ticket $ticket)
    {
        // query if ticket type = 2; 2=Consumable
        $tickets = Ticket::where('ticket_type', '2')->get();
  
        return view('tickets.allconsumable', compact('tickets'));
    }

    public function allconsumableedit(Ticket $ticket)
    {
        // Retrieve the ticket and its associated ticket logs
        $ticket = Ticket::with('ticketLogs')->findOrFail($ticket->id);

        // Pass the ticket data to the view
        return view('tickets.allconsumableedit', compact('ticket'));        
    }

    public function allconsumableupdate(Request $request, Ticket $ticket)
    {
        // $request->validate([
        //     'ticket_no' => 'required',
        // ]);
  
        // $ticket->update($request->all());
  
        // return redirect()->route('tickets.index')
        //                 ->with('success','All consumable updated successfully');

        // Validate the request data
        $ticketLog = new TicketLog();
        $ticketLog->description = $validateData['description'];

        // Save the ticket log
        $ticket->ticketLogs()->save($ticketLog);

        // Redirect back
        return redirect()->route('tickets.allconsumableedit', $ticket->id)
        ->with('success','Ticket Log created successfully');
    }
}
