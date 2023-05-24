<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function update(Request $request, Flight $flight)
    {
        // Handle ticket price update
        return response()->json(['message' => 'Ticket prices updated successfully']);
    }

    public function store(Request $request)
    {
        // Handle ticket purchase
        $ticket = Ticket::create($request->all());
        return response()->json(['message' => 'Tickets purchased successfully', 'data' => $ticket]);
    }

    public function getTicketsByCpf($cpf)
    {
        $tickets = Ticket::where('passenger_cpf', $cpf)->get();

        return response()->json($tickets);
    }
}
