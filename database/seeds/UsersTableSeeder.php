<?php

use App\User;
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
        // factory(User::class , 20)->create();
        $user = new User();
        $user->name = 'Super Man';
        $user->email = 'admin@gmail.com';
        $user->password = 'adminadmin';
        $user->role_id = 1;
        $user->save();

    }
}
