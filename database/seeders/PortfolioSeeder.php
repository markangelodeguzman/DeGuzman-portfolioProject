<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Information;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Post;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'name' => 'Clark Thompson',
            'job_title' => 'Freelance Web Designer',
            'description' => 'A brief overview of who I am, my professional background, and my dedication to building user-centered digital experiences.',
            'birth_date' => 'January 01, 1987',
            'address' => 'San Francisco CA 97987 USA',
            'zip_code' => '1000',
            'email' => 'clarkthomp@gmail.com',
            'phone' => '+1-2234-5678-9-0',
            'projects_completed' => 120,
        ]);

        Education::create([
            'duration' => '2014-2015',
            'degree' => 'Master Degree of Design',
            'institution' => 'Cambridge University',
            'description' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
        ]);

        Experience::create([
            'duration' => '2014-2015',
            'title' => 'Art & Creative Director',
            'company' => 'Cambridge University',
            'description' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
        ]);

        Service::create(['title' => 'Web Design', 'icon' => 'flaticon-analysis']);
        Service::create(['title' => 'Photography', 'icon' => 'flaticon-flasks']);
        Service::create(['title' => 'Web Developer', 'icon' => 'flaticon-ideas']);

        Skill::create(['name' => 'Photoshop', 'percentage' => 90]);
        Skill::create(['name' => 'jQuery', 'percentage' => 85]);
        Skill::create(['name' => 'HTML5', 'percentage' => 95]);

        Project::create(['title' => 'Branding & Illustration Design', 'category' => 'Web Design', 'image' => 'assets/images/project-4.jpg']);
        
        Post::create([
            'title' => 'Why Lead Generation is Key for Business Growth',
            'author' => 'Admin',
            'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
            'post_date' => '2019-06-21',
            'image' => 'assets/images/image_1.jpg'
        ]);
    }
}
