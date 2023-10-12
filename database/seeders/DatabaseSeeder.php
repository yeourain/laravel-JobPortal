<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job\Job;
use App\Models\Category\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Job::create([
            'job_title' => 'Product Designer',
            'job_region' => 'Brisbane',
            'company' => 'Adidas',
            'job_type' => 'Full Time',
            'vacancy' => '2',
            'experience' => '2 to 3 year(s)',
            'salary' => '$60k - $100k',
            'gender' => 'Any',
            'application_deadline' => 'April 28, 2024',
            'jobdescription' => 'SomethingSomethingSomething',
            'responsibilities' => 'SomethingSomethingSomething',
            'education_experience' => 'SomethingSomethingSomething',
            'otherbenifits' => 'SomethingSomethingSomething',
            'image' => 'job_logo_1.jpg',
            'category' => 'Programming',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        Job::create([
            'job_title' => 'Front End Developer',
            'job_region' => 'Brisbane',
            'company' => 'Amazon',
            'job_type' => 'Part Time',
            'vacancy' => '2',
            'experience' => '2 to 3 year(s)',
            'salary' => '$50k - $90k',
            'gender' => 'Any',
            'application_deadline' => 'April 18, 2024',
            'jobdescription' => 'SomethingSomethingSomething',
            'responsibilities' => 'SomethingSomethingSomething',
            'education_experience' => 'SomethingSomethingSomething',
            'otherbenifits' => 'SomethingSomethingSomething',
            'image' => 'job_logo_3.jpg',
            'category' => 'Programming',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        Category::create([
            'name' => 'Programming',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        Category::create([
            'name' => 'Design',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
    }
}
