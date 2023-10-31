<?php

namespace Database\Seeders\InitSeeders;

use App\Models\Admin;
use App\Library\RoleTag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@huazong.com.my';
        $password = Hash::make('huazong@1234');

        if (app()->isLocal()) {
            $email = 'admin-staging@huazong.com.my';
            $password = Hash::make('1111aaaa');
        }

        $user = Admin::create([
            'name' => 'Admin',
            'email' => $email,
            'password' => $password,
            'group_id' => 1,
        ]);
        $user->assignRole(RoleTag::ADMIN);

        $user = Admin::create([
            'name' => 'Hua Zong Super Admin',
            'email' => 'super-admin@huazong.com.my',
            'password' => Hash::make(app()->isLocal() ? '1111aaaa' : 'admin@1234'),
            'group_id' => 1,
        ]);
        $user->assignRole(RoleTag::SUPER_ADMIN);
    }
}
