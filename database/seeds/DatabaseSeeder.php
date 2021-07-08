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
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'nraadmin@gmail.com',
             'password' => bcrypt('admin123')
        ]);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
             'password' => bcrypt('admin123')
        ]);

    }
}
