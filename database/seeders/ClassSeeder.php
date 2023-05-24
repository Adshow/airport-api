<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassFlight;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'flight_id' => 1,
                'class_type' => 'Economy',
                'seat_capacity' => 150,
                'seat_price' => 100.00,
            ],
            [
                'flight_id' => 1,
                'class_type' => 'Business',
                'seat_capacity' => 30,
                'seat_price' => 300.00,
            ],
            [
                'flight_id' => 2,
                'class_type' => 'Economy',
                'seat_capacity' => 200,
                'seat_price' => 90.00,
            ],
        ];

        foreach ($classes as $class) {
            ClassFlight::create($class);
        }
    }
}
