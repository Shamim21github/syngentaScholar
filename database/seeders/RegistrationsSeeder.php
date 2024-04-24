<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define how many registration records you want to create
        $numberOfRegistrations = 5;

        // Using the factory to create multiple registration records
        Registration::factory()->count($numberOfRegistrations)->create();
    }
}
