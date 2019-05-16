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
        factory(\App\User::class, 1)
            ->create([
                'email' => 'user@user.com',
                'company_id' => 1
            ]);

        factory(\App\User::class, 1)
            ->create([
                'email' => 'admin@admin.com',
                'company_id' => 2
            ]);
    }
}
