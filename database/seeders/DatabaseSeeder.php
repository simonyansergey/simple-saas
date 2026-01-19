<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Sergey',
            'email' => 'sergey@example.com',
            'password' => Hash::make(102030)
        ]);

        Feature::create([
            'image' => 'https://t3.ftcdn.net/jpg/07/66/16/34/360_F_766163454_FWF3w2m7xvVhd4DRlfT9Pj5mAVZdte4d.jpg',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate sum of 2 numbers',
            'required_credits' => 3,
            'active' => true
        ]);

        Feature::create([
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3DSNaolmffxpppQOKSC9zvj5fBG4XW_aTjQ&s',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate difference of 2 numbers',
            'required_credits' => 3,
            'active' => true
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500
        ]);
    }
}
