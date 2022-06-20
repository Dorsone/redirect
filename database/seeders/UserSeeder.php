<?php

namespace Database\Seeders;

use App\Constants\RoleConstants;
use App\Models\User;
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
        User::query()->insert([
            'name' => 'Admin Adminov',
            'role' => RoleConstants::SUPERADMIN,
            'login' => 'admin',
            'phone' => '998900858533',
            'password' => bcrypt('password'),
        ]);
        User::factory(9)->create();
    }
}
