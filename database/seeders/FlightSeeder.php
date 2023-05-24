<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flights = [
            [
                'origin_id' => 1,
                'destination_id' => 2,
                'flight_number' => 'FN1',
                'departure_datetime' => '2023-05-24 08:00:00',
            ],
            [
                'origin_id' => 2,
                'destination_id' => 1,
                'flight_number' => 'FN2',
                'departure_datetime' => '2023-05-25 14:30:00',
            ],
            [
                'origin_id' => 1,
                'destination_id' => 3,
                'flight_number' => 'FL3',
                'departure_datetime' => '2023-05-26 10:45:00',
            ],
        ];

        foreach ($flights as $flight) {
            Flight::create($flight);
        }
    }
}