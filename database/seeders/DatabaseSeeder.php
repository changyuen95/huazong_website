<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            InitSeeders\InitSeeder::class,
        ]);

        if (app()->isLocal() && ($this->command->ask('Do you want to insert dummy data? (y/n)') == 'y')) {
            $this->call([FakeSeeders\FakeSeeder::class]);
        }
    }
}
