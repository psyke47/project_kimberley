<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{   
    /**
     * Display blog landing page
     */
    public function index()
    {
        $blogPosts = $this->getBlogPosts();
        
        return view('blog', [
            'blogPosts' => $blogPosts,
            'comments' => collect() // Empty comments for landing page
        ]);
    }

    /**
     * Centralized blog posts data structure
     * Now using: Education, Industry, Articles categories
     */
    private function getBlogPosts()
    {
        return [
            // Education Category (Tutorials, Learning Content)
            [
                'title' => 'Bluetooth Speaker Tutorial',
                'excerpt' => 'Build a fully functional Bluetooth speaker with custom 3D printed enclosure using Greycode IoT Dev Board.',
                'image' => '/images/IMG_0132.png',
                'url' => route('blog.bluetooth-speaker'),
                'category' => 'education',
                'category_label' => 'Education',
                'author' => 'Prudy N Singo',
                'date' => 'April 17, 2023',
                'read_time' => '8 min read'
            ],
            [
                'title' => 'Smoke Detector System',
                'excerpt' => 'Learn to build a smart smoke detection system for industrial safety using MQ-2 sensor and LCD display.',
                'image' => '/images/GasSensor.png',
                'url' => route('blog.smoke-detector'),
                'category' => 'education',
                'category_label' => 'Education',
                'author' => 'Greycode Team',
                'date' => 'July 4, 2025',
                'read_time' => '6 min read'
            ],
            [
                'title' => 'Smart Bulb Home Automation',
                'excerpt' => 'Control AC bulbs remotely using Greycode Board and Blynk app with this home automation tutorial.',
                'image' => '/images/SMART-BULB.png',
                'url' => route('blog.smart-bulb'),
                'category' => 'education',
                'category_label' => 'Education',
                'author' => 'Greycode Team',
                'date' => 'June 2, 2025',
                'read_time' => '7 min read'
            ],
            [
                'title' => 'Radar System Tutorial',
                'excerpt' => 'Create a beginner radar system using ultrasonic sensor and servo motor with real-time monitoring.',
                'image' => '/images/RadarSystem.png',
                'url' => route('blog.radar-system'),
                'category' => 'education',
                'category_label' => 'Education',
                'author' => 'Akhona Mshike',
                'date' => 'October 6, 2025',
                'read_time' => '10 min read'
            ],

            // Industry Category (Industry Insights, Applications)
            [
                'title' => 'IoT in Mining Industry',
                'excerpt' => 'Explore how IoT technology is revolutionizing mining with smart monitoring and safety solutions.',
                'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65a5626243e860984ea9372f_thumb_3667_news_standard.jpeg',
                'url' => route('blog.iot-mining'),
                'category' => 'industry',
                'category_label' => 'Industry',
                'author' => 'Nathan Lumbu',
                'date' => 'March 10, 2022',
                'read_time' => '6 min read'
            ],
            [
                'title' => 'Healthcare IoT Impact',
                'excerpt' => 'Discover how Internet of Things is transforming healthcare with improved patient monitoring and personalized care.',
                'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65c609bc765b7b309d0d4291_IoT%20in%20Healthcare.jpg',
                'url' => route('blog.healthcare-iot'),
                'category' => 'industry',
                'category_label' => 'Industry',
                'author' => 'Tuka Wright',
                'date' => 'October 27, 2025',
                'read_time' => '5 min read'
            ],
            [
                'title' => 'Energy IoT Solutions',
                'excerpt' => 'Learn how IoT technology is optimizing energy grid management and renewable energy integration.',
                'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65e7176807d17908891a38ca_lightbulb-1875247-1920_ver_1%20(1).jpg',
                'url' => route('blog.energy-in-iot'),
                'category' => 'industry',
                'category_label' => 'Industry',
                'author' => 'Greycode Team',
                'date' => 'November 15, 2024',
                'read_time' => '4 min read'
            ],

            // Articles Category (Thought Leadership, Opinion Pieces)
            [
                'title' => 'Youth Unemployment & Innovation',
                'excerpt' => 'Exploring President Ramaphosa\'s initiative to remove work experience requirements and how innovation can solve youth unemployment.',
                'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65fbdd34fd3ca0bccf0283d3_65bbacd150760203bab3724e_doug-linstedt-jEEYZsaxbH4-unsplash.jpg',
                'url' => route('blog.youth-unemployment'),
                'category' => 'articles',
                'category_label' => 'Articles',
                'author' => 'Mutshidzi Mapila',
                'date' => 'March 24, 2024',
                'read_time' => '5 min read'
            ]
        ];
    }

    public function healthcareIoT()
    {
        // Simple approach - no database page creation
        $comments = collect(); // Empty comments for now
        
        return view('blog.healthcare-iot', [
            'comments' => $comments
        ]);
    }

    public function energyInIoT()
    {
        // Use the same simple approach for consistency
        $comments = collect();
        
        return view('blog.energy-in-iot', [
            'comments' => $comments
        ]);
    }

    public function iotMining()
    {
    $comments = collect(); // Empty comments
    
    return view('blog.iot-mining', [
        'comments' => $comments
    ]);
    }
    
    public function radarSystem()
    {
    $comments = collect(); // Empty comments
    
    return view('blog.radar-system', [
        'comments' => $comments
    ]);
    }
    public function smartBulb()
    {
        $comments = collect(); // Empty comments
    
        return view('blog.smart-bulb', [
            'comments' => $comments
        ]);
    }
    public function smokeDetector()
    {
        $comments = collect(); // Empty comments
    
        return view('blog.smoke-detector', [
            'comments' => $comments
        ]);
    }
    public function bluetoothSpeaker()
    {
    $comments = collect(); // Empty comments
    
    return view('blog.bluetooth-speaker', [
        'comments' => $comments
    ]);
    }
    public function youthUnemployment()
    {
    $comments = collect(); // Empty comments

    return view('blog.youth-unemployment', [
        'comments' => $comments
    ]);
    }
}