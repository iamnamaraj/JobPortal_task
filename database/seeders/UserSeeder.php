<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'  =>  'Admin',
                'email' =>  'admin@admin.com',
                'role'  =>  'admin',
                'password'  =>  bcrypt('password')
            ],
            [
                'name'  =>  'Employer ',
                'email' =>  'employer@employer.com',
                'role'  =>  'employer',
                'password'  =>  bcrypt('password')
            ],
            [
                'name'  =>  'User',
                'email' =>  'user@user.com',
                'role'  =>  'user',
                'password'  =>  bcrypt('password')
            ]
        ]);
    }
}
