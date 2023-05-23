<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([[
            'subject_id' => 1,
            'subject_code' => 'I3302',
            'subject_desc' => 'Web Development'
        ]]);
        DB::table('subjects')->insert([[
            'subject_id' => 2,
            'subject_code' => 'I3301',
            'subject_desc' => 'Software Engineer'
        ]]);
    }
}
