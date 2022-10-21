<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin=User::create([
            'first_name' => 'Admin',
            'last_name' => 'web',
            'email' => 'admin@web.com',
            'password' => bcrypt('123')
        ]);

        $admin ->assignRole ('Admin');

        $admin=User::create([
            'first_name' => 'User',
            'last_name' => 'web',
            'email' => 'user@web.com',
            'password' => bcrypt('321')
        ]);

        $admin ->assignRole ('User');
    }
}
