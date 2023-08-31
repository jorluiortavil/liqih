<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //
       $datos=[
        'name' => 'informatica',
        'email' => 'i@i.com',
        'email_verified_at' => now(),
        'password' =>  '12345678', // password
        'remember_token' => Str::random(10),
    ];
    $user = new User($datos);
    $user->assignRole('informatica');
    $user->saveOrFail();

    $datos=[
        'name' => 'suministros',
        'email' => 's@s.com',
        'email_verified_at' => now(),
        'password' =>  '12345678', // password
        'remember_token' => Str::random(10),
    ];
    $user = new User($datos);

    $user->assignRole('suministros');
    $user->saveOrFail();
    $datos=[
        'name' => 'farmacia',
        'email' => 'f@f.com',
        'email_verified_at' => now(),
        'password' =>  '12345678', // password
        'remember_token' => Str::random(10),
    ];
    $user = new User($datos);
    $user->assignRole('farmacia');
    $user->saveOrFail();
    }
}
