<?php

namespace Database\Seeders;

use App\Models\Rservation;
use Illuminate\Database\Seeder;

class RservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Rservation::factory(10)->create();
    }
}
