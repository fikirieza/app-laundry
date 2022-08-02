<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'email' => 'adminrieza@laundryyuk.com',
            'password' => Hash::make('admin123'),
            'name' => 'Admin Rieza',
            'role' => 1
        ]);
        $user->save();
    }
}
