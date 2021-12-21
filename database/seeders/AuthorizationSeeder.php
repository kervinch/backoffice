<?php

namespace Database\Seeders;

use App\Models\Authorization;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authorization::truncate();
        $now = Carbon::now();

        $authorization_data = array(
            array('id' => 1,'user_id' => 1 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 2,'user_id' => 2 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 3,'user_id' => 3 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 4,'user_id' => 4 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 5,'user_id' => 5 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 6,'user_id' => 6 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 7,'user_id' => 7 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 8,'user_id' => 8 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
            array('id' => 9,'user_id' => 9 ,'organization_id' => 1,'created_at' => $now, 'updated_at' => $now),
        );

        DB::table('authorizations')->insert($authorization_data);
    }
}
