<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Organization::create([
            'name'=>'APEK TECH INC',
            'authorized_email'=>'eabimon@gmail.com',
            'address'=>'eabimon@gmail.com',
            'status'=>'approved',
        ]);
        User::create([
            'name' => 'Edimon Ombati',
            'email' => 'eabimon@gmail.com',
            'phone' => '+254701583807',
            'password' => Hash::make('qazaqaza'),
            'role' => 'Super-Admin',
            'organization_id' => 1,
        ]);

    }
}
