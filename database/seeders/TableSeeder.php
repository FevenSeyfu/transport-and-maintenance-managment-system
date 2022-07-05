<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use App\Models\Transport;
use App\Models\Cars;
use App\Models\driver;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transport::create([
            'requested_by' => 'someone',
            'travelers_name'  => 'someone',
            'destination'  => 'somewhere',
            'reason'     => 'for a reson',
            'starting_time'     => '00:00:00',
            'ending_time'      => '12:00:00',
            
        ]);
        Cars::create([
            'model'                 => 'Toyota',
            'license_plate_number'  => 'A1234',
            'service_type'          => 'passenger',
            'passenger_capacity'    => '10',
            'milo_meter'            => '1000',
            'car_status'            => 'available',
            'description'           => 'car',
            
        ]);
        driver::create([
            'first_name' => 'someone',
            'last_name'  => 'someone',
            
        ]);
    }
}
