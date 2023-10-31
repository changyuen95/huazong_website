<?php

namespace Database\Seeders\InitSeeders;

use Illuminate\Database\Seeder;
use Database\Seeders\InitSeeders\UserSeeder;
use Database\Seeders\InitSeeders\RoleAndPermissionSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            UserSeeder::class,
            GroupSeeder::class
        ]);
    }
}
