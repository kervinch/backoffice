<?php

namespace Database\Seeders;

use App\Models\Authorization;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $now = Carbon::now();

        $user_data = array(
            array('id' => 1,'name' => 'Kervin' ,'email' => 'kervinch@outlook.com', 'email_verified_at' => null, 'password' => Hash::make('password'), 'remember_token' => null, 'created_at' => $now, 'updated_at' => $now),
            array('id' => 2,'name' => 'Alpha' ,'email' => 'alpha@backoffice.com', 'email_verified_at' => null, 'password' => Hash::make('password'), 'remember_token' => null, 'created_at' => $now, 'updated_at' => $now),
            array('id' => 3,'name' => 'Beta' ,'email' => 'beta@backoffice.com', 'email_verified_at' => null, 'password' => Hash::make('password'), 'remember_token' => null, 'created_at' => $now, 'updated_at' => $now),
            array('id' => 4,'name' => 'Gamma' ,'email' => 'gamma@backoffice.com', 'email_verified_at' => null, 'password' => Hash::make('password'), 'remember_token' => null, 'created_at' => $now, 'updated_at' => $now),
            array('id' => 5,'name' => 'Charlie' ,'email' => 'charlie@backoffice.com', 'email_verified_at' => null, 'password' => Hash::make('password'), 'remember_token' => null, 'created_at' => $now, 'updated_at' => $now),
        );

        DB::table('users')->insert($user_data);
    }
}
