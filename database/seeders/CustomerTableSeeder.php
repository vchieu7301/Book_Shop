<?php

namespace Database\Seeders;

use App\Models\customers;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        customers::factory()->count(20)->create();
    }
}
