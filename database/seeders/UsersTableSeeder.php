<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->nama_lengkap = "Sonata Bagus";
        $user->email = "bagoesgazette@gmail.com";
        $user->username = "bagoesgazette";
        $user->password = bcrypt('123456');
        $user->role = "admin"; 
        $user->save();
    }
}
