<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("gajis")->insert([
            "jumlah_gaji" => 90000,
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}
