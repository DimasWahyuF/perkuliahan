<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;
use Illuminate\Support\Str;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("karyawans")->insert([
            "nama_karyawan" => Str::random(10),
            "umur" => "20",
            "created_at" => $timestamp,
            "updated_at" => $timestamp
        ]);
    }
}
