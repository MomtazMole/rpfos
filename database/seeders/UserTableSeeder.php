<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Admin::create([
            'name'=>'Mole',
            'role'=>'Admin',
            'phone'=>'0191733017',
            'email'=>'momtazmole112@gmail.com',
            'password'=>bcrypt('1234567'),
            'photo'=>'Admin_Photo.jpg',
        ]);
    }
}
