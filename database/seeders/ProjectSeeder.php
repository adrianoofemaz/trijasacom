<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\ProjectClient;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        // Create Project Clients first
        $clients = [
            [
                'name' => 'Tech Innovators Ltd',
                'slug' => 'tech-innovators',
                'description' => 'A leading technology company specializing in digital transformation solutions.',
                'website' => 'https://techinnovators.com',
                'email' => 'info@techinnovators.com',
                'phone' => '+1-555-0123',
                'industry' => 'technology',
                'company_size' => 'medium',
                'contact_person' => [
                    'name' => 'John Smith',
                    'email' => 'john.smith@techinnovators.com',
                    'phone' => '+1-555-0124',
                    'position' => 'Project Manager'
                ]
            ],
            [
                'name' => 'E-Commerce Solutions Inc',
                'slug' => 'ecommerce-solutions',
                'description' => 'Providing comprehensive e-commerce solutions for businesses worldwide.',
                'website' => 'https://ecommercesolutions.com',
                'email' => 'contact@ecommercesolutions.com',
                'phone' => '+1-555-0125',
                'industry' => 'retail',
                'company_size' => 'large',
                'contact_person' => [
                    'name' => 'Sarah Johnson',
                    'email' => 'sarah.j@ecommercesolutions.com',
                    'phone' => '+1-555-0126',
                    'position' => 'Technical Lead'
                ]
            ],
            [
                'name' => 'HealthCare Digital',
                'slug' => 'healthcare-digital',
                'description' => 'Digital healthcare solutions for modern medical practices.',
                'website' => 'https://healthcaredigital.com',
                'email' => 'info@healthcaredigital.com',
                'phone' => '+1-555-0127',
                'industry' => 'healthcare',
                'company_size' => 'startup',
                'contact_person' => [
                    'name' => 'Dr. Michael Brown',
                    'email' => 'michael.brown@healthcaredigital.com',
                    'phone' => '+1-555-0128',
                    'position' => 'Founder & CEO'
                ]
            ]
        ];

        foreach ($clients as $clientData) {
            ProjectClient::create($clientData);
        }

        // Get created clients
        $techClient = ProjectClient::where('slug', 'tech-innovators')->first();
        $ecommerceClient = ProjectClient::where('slug', 'ecommerce-solutions')->first();
        $healthcareClient = ProjectClient::where('slug', 'healthcare-digital')->first();

        // Create Projects
        $projects = [
            [
                'name' => 'Corporate Website Redesign',
                'slug' => 'corporate-website-redesign',
                'about' => 'Complete redesign and development of corporate website with modern UI/UX.',
                'description' => 'A comprehensive website redesign project that involved creating a modern, responsive design with improved user experience and better performance. The project included SEO optimization, content management system integration, and mobile-first approach.',
                'category' => 'web-development',
                'project_client_id' => $techClient->id,
                'project_url' => 'https://techinnovators.com',
                'demo_url' => 'https://demo.techinnovators.com',
                'github_url' => 'https://github.com/username/tech-innovators-website',
                'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Redis'],
                'start_date' => Carbon::now()->subMonths(6),
                'end_date' => Carbon::now()->subMonths(4),
                'status' => 'completed',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'E-Commerce Platform',
                'slug' => 'ecommerce-platform',
                'about' => 'Full-featured e-commerce platform with payment integration and inventory management.',
                'description' => 'Development of a comprehensive e-commerce platform featuring product catalog, shopping cart, payment gateway integration, inventory management, order tracking, and admin dashboard. The platform supports multiple payment methods and provides detailed analytics.',
                'category' => 'web-application',
                'project_client_id' => $ecommerceClient->id,
                'project_url' => 'https://shop.ecommercesolutions.com',
                'demo_url' => 'https://demo-shop.ecommercesolutions.com',
                'github_url' => 'https://github.com/username/ecommerce-platform',
                'technologies' => ['Laravel', 'React', 'Bootstrap', 'PostgreSQL', 'Stripe API', 'PayPal API'],
                'start_date' => Carbon::now()->subMonths(8),
                'end_date' => Carbon::now()->subMonths(2),
                'status' => 'completed',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Patient Management System',
                'slug' => 'patient-management-system',
                'about' => 'Digital healthcare solution for patient record management and appointment scheduling.',
                'description' => 'A comprehensive patient management system designed for healthcare providers. Features include patient registration, medical history tracking, appointment scheduling, prescription management, and reporting tools. The system ensures HIPAA compliance and data security.',
                'category' => 'healthcare-app',
                'project_client_id' => $healthcareClient->id,
                'project_url' => 'https://pms.healthcaredigital.com',
                'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'MySQL', 'Chart.js'],
                'start_date' => Carbon::now()->subMonths(5),
                'end_date' => Carbon::now()->subMonth(1),
                'status' => 'completed',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'name' => 'Mobile App for Inventory',
                'slug' => 'mobile-inventory-app',
                'about' => 'Cross-platform mobile application for inventory management and tracking.',
                'description' => 'A mobile application built with React Native for real-time inventory tracking and management. Features include barcode scanning, stock alerts, reporting, and offline synchronization capabilities.',
                'category' => 'mobile-app',
                'project_client_id' => $ecommerceClient->id,
                'demo_url' => 'https://expo.dev/@username/inventory-app',
                'github_url' => 'https://github.com/username/inventory-mobile-app',
                'technologies' => ['React Native', 'Expo', 'Firebase', 'Redux', 'Barcode Scanner'],
                'start_date' => Carbon::now()->subMonths(4),
                'end_date' => Carbon::now()->subWeeks(2),
                'status' => 'completed',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'name' => 'API Development Project',
                'slug' => 'api-development-project',
                'about' => 'RESTful API development for third-party integrations and mobile applications.',
                'description' => 'Development of a comprehensive RESTful API with authentication, rate limiting, and comprehensive documentation. The API serves as a backend for multiple applications and provides third-party integration capabilities.',
                'category' => 'backend-development',
                'project_client_id' => $techClient->id,
                'github_url' => 'https://github.com/username/api-development',
                'technologies' => ['Laravel', 'JWT', 'Swagger', 'MySQL', 'Redis', 'Docker'],
                'start_date' => Carbon::now()->subMonths(3),
                'end_date' => Carbon::now()->subWeeks(3),
                'status' => 'completed',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'name' => 'CRM System Enhancement',
                'slug' => 'crm-system-enhancement',
                'about' => 'Enhancement and modernization of existing CRM system with new features.',
                'description' => 'Ongoing project to enhance and modernize an existing CRM system. New features include advanced reporting, workflow automation, email integration, and improved user interface.',
                'category' => 'system-enhancement',
                'client_name' => 'Internal Project',
                'technologies' => ['PHP', 'MySQL', 'JavaScript', 'jQuery', 'Chart.js'],
                'start_date' => Carbon::now()->subMonths(2),
                'status' => 'ongoing',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 6
            ]
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}