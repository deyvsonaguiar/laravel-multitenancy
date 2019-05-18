<?php

use App\Models\Company;
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
        \Tenant::setTenant(Company::find(1));
        factory(\App\User::class, 1)
            ->create([
                'email' => 'user@user.com',
            ]);
        \Tenant::setTenant(Company::find(2));
        factory(\App\User::class, 1)
            ->create([
                'email' => 'admin@admin.com',
            ]);
    }
}
