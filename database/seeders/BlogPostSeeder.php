<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            // Featured Post
            [
                'title' => 'Modern Construction Techniques: Building the Future',
                'slug' => 'modern-construction-techniques-building-the-future',
                'excerpt' => 'Discover the latest innovations in construction technology that are revolutionizing how we build homes and infrastructure. From sustainable materials to smart building systems.',
                'content' => $this->generateContent('Modern construction techniques are transforming the industry...'),
                'category' => 'construction',
                'author_name' => 'TSI Team',
                'author_initials' => 'TSI',
                'reading_time' => 5,
                'views_count' => 1249,
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            // Construction Posts
            [
                'title' => 'Sustainable Building Materials: The Future is Green',
                'slug' => 'sustainable-building-materials-the-future-is-green',
                'excerpt' => 'Explore eco-friendly construction materials that are revolutionizing the building industry while reducing environmental impact.',
                'content' => $this->generateContent('Sustainable building materials are becoming increasingly important...'),
                'category' => 'construction',
                'author_name' => 'Rangga Madini',
                'author_initials' => 'RM',
                'reading_time' => 3,
                'views_count' => 892,
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Smart Building Technology: The Future of Construction',
                'slug' => 'smart-building-technology-future-of-construction',
                'excerpt' => 'Explore how IoT, AI, and automation are transforming the construction industry and creating smarter buildings.',
                'content' => $this->generateContent('Smart building technology is revolutionizing construction...'),
                'category' => 'construction',
                'author_name' => 'Trihadinata',
                'author_initials' => 'TR',
                'reading_time' => 5,
                'views_count' => 967,
                'is_published' => true,
                'published_at' => now()->subDays(24),
            ],
            // Architecture/Design Posts
            [
                'title' => 'Minimalist Architecture: Less is More',
                'slug' => 'minimalist-architecture-less-is-more',
                'excerpt' => 'Discover how minimalist design principles are shaping modern architecture and creating functional, beautiful spaces.',
                'content' => $this->generateContent('Minimalist architecture focuses on simplicity and functionality...'),
                'category' => 'design',
                'author_name' => 'Hanri Djasa',
                'author_initials' => 'HD',
                'reading_time' => 4,
                'views_count' => 745,
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Indonesian Traditional Architecture Meets Modern Design',
                'slug' => 'indonesian-traditional-architecture-meets-modern-design',
                'excerpt' => 'Discover how traditional Indonesian architectural elements are being integrated into contemporary building designs.',
                'content' => $this->generateContent('Indonesian traditional architecture has rich cultural heritage...'),
                'category' => 'design',
                'author_name' => 'Azman Ferdy',
                'author_initials' => 'AF',
                'reading_time' => 4,
                'views_count' => 1423,
                'is_published' => true,
                'published_at' => now()->subDays(28),
            ],
            // Interior Design Posts
            [
                'title' => 'Interior Design Trends 2025: What\'s Hot This Year',
                'slug' => 'interior-design-trends-2025-whats-hot-this-year',
                'excerpt' => 'Stay ahead of the curve with the latest interior design trends that are defining modern living spaces in 2025.',
                'content' => $this->generateContent('Interior design trends for 2025 focus on sustainability and comfort...'),
                'category' => 'interior',
                'author_name' => 'El Biru',
                'author_initials' => 'EB',
                'reading_time' => 6,
                'views_count' => 1156,
                'is_published' => true,
                'published_at' => now()->subDays(19),
            ],
            // Tips & Guides Posts
            [
                'title' => '10 Essential Tips for First-Time Home Builders',
                'slug' => '10-essential-tips-for-first-time-home-builders',
                'excerpt' => 'Navigate your first construction project with confidence using our comprehensive guide for new home builders.',
                'content' => $this->generateContent('Building your first home can be overwhelming, but with these tips...'),
                'category' => 'tips',
                'author_name' => 'Yulveri',
                'author_initials' => 'YU',
                'reading_time' => 7,
                'views_count' => 2034,
                'is_published' => true,
                'published_at' => now()->subDays(22),
            ],
            // Additional posts for variety
            [
                'title' => 'How to Choose the Right Contractor for Your Project',
                'slug' => 'how-to-choose-right-contractor-for-your-project',
                'excerpt' => 'Finding the right contractor is crucial for project success. Learn what to look for and questions to ask.',
                'content' => $this->generateContent('Choosing the right contractor can make or break your project...'),
                'category' => 'tips',
                'author_name' => 'TSI Team',
                'author_initials' => 'TSI',
                'reading_time' => 5,
                'views_count' => 678,
                'is_published' => true,
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Luxury Home Design: Creating Elegant Living Spaces',
                'slug' => 'luxury-home-design-creating-elegant-living-spaces',
                'excerpt' => 'Explore the key elements that make a home truly luxurious, from materials to layout and lighting.',
                'content' => $this->generateContent('Luxury home design goes beyond expensive materials...'),
                'category' => 'interior',
                'author_name' => 'Hanri Djasa',
                'author_initials' => 'HD',
                'reading_time' => 6,
                'views_count' => 543,
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Green Building Certification: Worth the Investment?',
                'slug' => 'green-building-certification-worth-the-investment',
                'excerpt' => 'Understanding the benefits and costs of green building certifications for your construction project.',
                'content' => $this->generateContent('Green building certifications are becoming more popular...'),
                'category' => 'construction',
                'author_name' => 'Rangga Madini',
                'author_initials' => 'RM',
                'reading_time' => 4,
                'views_count' => 421,
                'is_published' => true,
                'published_at' => now()->subDays(7),
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }

    private function generateContent($intro)
    {
        return $intro . '

## Introduction

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

## Key Points

**1. Innovation in Construction**
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

**2. Sustainable Practices**
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

**3. Future Trends**
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

## Implementation

At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.

### Step-by-Step Process

1. **Planning Phase**: Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
2. **Design Phase**: Et harum quidem rerum facilis est et expedita distinctio.
3. **Implementation**: Nam libero tempore, cum soluta nobis est eligendi optio cumque.

## Conclusion

Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.

*This article provides comprehensive insights into modern construction and design practices. For more information about our services, feel free to contact our team.*';
    }
}