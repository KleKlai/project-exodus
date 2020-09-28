<?php

namespace App\Http\Controllers\Help\Ticket;

use App\Http\Requests\CreateTicketRequest;
use App\Http\Controllers\Controller;
use App\Model\Support\Conversation;
use App\Model\Support\Ticket;
use Illuminate\Http\Request;
use App\User;
use Auth;

class TicketController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:update ticket', ['only' => ['edit', 'update']]);

        $this->middleware('permission:delete ticket', ['only' => ['destroy']]);
    }

    public function index()
    {
        if(Auth::user()->hasAnyRole('Super-admin', 'Admin'))
        {
            $data = Ticket::orderBy('created_at', 'DESC')->get();
        } else {
            $data = Ticket::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get();
        }

        return view('help.ticket.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('help.ticket.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTicketRequest $request)
    {
        $ticket = Ticket::create([
            'user_id'       => Auth::user()->id,
            'status'        => 'Open',
            'email'         => $request->email,
            'subject'       => $request->subject,
            'description'   => $request->description,
            'attachment'    => $request->attachment,
        ]);

        $message = 'Thank you for reaching us.

        We would like to acknowledge receipt of your concern and a reference number has been created a support representative will be reviewing your request and will send you a personal response.';

        Conversation::create([
            'ticket_id' => $ticket->id,
            'user_id'   => 2,
            'message'   => $message,
        ]);

        flash('Great! You ticket has been received.');

        return redirect()->route('ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $conversation = Conversation::where('ticket_id', $ticket->id)->get();

        return view('help.ticket.show', compact(
            [
                'ticket',
                'conversation'
            ]
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        if($ticket->archive){
            flash($ticket->id . ' already in archive and can not be modify.')->warning()->important();
            return redirect()->back();
        }

        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Support\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
