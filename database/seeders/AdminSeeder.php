<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin user
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password' =>bcrypt('adminpassword'),
            'is_admin'=>true,
        ]);
        //User user
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' =>now(),
            'password' => bcrypt('userpassword'),
            'is_admin'=>false,
        ]);
        
    }
}
