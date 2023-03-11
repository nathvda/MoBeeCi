<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\accessibility;
use App\Models\Alert;
use App\Models\City;
use App\Models\Location;
use App\Models\Rating;
use App\Models\Suggest;
use App\Models\User;
use Database\Factories\AccessibilityFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        City::factory()->create([
            'name' => 'Charleroi'
        ]);

        Location::factory(10)->create([
            'city_id' => 1
        ]);

        Suggest::factory(20)->create();
        Rating::factory(20)->create();
        Alert::factory(20)->create();

        accessibility::factory(10)->create([
            'user_id' => UserFactory::new(),
        ]);
    }
}
