<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $users = factory(Users::class)->times(50)->create();
        $user = User::find(1);
        $user->name = 'chenmingwei';
        $user->email = 'chen_mingwei@126.com';
        $user->is_admin = true;
        $user->save();
    }
}
