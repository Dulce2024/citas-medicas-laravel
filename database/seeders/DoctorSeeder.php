<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        Doctor::create([
            'name' => 'Dra. María López',
            'specialty' => 'Cardiología',
            'email' => 'maria.lopez@example.com',
            'phone' => '555-0192',
        ]);

        Doctor::create([
            'name' => 'Dr. Carlos Gómez',
            'specialty' => 'Pediatría',
            'email' => 'carlos.gomez@example.com',
            'phone' => '555-0143',
        ]);
    }
}