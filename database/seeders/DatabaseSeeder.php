<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job\Job;
use App\Models\Category\Category;
use \App\Models\User;
use App\Models\Admin\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Admin::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => 'password',
        // ]);

        User::create([
            'name' => 'TAEHYUN LEE',
            'email' => 'leeth322@icloud.com',
            'password' => 'hyunL6902',
            'image' => 'user.png',
            'cv' => 'a1-<s5167765>.pdf',
            'job_title' => 'Front End',
            'bio' => 'Griffith Uni',
        ]);

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

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
