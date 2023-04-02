<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ClassModel;
use App\Models\Comment;
use App\Models\Enrollment;
use App\Models\Semester;
use App\Models\Statement;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Database\Factories\ClassModelFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Student::factory(20)->create();
        Subject::factory(10)->create();
        ClassModel::factory(10)->create();
        Semester::factory(5)->create();
        Enrollment::factory(50)->create();
        Statement::factory(100)->create();
        Comment::factory(200)->create();
    }
}
