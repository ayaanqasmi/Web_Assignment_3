<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Tutorial;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Event\Code\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Service::factory()->create([
            'summary' => 'Graphic Design',
            'icon' => 'fa-solid fa-pen-nib',
            'description' => 'Creative visions come to life. From eye-catching logos to stunning social media graphics, our expert designers craft designs that captivate and communicate. Whether it\'s for print or digital, let your brand stand out in style.'
        ]);
        
        Service::factory()->create([
            'summary' => 'Web Design',
            'icon' => 'fa-solid fa-code',
            'description' => 'Your digital journey starts here. We build sleek, responsive websites tailored to showcase your brand and drive engagement. Stand out online with custom designs that are as functional as they are beautiful.'
        ]);
        
        Service::factory()->create([
            'summary' => 'Training Courses',
            'icon' => 'fa-solid fa-book-open',
            'description' => 'Learn. Create. Master. Dive into immersive design courses for every skill level. From beginners to advanced learners, our hands-on training equips you with the tools and techniques to bring your ideas to life.'
        ]);
        
        Service::factory()->create([
            'summary' => '1 on 1 Training',
            'icon' => 'fa-solid fa-comments',
            'description' => 'Design your future, one step at a time. Personalized coaching that adapts to your pace and goals. Master design skills with tailored lessons that put you in control of your creative journey.'
        ]);
        
        Service::factory()->create([
            'summary' => 'Online Sessions',
            'icon' => 'fa-solid fa-video',
            'description' => 'Learn anywhere, anytime. Our flexible virtual design courses let you gain new skills on your schedule. Whether you\'re at home or on the go, we\'ll help you achieve your creative goals.'
        ]);
        
        Service::factory()->create([
            'summary' => 'Enjoy a Coffee!',
            'icon' => 'fa-solid fa-mug-saucer',
            'description' => 'Brew connections and ideas. Take a moment to unwind with us over a warm cup of coffee. Share your vision, discuss projects, or simply connect in a relaxed and creative atmosphere.'
        ]);
        

        Tutorial::factory()->create([
            'title' => 'Layout Design:',
            'url' => 'https://www.youtube.com/embed/yUvGHNzqG7M',
        ]);
        
        Tutorial::factory()->create([
            'title' => 'The Importance of Colors:',
            'url' => 'https://www.youtube.com/embed/GyVMoejbGFg',
        ]);
        
        Tutorial::factory()->create([
            'title' => 'Creating Effective Graphics:',
            'url' => 'https://www.youtube.com/embed/ZwOE-7K9Xq8',
        ]);
        
        Tutorial::factory()->create([
            'title' => 'Professional Graphics Software:',
            'url' => 'https://www.youtube.com/embed/C8bq90idey0',
        ]);
        
        Tutorial::factory()->create([
            'title' => 'Backing Up Your Files:',
            'url' => 'https://www.youtube.com/embed/JgwWK9VfqHo',
        ]);
        Testimonial::factory()->create([
            'user_id' => 1,
            'name' => 'Ayaan Qasmi',
            'url' => "https://media.licdn.com/dms/image/v2/D4D03AQHn8hcaLW8NuA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1718507342582?e=1738800000&v=beta&t=V1DApxUR7LsU9-i_M1WXc7VO409KR0SsPleIWx3N9mQ",
            'description' => 'This is a testimonial from John Doe.',
        ]);

        Testimonial::factory()->create([
            'user_id' => 2,
            'name' => 'Ahmad Shehroz',
            'url' => 'https://media.licdn.com/dms/image/v2/D4E03AQFdbG5nslDIzA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1729110695183?e=1738800000&v=beta&t=mCMZrLRGhnym209YobwJM-_049PXxJUVRs3MFgpaHBE',
            'description' => 'This is a testimonial from Jane Smith.',
        ]);

        Testimonial::factory()->create([
            'user_id' => 3,
            'name' => 'Yousuf Rehan',
            'url' => 'https://media.licdn.com/dms/image/v2/D4E03AQFdbG5nslDIzA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1729110695183?e=1738800000&v=beta&t=mCMZrLRGhnym209YobwJM-_049PXxJUVRs3MFgpaHBE',
            'description' => 'This is a testimonial from Alice Johnson.',
        ]);

        Testimonial::factory()->create([
            'user_id' => 4,
            'name' => 'Bob Williams',
            'url' => 'https://media.licdn.com/dms/image/v2/D4E03AQFdbG5nslDIzA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1729110695183?e=1738800000&v=beta&t=mCMZrLRGhnym209YobwJM-_049PXxJUVRs3MFgpaHBE',
            'description' => 'This is a testimonial from Bob Williams.',
        ]);
    }
}

   
