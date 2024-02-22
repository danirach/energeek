<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jobs')->insert([
            'name' => "Frontend Engineer",
        ]);
        DB::table('jobs')->insert([
            'name' => "Backend Engineer",
        ]);
    }
}
