<?php

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
        DB::table('users')->insert([

            [
                'id' => '1',
                'name' => 'Super Admin',
                'email' => 'admin@everest.org',
                'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
                'user_type' => 'superadmin',
                'remember_token' => \Illuminate\Support\Facades\Hash::make('admin@admin.com')
            ]
            ]);
    }
}
