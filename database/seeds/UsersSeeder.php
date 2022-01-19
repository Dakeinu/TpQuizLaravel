<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                array(
                    'name' => 'Admin',
                    'email' => 'admin@admin.fr',
                    'password' => 'admin',
                ),
                array(
                    'name' => 'Test',
                    'email' => 'test@google.com',
                    'password' => 'test1234',
                ),
            )
        );
           
    }
}
