<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Huesped;

class HuespedSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Huesped::Factory(20)->create();
    }
}
