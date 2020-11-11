<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopicalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Topicality::factory(30)->create();
    }
}
