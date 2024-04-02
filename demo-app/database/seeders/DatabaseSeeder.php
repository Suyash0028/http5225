<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\Course;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        User::factory()->count(2)->create();
        
        Course::factory()->create([
            'CourseID' => 'Http5225',
            'Name'=> 'PhP',
            'Description'=> 'This is the PHP and laravel course'
        ]);

        Course::factory()->create([
            'CourseID'=>  'Http5222',
            'Name'=> 'Full Stack',
            'Description'=> 'This is the full stack subject'
        ]);
        Course::factory()->create([
            'CourseID'=>  'Http5227',
            'Name'=> 'React',
            'Description'=> 'This is the React course'
        ]);
    }
}
