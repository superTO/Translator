<?php

use Illuminate\Database\Seeder;

class UsersTableSeederAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'account' => 'admin',
            'password' => bcrypt('adminPassword'),
            'name' => 'adminName',
            'role' => 0,
            'phone_number' => '0900112233',
            'email' => 'asdasd@afwa',
            'ssn' => 'A1544465468',
        ]);
    }
}
