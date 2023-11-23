<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'title' => 'Traveling in New York',
                'summary' => 'A guide to exploring the Big Apple',
                'description' => 'Discover the best places to visit in New York City, from iconic landmarks to hidden gems.',
                'status' =>'Active',
            ],
            [
                'title' => 'Hiking in the Grand Canyon',
                'summary' => 'An adventure in the great outdoors',
                'description' => 'Experience the breathtaking beauty of the Grand Canyon through a thrilling hiking expedition.',
                'status' =>'Active',
            ],
            [
                'title' => 'Cooking Italian Cuisine',
                'summary' => 'Delicious recipes and cooking tips',
                'description' => 'Learn how to prepare authentic Italian dishes with step-by-step recipes and expert cooking advice.',
                'status' =>'Active',
            ],
            [
                'title' => 'Technology Trends 2023',
                'summary' => 'Insights into the latest tech innovations',
                'description' => 'Stay up to date with the most significant technology trends and innovations shaping the future.',
                'status' =>'Active',
            ],
            [
                'title' => 'Yoga and Mindfulness Meditation',
                'summary' => 'Balancing your mind and body',
                'description' => 'Discover the benefits of yoga and mindfulness meditation for a healthier and more peaceful life.',
                'status' =>'Active',
            ],
        ]);

        $posts->each(function ($post) {
            post::create($post);
        });
    }
}
