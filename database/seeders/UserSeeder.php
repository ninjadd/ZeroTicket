<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Daniel T. Dickson';
        $user->email = 'ninjadd@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('6891ninja');
        $user->remember_token = Str::random(10);
        $user->save();

        User::factory()->count(100)->create();
    }
}
