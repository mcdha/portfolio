<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricePlan;

class PricePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $price_plans = [
            [
                'title' => 'Starter Price',
                'price_cost' => 'FREE',
                'price_list' => json_encode([ // Convert array to JSON
                    'Ui Design',
                    'Logo design',
                    'Web Development',
                    'Deployment for 1 month',
                    'Admin and User Dashboard',
                ]),
            ],

            [
                'title' => 'Static',
                'price_cost' => '300',
                'price_list' => json_encode([
                    'Ui Design',
                    'Logo design',
                    'Web Development',
                    'Deployment for 1 month',
                    'Admin and User Dashboard',
                ]),
            ],

            [
                'title' => 'Dynamic',
                'price_cost' => '450',
                'price_list' => json_encode([
                    'Ui Design',
                    'Logo design',
                    'Web Development',
                    'Deployment for 1 month',
                    'Admin and User Dashboard',
                ]),
            ],
        ];

        foreach ($price_plans as $price_plan) {
            PricePlan::create($price_plan);
        }
    }
}
