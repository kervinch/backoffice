<?php

namespace Database\Seeders;

use App\Models\Organization;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::truncate();
        $now = Carbon::now();

        $organization_data = array(
            array('id' => 1,'name' => 'Golang' ,'phone' => '12345678','email' => 'admin@golang.org','website' => 'https://www.golang.org', 'logo' => 'logo/lXLPoMUn1qIqpuOnkLduaiEcO8VRtY1qkNkA7jvx.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 2,'name' => 'Java' ,'phone' => '23123131','email' => 'admin@java.com','website' => 'https://www.java.com', 'logo' => 'logo/5HMYlQgSIcorKj9dbSd9ap10prkLdJT7bZB832A2.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 3,'name' => 'Kotlin' ,'phone' => '6023801275','email' => 'admin@kotlinlang.org','website' => 'https://www.kotlinlang.org', 'logo' => 'logo/NPiCgi90xTEFjQxJBefLkIsLodqYiqG26daVoaeE.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 4,'name' => 'Swift' ,'phone' => '43424242','email' => 'admin@swift.org','website' => 'https://www.swift.org', 'logo' => 'logo/qRLvJnp3jUwcaudop3RCPAo1POYxlHp9sVyOV4hL.jpg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 5,'name' => 'Ruby' ,'phone' => '5555353','email' => 'admin@ruby.com','website' => 'https://www.ruby.com', 'logo' => 'logo/ChxqSAIeUWx6ppFa4qps7aUXHsv14RRPhIoSNUv0.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 6,'name' => 'Python' ,'phone' => '76755455','email' => 'admin@python.org','website' => 'https://www.python.org', 'logo' => 'logo/nSwYm1Mik9HWTND6g7Nv5Ry6PH5Gn22MVGf8QZTo.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 7,'name' => 'PHP' ,'phone' => '7778787','email' => 'admin@php.net','website' => 'https://www.php.net', 'logo' => 'logo/8Vma8JyIVizeuXOXOmdmvwoNwOKwppZSVUCzK3IZ.svg','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 8,'name' => 'C++' ,'phone' => '33222221','email' => 'admin@cpp.com','website' => 'https://www.cpp.com', 'logo' => 'logo/OnY540FIRu1cbKDJMHeSgslDIN7DGlcuBQwAyt6h.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
            array('id' => 9,'name' => 'JavaScript' ,'phone' => '9999898','email' => 'admin@javascript.com','website' => 'https://www.javascript.com', 'logo' => 'logo/LwfY6Rqdvbqwq2lYtj7eybd5mgt8O1PQDB9OGMLL.png','created_at' => $now, 'updated_at' => $now,'created_by' => 'seed', 'updated_by' => 'seed'),
        );

        DB::table('organizations')->insert($organization_data);
    }
}
