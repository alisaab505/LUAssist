<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Initialize Users
        User::create([//2
            'usr' => 'AliGhorayeb',
            'permissions' => 1,
            'password' => Hash::make("password"),
        ]);
        User::create([//3
            'usr' => 'AliSaab',
            'permissions' => 2,
            'password' => Hash::make("password"),
        ]);
        User::create([//4
            'usr' => 'KamalBaydoun',
            'permissions' => 1,
            'password' => Hash::make("password"),
        ]);
        User::create([//5
            'usr' => 'AliSweidan',
            'permissions' => 2,
            'password' => Hash::make("password"),
        ]);
    }
}
