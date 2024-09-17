<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'AAPamilya',
                'description' => 'The AAPamilya Travel Booking Website is a comprehensive platform for booking travel packages, tours, and accommodations. It features a user-friendly interface that allows customers to easily browse, select, and book tours, including city tours and adventure packages.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, CodeIgniter 3',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/aaptravel/travel.png'],
                    ['src' => 'assets/img/mc/aaptravel/travel1.png'],
                    ['src' => 'assets/img/mc/aaptravel/travel2.png'],
                    ['src' => 'assets/img/mc/aaptravel/travel3.png',],
                ]),
            ],

            [
                'title' => 'eRaffle System',
                'description' => 'The eRaffle System is a monthly raffle platform for active members. It automatically enrolls eligible members, randomly selects winners, and manages prize distribution. Designed for seamless use, it ensures fairness and transparency with real-time updates during live raffles.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, CodeIgniter 3',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/raffle/raffle.png'],
                    ['src' => 'assets/img/mc/raffle/raffle1.png'],
                    ['src' => 'assets/img/mc/raffle/raffle2.png'],
                    ['src' => 'assets/img/mc/raffle/raffle3.png'],
                ]),
            ],
            
            [
                'title' => 'HR System',
                'description' => 'The HR System is a recruitment platform where employers can manage job postings and applicants. It allows adding and deleting jobs, viewing all applicants, updating application statuses, and handling candidate CV uploads. The system streamlines the hiring process with easy tracking and status updates for each applicant.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/hr/hr.png'],
                    ['src' => 'assets/img/mc/hr/hr1.png'],
                    ['src' => 'assets/img/mc/hr/hr2.png'],
                    ['src' => 'assets/img/mc/hr/hr3.png'],
                ]),
            ],

            [
                'title' => 'Queueing System',
                'description' => 'The Queue System is a real-time management platform for organizing customer service queues. It supports multiple counters and priority lanes, generates queue numbers, and tracks service status. With branch-specific logins, the system allows staff to manage queues efficiently, update statuses, and serve customers in an organized manner.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10, Text to Speech, Pusher, Realtime, API',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/que/que.png'],
                    ['src' => 'assets/img/mc/que/que1.png'],
                    ['src' => 'assets/img/mc/que/que2.png'],
                    ['src' => 'assets/img/mc/que/que3.png'],
                ]),
            ],

            [
                'title' => 'RoundTable',
                'description' => 'The RoundTable Website is an international travel booking platform focused on tours within the Philippines. It allows users to book tours, make payments via PayPal, and receive booking confirmations through SMTP email notifications. The system offers a smooth booking experience for both local and international travelers.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10, SMTP, Paypal Integration',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/roundtable/roundtable.png'],
                    ['src' => 'assets/img/mc/roundtable/roundtable1.png'],
                    ['src' => 'assets/img/mc/roundtable/roundtable2.png'],
                    ['src' => 'assets/img/mc/roundtable/roundtable3.png'],
                ]),
            ],

            [
                'title' => 'Kiosk System',
                'description' => 'The Kiosk System is integrated with the Queue System, allowing users to apply for membership directly from the kiosk. Once an application is submitted, it automatically appears in the queue for processing. This system streamlines membership applications and ensures they are efficiently managed alongside other queued services.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10, Livewire, API',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/kiosk/kiosk.png'],
                    ['src' => 'assets/img/mc/kiosk/kiosk1.png'],
                    ['src' => 'assets/img/mc/kiosk/kiosk2.png'],
                    ['src' => 'assets/img/mc/kiosk/kiosk3.png'],
                ]),
            ],

            [
                'title' => 'CSR System',
                'description' => 'The Customer Relationship System (CRS) is designed for managing customer service interactions. It allows agents to track, prioritize, and respond to customer inquiries efficiently. The system supports ticketing, status updates, and issue resolution, providing a streamlined way to handle customer feedback and support requests.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10, AlphineJs',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/csr/csr.png'],
                    ['src' => 'assets/img/mc/csr/csr1.png'],
                    ['src' => 'assets/img/mc/csr/csr2.png'],
                    ['src' => 'assets/img/mc/csr/csr3.png'],
                ]),
            ],

            [
                'title' => 'Special Dog',
                'description' => 'Special Dog is a website dedicated to rehoming non-owner dogs and specific dog breeds. Users can browse available dogs, apply for adoption, and pay rehoming fees for certain breeds. The platform connects dogs in need of new homes with potential adopters, ensuring a smooth adoption process.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10, Reactjs Vite',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/dog/dog.png'],
                    ['src' => 'assets/img/mc/dog/dog1.png'],
                    ['src' => 'assets/img/mc/dog/dog2.png'],
                    ['src' => 'assets/img/mc/dog/dog3.png'],
                ]),
            ],

            [
                'title' => 'Burgers Hub',
                'description' => 'Burgers Hub is a website for ordering delicious burgers online. Customers can browse the menu, customize their burgers, and place orders for delivery or pickup. The platform offers a seamless shopping experience with secure payment options and real-time order tracking.',
                'tools_used' => 'HTML, CSS, Bootstrap, JavaScript, Ajax, Jquery, MVC, Laravel 10, Reactjs Vite',
                'images' => json_encode([
                    ['src' => 'assets/img/mc/burger/burger.png'],
                    ['src' => 'assets/img/mc/burger/burger1.png'],
                    ['src' => 'assets/img/mc/burger/burger2.png'],
                    ['src' => 'assets/img/mc/burger/burger3.png'],
                ]),
            ],

        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
