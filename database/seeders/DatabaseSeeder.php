<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job\Job;

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
            'job_type' => 'full time',
            'vacancy' => '2',
            'experience' => '2 to 3 year(s)',
            'salary' => '$60k - $100k',
            'gender' => 'Any',
            'application_deadline' => 'April 28, 2019',
            'jobdescription' => 'SomethingSomethingSomething',
            'responsibilities' => 'SomethingSomethingSomething',
            'education_experience' => 'SomethingSomethingSomething',
            'otherbenifits' => 'SomethingSomethingSomething',
            'image' => 'job_logo_1.jpg'
        ]);
    }
}
