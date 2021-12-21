<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::truncate();
        $now = Carbon::now();

        $person_data = array(
            array('id' => 1,'organization_id' => '9' ,'phone' => '44324661','email' => 'eren@aot.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 2,'organization_id' => '1' ,'phone' => '11121211','email' => 'gopher@golang.org','avatar' => 'avatar/t6TJX3PjDb1BYwl2FAXLTZbxyymWvxmdIwtjatTb.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 3,'organization_id' => '3' ,'phone' => '32323232','email' => 'baron@lol.com','avatar' => 'avatar/vLoISZw8UR9JmddTXsIkRbrjPuFl5HGfgCFziZDe.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 4,'organization_id' => '3' ,'phone' => '66564644','email' => 'jhin@riot.com','avatar' => 'avatar/kMbOjzHkFsbYXz8VLQ9YM4MQj3CLvP4xmcCTrB3s.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 5,'organization_id' => '9' ,'phone' => '443332232','email' => 'mikasa@aot.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 6,'organization_id' => '9' ,'phone' => '9898989','email' => 'armin@aot.com','avatar' => 'avatar/t6TJX3PjDb1BYwl2FAXLTZbxyymWvxmdIwtjatTb.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 7,'organization_id' => '9' ,'phone' => '8889897','email' => 'levi@aot.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 8,'organization_id' => '9' ,'phone' => '3323222','email' => 'reiner@aot.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 9,'organization_id' => '9' ,'phone' => '11112121','email' => 'berthold@aot.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 10,'organization_id' => '5' ,'phone' => '33333333','email' => 'hello@world.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 11,'organization_id' => '5' ,'phone' => '44324661','email' => 'code@programming.com','avatar' => 'avatar/mmhoPcRYkkL9eopjrE5eYMlIOuuO1EJf8mba9VrZ.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 12,'organization_id' => '3' ,'phone' => '44324661','email' => 'naruto@anime.com','avatar' => 'avatar/kMbOjzHkFsbYXz8VLQ9YM4MQj3CLvP4xmcCTrB3s.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
        );

        DB::table('people')->insert($person_data);
    }
}
