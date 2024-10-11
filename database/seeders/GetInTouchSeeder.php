<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GetInTouch;

class GetInTouchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $get_in_touchs = [
            [
                'name' => 'Mc. Dharnel Pagaragan',
                'occupation' => 'Designer',
                'email' => 'mcpoginel@gmail.com',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'get_in_touch_images/1tcbfIxbxxMQpqtoEeITQLMgxoKlDV93qkWCkhGC.png',
                'is_testimonial' => true,
            ],
            [
                'name' => 'Marlyn Aberin',
                'occupation' => 'Full Stack Developer',
                'email' => 'marlyn@gmail.com',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'get_in_touch_images/mb9i3a8wdYdEmb5DvlFxH7UopwsfXIw5R2hBvJko.jpg',
                'is_testimonial' => true,
            ],
            [
                'name' => 'Kanziou Koa',
                'occupation' => 'Manager',
                'email' => 'kanziou@gmail.com',
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'image' => 'get_in_touch_images/1tcbfIxbxxMQpqtoEeITQLMgxoKlDV93qkWCkhGC.png',
                'is_testimonial' => true,
            ],
        ];

        foreach ($get_in_touchs as $get_in_touch) {
            GetInTouch::create($get_in_touch);
        }
    }
}
