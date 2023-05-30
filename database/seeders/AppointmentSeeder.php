<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        // DB::table('appointments')->insert([
        //     [
        //         'client_name' => 'John Doe',
        //         'phone_number' => '1234567890',
        //         'date' => '2023-05-15',
        //         'time' => '09:00:00',
        //         'purpose' => 'General check-up',
        //     ],
        //     [
        //         'client_name' => 'Jane Smith',
        //         'phone_number' => '0987654321',
        //         'date' => '2023-05-16',
        //         'time' => '14:30:00',
        //         'purpose' => 'Dental cleaning',
        //     ],
        //     [
        //         'client_name' => 'Bob Johnson',
        //         'phone_number' => '5555555555',
        //         'date' => '2023-05-17',
        //         'time' => '11:00:00',
        //         'purpose' => 'Eye exam',
        //     ],
        // ]);
    }
}
