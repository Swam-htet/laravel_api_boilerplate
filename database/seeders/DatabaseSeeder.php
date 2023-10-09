<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Todo::factory()->count(20)->create();


        User::factory()->create([
            "name" => "Swam Htet",
            "email" => "alice@gmail.com",
        ]);

    }
}
