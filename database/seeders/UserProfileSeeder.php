<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\UserProfile;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::create([
            'usr_id' => 2,
            'given_name' => 'Ali',
            'family_name' => 'Ghorayeb',
            'middle_name' => 'M.',
            'ext_name' => 'Dr.',
        ]);
        UserProfile::create([
            'usr_id' => 3,
            'given_name' => 'Ali',
            'family_name' => 'Saab',
            'middle_name' => 'M.',
            'ext_name' => 'Mr.',
        ]);
        UserProfile::create([
            'usr_id' => 4,
            'given_name' => 'Kamal',
            'family_name' => 'Baydoun',
            'middle_name' => 'M.',
            'ext_name' => 'Dr.',
        ]);
        UserProfile::create([
            'usr_id' => 5,
            'given_name' => 'Ali',
            'family_name' => 'Sweidan',
            'middle_name' => 'M.',
            'ext_name' => 'Mr.',
        ]);
    }
}
