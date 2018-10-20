<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
    	//factory(App\User::class, 100)->create(); // create 100 users
        $this->call("BirthdaysTableSeeder");
    }
}
