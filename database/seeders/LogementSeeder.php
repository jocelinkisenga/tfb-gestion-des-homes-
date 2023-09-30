<?php

namespace Database\Seeders;

use App\Models\Logement;
use Illuminate\Database\Seeder;

class LogementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Logement::factory(12)->create();
    }
}
