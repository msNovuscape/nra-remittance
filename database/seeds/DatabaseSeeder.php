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
        \App\User::create([
            'name' => 'Admin',
            'email' => 'nraadmin@admin.com',
             'password' => bcrypt('admin123')
        ]);

        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
             'password' => bcrypt('admin123')
        ]);

    }
}
