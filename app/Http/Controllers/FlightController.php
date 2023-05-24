<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return response()->json(['data' => $flights]);
    }

    public function store(Request $request)
    {
        // Handle flight creation
        $flight = Flight::create($request->all());

        return response()->json(['message' => 'Flight created successfully', 'data' => $flight]);
    }

    public function show(Flight $flight)
    {
        return response()->json(['data' => $flight]);
    }

    public function update(Request $request, Flight $flight)
    {
        // Handle flight update
        return response()->json(['message' => 'Flight updated successfully']);
    }

    public function destroy(Flight $flight)
    {
        // Handle flight deletion
        return response()->json(['message' => 'Flight deleted successfully']);
    }

    public function passengers(Flight $flight)
    {
        $passengers = $flight->tickets()->with('passenger')->get();
        return response()->json(['data' => $passengers]);
    }

    /**
     * Update the ticket prices for a flight.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function updateTicketPrices(Flight $flight)
    {
        $flight->updateTicketPrices();

        return response()->json(['message' => 'Ticket prices updated successfully.']);
    }

    /**
     * List the passengers for a flight.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function listPassengers(Flight $flight)
    {
        $passengers = $flight->passengers()->get();

        return response()->json($passengers);
    }
}
