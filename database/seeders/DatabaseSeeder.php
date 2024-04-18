<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Attending;
use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Like;
use App\Models\SavedEvent;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);
        
        Country::create(['name' => 'United Kingdom']);
        Country::create(['name' => 'Greece']);
        Country::create(['name' => 'Lithuania']);
        City::create(['country_id' => 1, 'name' => 'London']);
        City::create(['country_id' => 1, 'name' => 'Liverpool']);
        City::create(['country_id' => 1, 'name' => 'Leicester']);
        City::create(['country_id' => 2, 'name' => 'Athens']);
        City::create(['country_id' => 2, 'name' => 'Patra']);
        City::create(['country_id' => 2, 'name' => 'Zakynthos']);
        City::create(['country_id' => 3, 'name' => 'Vilnius']);
        City::create(['country_id' => 3, 'name' => 'Kaunas']);
        City::create(['country_id' => 3, 'name' => 'Klaipėda']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'slug' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'slug' => 'livewire']);
    }
}
