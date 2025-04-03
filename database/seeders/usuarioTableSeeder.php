<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Database\Factories\UserFactory;
use Illuminate\Support\Str;

class usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Italo Donoso Barraza',
            'email'=>'italo.donoso@ucn.cl',
            'password'=> bcrypt('Turjoy91'),
            'email_verified_at' => Carbon::now(),
            'userType' => 2,
        ]);

        User::create([
            'name'=>'Jhon Vallecilla Rosas',
            'email'=>'jhon.vallecilla@ucn.cl',
            'password'=> bcrypt('Jhon1234'),
            'email_verified_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'userType' => 0,
        ]);

        UserFactory ::new()->count(10)->create([
            'email_verified_at' => Carbon::now(),
            'userType' => 0,
        ]);
    }
}
