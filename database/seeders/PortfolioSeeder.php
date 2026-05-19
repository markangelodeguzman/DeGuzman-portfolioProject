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
        // Clear existing data to avoid duplicates if re-running
        Information::truncate();
        Education::truncate();
        Experience::truncate();
        Service::truncate();
        Skill::truncate();
        Project::truncate();
        Post::truncate();

        Information::create([
            'name' => 'Mark Angelo De Guzman',
            'job_title' => 'Freelance Web Designer',
            'description' => 'A brief overview of who I am, my professional background, and my dedication to building user-centered digital experiences.',
            'resume_description' => 'An overview of my background, education, and practical experience in front-end development and UI/UX design.',
            'services_description' => 'I provide end-to-end web design solutions, turning ideas into intuitive, user-friendly digital experiences.',
            'skills_description' => 'My expertise spans core front-end programming languages, including HTML, CSS, and JavaScript, alongside modern design principles.',
            'projects_description' => 'Explore a collection of my web development work, showcasing clean code, functional prototypes, and responsive interfaces.',
            'blog_description' => 'Ideas, updates, and perspectives from our journey in front-end development.',
            'contact_description' => 'Reach out for freelance opportunities, front-end development services, or general inquiries.',
            'hire_me_description' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
            'birth_date' => 'January 01, 1987',
            'address' => 'Zone 1, Magpanambo, Polangui, Albay',
            'zip_code' => '1000',
            'email' => 'markdeguzman@my.cspc.edu.ph',
            'phone' => '09915694643',
            'projects_completed' => 120,
            'hero_image' => 'images/CIMG75-Picsart-AiImageEnhancer.png',
            'about_image' => 'images/75c8b80b4df.png',
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
