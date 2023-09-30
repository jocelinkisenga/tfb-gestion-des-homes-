<?php

namespace Database\Seeders;

use App\Models\EtudiantUnilu;
use Illuminate\Database\Seeder;

class EtudiantUniluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        EtudiantUnilu::factory(500)->create();
    }
}
