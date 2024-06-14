<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 6; $i++) {
            Contact::create([
                'user_id' => \App\Models\User::all()->random(1)->first()->id,
                'name' => fake()->name,
                'email' => fake()->unique()->safeEmail,
                'phone' => fake()->phoneNumber,
                'city' => fake()->city,
            ]);
        }
    }
}
