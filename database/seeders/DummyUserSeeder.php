<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Hendro Public',
                'email'=>'HendroPublic@gmail.com',
                'role'=>'public',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Ahmad Admin',
                'email'=>'AhmadAdmin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('78910')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
