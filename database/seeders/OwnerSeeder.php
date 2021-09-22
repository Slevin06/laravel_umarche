<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test',
                'email' => 'test@test.co.jp',
                'password' => Hash::make('password123'),
                'created_at' => '2021/09/18 11:11:11'
            ],
            [
                'name' => 'test',
                'email' => 'test2@test.co.jp',
                'password' => Hash::make('password123'),
                'created_at' => '2021/09/18 11:11:11'
            ],
            [
                'name' => 'test',
                'email' => 'test3@test.co.jp',
                'password' => Hash::make('password123'),
                'created_at' => '2021/09/18 11:11:11'
            ]
        ]);
    }
}
