<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alternative;
use App\Models\Module;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Module::factory(10)
            ->has(
                Quiz::factory(3)
                ->has(
                    Question::factory(5)
                    ->has(Alternative::factory(5))
                )
            )
            ->create();
    }
}
