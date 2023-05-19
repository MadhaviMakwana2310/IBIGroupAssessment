<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
    \App\Models\Actor::factory(5)->create()->each(function ($actor) {
        $actor->movies()->saveMany(\App\Models\Movie::factory(3)->make());
    });
    }

}
