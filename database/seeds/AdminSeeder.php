<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create
        (
            [
                'name' => 'Admin',
                'admin_ID' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('AdminBoba'),
                'noHp' => '081266668888',
                'role' => 'admin'
            ]
        );
    }
}
