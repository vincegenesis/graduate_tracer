<?php

use Illuminate\Database\Seeder;

class CsvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Csv::class, 50)->create();
    }
}
