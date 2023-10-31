<?php

namespace Database\Seeders\FakeSeeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FakeSeeders\EventSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->call([
            EventSeeder::class,
        ]);
    }
}
