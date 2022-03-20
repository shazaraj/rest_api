<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' =>'Shaza Raj',
            'email'=>'shaza@example.com',
            'password'=>bcrypt('password')
        ]);

        $user->createToken('ShazaRaj')->plainTextToken;

        User::factory()->count(5)->create();
    }
}
