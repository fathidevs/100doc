<?php

namespace Database\Seeders;

use Illuminate\Http\Request;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DayEightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(Request $req): void
    {
        $now = Carbon::now();

        DB::table('my_users')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'created_at' => $now,
            'updated_at' => $now
            ]);
    }
}
