<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\member;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/users.json');
        $users = collect(json_decode($json));

        $users->each(function($user)
        {
            member::create([
                'name' => $user->name,
                'email' => $user->email,
                'age' => $user->age,
                'city' => $user->city ?? 'No City',
                'phone_no' => $user->phone_no,
                'photo' =>$user->photo
            ]);
        });
    }
}
