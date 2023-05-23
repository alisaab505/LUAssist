<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(UserProfileSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(StudentClassSeeder::class);
        $this->call(QuestionnaireSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(QuizEventSeeder::class);
    }
}
