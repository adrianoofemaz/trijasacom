@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 relative overflow-hidden min-h-screen flex items-center">
    <x-nav/>
    
    <!-- Enhanced Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Animated Particles -->
        <div class="absolute top-20 left-20 w-2 h-2 bg-cyan-400 rounded-full animate-ping"></div>
        <div class="absolute top-40 right-32 w-3 h-3 bg-emerald-400 rounded-full animate-pulse delay-300"></div>
        <div class="absolute bottom-32 left-40 w-1 h-1 bg-purple-400 rounded-full animate-bounce delay-700"></div>
        <div class="absolute top-60 right-20 w-2 h-2 bg-yellow-400 rounded-full animate-pulse delay-1000"></div>
        
        <!-- Floating Geometric Shapes -->
        <div class="absolute top-1/4 left-1/4 w-20 h-20 border border-cyan-400/30 rotate-45 animate-spin-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-16 h-16 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-full animate-float"></div>
        <div class="absolute top-1/2 left-10 w-12 h-12 bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 transform rotate-12 animate-float-delayed"></div>
        
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
    </div>
    
    <div class="container max-w-7xl mx-auto relative pt-10 z-10 px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Hero Section -->
        <section class="relative py-12 sm:py-16 lg:py-20">
            <div class="max-w-5xl mx-auto text-center">
                <div class="animate-fade-in-up">
                    <div class="inline-block mb-6">
                        <span class="bg-gradient-to-r from-cyan-400 to-emerald-400 text-transparent bg-clip-text text-sm font-bold tracking-wider uppercase">
                            Insights & Knowledge
                        </span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-white leading-tight">
                        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-emerald-400 to-purple-400 animate-gradient">Blog</span>
                    </h1>
                    <p class="text-xl sm:text-2xl md:text-3xl mb-8 text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                        Explore the latest trends, tips, and insights in 
                        <span class="text-emerald-400 font-semibold">construction & design</span>
                    </p>
                </div>
                
                <!-- Enhanced Blog Category Tags -->
                <div class="flex flex-wrap justify-center gap-3 md:gap-4 animate-fade-in-up delay-300 mb-12">
                    <button class="blog-filter active group relative overflow-hidden bg-gradient-to-r from-cyan-500 to-emerald-500 hover:from-cyan-400 hover:to-emerald-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="all">
                        <span class="relative z-10">All Articles</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="blog-filter group relative overflow-hidden bg-gradient-to-r from-emerald-600 to-teal-500 hover:from-emerald-500 hover:to-teal-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="construction">
                        <span class="relative z-10">Construction</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="blog-filter group relative overflow-hidden bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-500 hover:to-pink-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="design">
                        <span class="relative z-10">Architecture</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="blog-filter group relative overflow-hidden bg-gradient-to-r from-orange-600 to-red-500 hover:from-orange-500 hover:to-red-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="interior">
                        <span class="relative z-10">Interior Design</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="blog-filter group relative overflow-hidden bg-gradient-to-r from-rose-600 to-pink-500 hover:from-rose-500 hover:to-pink-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="tips">
                        <span class="relative z-10">Tips & Guides</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>

                <!-- Enhanced Scroll Indicator -->
                <div class="mt-12 animate-bounce">
                    <div class="flex flex-col items-center">
                        <span class="text-gray-400 text-sm mb-2">Scroll to explore</span>
                        <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center">
                            <div class="w-1 h-3 bg-gray-400 rounded-full animate-bounce mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Featured Article Section -->
<section class="py-16 lg:py-20 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Featured Article -->
        <div class="mb-20" data-aos="fade-up">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Article</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our most popular and insightful content</p>
            </div>
            
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-700 transform hover:-translate-y-2">
                <div class="md:flex">
                    <!-- Featured Image -->
                    <div class="md:w-1/2 relative">
                        <div class="h-80 md:h-96 bg-gradient-to-br from-emerald-100 to-cyan-100 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-cyan-500/20"></div>
                            <svg class="w-24 h-24 text-emerald-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <!-- Decorative Elements -->
                            <div class="absolute top-6 right-6 w-12 h-12 bg-emerald-400/30 rounded-full animate-pulse"></div>
                            <div class="absolute bottom-8 left-8 w-8 h-8 bg-cyan-400/30 rounded-full animate-pulse delay-300"></div>
                        </div>
                        
                        <!-- Category Badge -->
                        <div class="absolute top-6 left-6 bg-gradient-to-r from-emerald-500 to-cyan-500 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            <span class="flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Construction
                            </span>
                        </div>
                        
                        <!-- Reading Time -->
                        <div class="absolute bottom-6 right-6 bg-white/90 backdrop-blur-sm text-gray-800 px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            5 min read
                        </div>
                    </div>
                    
                    <!-- Featured Content -->
                    <div class="md:w-1/2 p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center mb-4">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                            <span class="text-emerald-600 font-bold text-sm uppercase tracking-wide">Featured Article</span>
                        </div>
                        
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4 leading-tight hover:text-emerald-600 transition-colors cursor-pointer">
                            Modern Construction Techniques: Building the Future
                        </h3>
                        
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Discover the latest innovations in construction technology that are revolutionizing how we build homes and infrastructure. From sustainable materials to smart building systems.
                        </p>
                        
                        <!-- Article Meta -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-white font-bold text-sm">TSI</span>
                                </div>
                                <div>
                                    <p class="text-gray-900 font-semibold text-sm">TSI Team</p>
                                    <p class="text-gray-500 text-xs">January 15, 2025</p>
                                </div>
                            </div>
                            <div class="flex items-center text-gray-500 text-sm">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                1,249 views
                            </div>
                        </div>
                        
                        <a href="#" class="inline-flex items-center bg-gradient-to-r from-emerald-500 to-cyan-500 hover:from-emerald-400 hover:to-cyan-400 text-white px-8 py-4 rounded-2xl font-bold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            <span>Read Full Article</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Latest Articles</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Stay updated with the latest trends and insights</p>
        </div>
        
        <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            
            <!-- Blog Post 1: Construction -->
            <article class="blog-item construction group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-emerald-100 to-green-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-green-500/20"></div>
                        <svg class="w-16 h-16 text-emerald-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                        <div class="absolute top-4 right-4 w-8 h-8 bg-emerald-400/30 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-6 w-6 h-6 bg-green-400/30 rounded-full animate-pulse delay-300"></div>
                    </div>
                    
                    <!-- Enhanced Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-emerald-500 to-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        Construction
                    </div>
                    
                    <!-- Reading Time -->
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        6 min read
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-3"></div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-orange-600 transition-colors leading-tight">
                            Interior Design Trends 2025: What's Hot This Year
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Stay ahead of the curve with the latest interior design trends that are defining modern living spaces in 2025.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mr-2">
                                <span class="text-white font-bold text-xs">EB</span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-xs">El Biru</p>
                                <p class="text-gray-500 text-xs">Jan 8, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            1,156 views
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Blog Post 2: Architecture -->
            <article class="blog-item design group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20"></div>
                        <svg class="w-16 h-16 text-purple-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6-4h6m2 5l-8 8a2 2 0 01-2.828 0L5 16V8a2 2 0 012-2h8l8 8z"></path>
                        </svg>
                        <div class="absolute top-4 right-4 w-8 h-8 bg-purple-400/30 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-6 w-6 h-6 bg-pink-400/30 rounded-full animate-pulse delay-300"></div>
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        Architecture
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        4 min read
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-purple-600 transition-colors leading-tight">
                            Minimalist Architecture: Less is More
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Discover how minimalist design principles are shaping modern architecture and creating functional, beautiful spaces.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mr-2">
                                <span class="text-white font-bold text-xs">HD</span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-xs">Hanri Djasa</p>
                                <p class="text-gray-500 text-xs">Jan 10, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            745 views
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Blog Post 3: Interior Design -->
            <article class="blog-item interior group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-orange-100 to-red-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-red-500/20"></div>
                        <svg class="w-16 h-16 text-orange-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4 4 4 0 004-4V5z"></path>
                        </svg>
                        <div class="absolute top-4 right-4 w-8 h-8 bg-orange-400/30 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-6 w-6 h-6 bg-red-400/30 rounded-full animate-pulse delay-300"></div>
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        Interior Design
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        3 min read
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors leading-tight">
                            Sustainable Building Materials: The Future is Green
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Explore eco-friendly construction materials that are revolutionizing the building industry while reducing environmental impact.
                    </p>
                    
                    <!-- Article Meta -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-green-500 rounded-full flex items-center justify-center mr-2">
                                <span class="text-white font-bold text-xs">RM</span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-xs">Rangga Madini</p>
                                <p class="text-gray-500 text-xs">Jan 12, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            892 views
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Blog Post 4: Tips & Guides -->
            <article class="blog-item tips group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-rose-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-rose-500/20 to-pink-500/20"></div>
                        <svg class="w-16 h-16 text-rose-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                        <div class="absolute top-4 right-4 w-8 h-8 bg-rose-400/30 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-6 w-6 h-6 bg-pink-400/30 rounded-full animate-pulse delay-300"></div>
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-rose-500 to-pink-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        Tips & Guides
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        7 min read
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-2 h-2 bg-rose-500 rounded-full mr-3"></div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-rose-600 transition-colors leading-tight">
                            10 Essential Tips for First-Time Home Builders
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Navigate your first construction project with confidence using our comprehensive guide for new home builders.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-rose-500 to-pink-500 rounded-full flex items-center justify-center mr-2">
                                <span class="text-white font-bold text-xs">YU</span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-xs">Yulveri</p>
                                <p class="text-gray-500 text-xs">Jan 5, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            2,034 views
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-rose-600 hover:text-rose-700 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Blog Post 5: Construction -->
            <article class="blog-item construction group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-500/20 to-cyan-500/20"></div>
                        <svg class="w-16 h-16 text-teal-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                        <div class="absolute top-4 right-4 w-8 h-8 bg-teal-400/30 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-6 w-6 h-6 bg-cyan-400/30 rounded-full animate-pulse delay-300"></div>
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-teal-500 to-cyan-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        Construction
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        5 min read
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-teal-600 transition-colors leading-tight">
                            Smart Building Technology: The Future of Construction
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Explore how IoT, AI, and automation are transforming the construction industry and creating smarter buildings.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center mr-2">
                                <span class="text-white font-bold text-xs">TR</span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-xs">Trihadinata</p>
                                <p class="text-gray-500 text-xs">Jan 3, 2025</p>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            967 views
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Blog Post 6: Architecture -->
            <article class="blog-item design group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-indigo-100 to-purple-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-purple-500/20"></div>
                        <svg class="w-16 h-16 text-indigo-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        <div class="absolute top-4 right-4 w-8 h-8 bg-indigo-400/30 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-6 w-6 h-6 bg-purple-400/30 rounded-full animate-pulse delay-300"></div>
                    </div>
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    
                    <div class="absolute top-4 left-4 bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        Architecture
                    </div>
                    
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        4 min read
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <div class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors leading-tight">
                            Indonesian Traditional Architecture Meets Modern Design
                        </h3>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                        Discover how traditional Indonesian architectural elements are being integrated into contemporary building designs.
                    </p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex items-center justify-center mr-2">
                                <span class="text-white font-bold text-xs">AF</span>
                            </div>
                            <div>
                                <p class="text-gray-900 font-semibold text-xs">Azman Ferdy</p>
                                <p class="text-gray-500 text-xs">Dec 30, 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            1,423 views
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center text-indigo-600 hover:text-indigo-700 font-semibold text-sm transition-colors">
                        Read More
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- Enhanced Load More Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            <button id="load-more-btn" class="group relative overflow-hidden bg-gradient-to-r from-slate-900 to-blue-900 hover:from-slate-800 hover:to-blue-800 text-white px-12 py-5 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-2 transition-all duration-500">
                <span class="relative z-10 flex items-center">
                    <svg class="w-6 h-6 mr-3 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Load More Articles
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </button>
        </div>
    </div>
</section>

<!-- Newsletter Subscription Section -->
<section class="py-20 bg-gradient-to-br from-emerald-900 via-teal-900 to-cyan-900 text-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-32 h-32 bg-emerald-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 bg-cyan-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-teal-400/5 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>
    
    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-black mb-6">
                Stay 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">Updated</span>
            </h2>
            <p class="text-xl md:text-2xl mb-8 text-gray-300 leading-relaxed max-w-3xl mx-auto">
                Subscribe to our newsletter and get the latest construction trends, design tips, and industry insights delivered to your inbox.
            </p>
            
            <!-- Newsletter Form -->
            <div class="max-w-md mx-auto" data-aos="fade-up" data-aos-delay="200">
                <form class="flex flex-col sm:flex-row gap-4">
                    <div class="flex-1">
                        <input type="email" placeholder="Enter your email address" class="w-full px-6 py-4 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all duration-300">
                    </div>
                    <button type="submit" class="group relative overflow-hidden bg-gradient-to-r from-emerald-500 to-cyan-500 hover:from-emerald-400 hover:to-cyan-400 text-white px-8 py-4 rounded-2xl font-bold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        <span class="relative z-10 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Subscribe
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </form>
                <p class="text-sm text-gray-400 mt-4">
                    * We respect your privacy. Unsubscribe at any time.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Call to Action Section -->
<section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 text-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-32 h-32 bg-cyan-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 bg-emerald-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-purple-400/5 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>
    
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-black mb-8" data-aos="fade-up">
                Ready to Start Your 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">Dream Project?</span>
            </h2>
            <p class="text-xl md:text-2xl mb-12 text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Let us bring your construction and design vision to life with our expertise and commitment to excellence.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center" data-aos="fade-up" data-aos-delay="200">
                <a href="#contact" class="group relative overflow-hidden bg-gradient-to-r from-cyan-500 to-emerald-500 hover:from-cyan-400 hover:to-emerald-400 text-white px-10 py-5 rounded-2xl font-bold text-lg transform hover:-translate-y-2 transition-all duration-300 shadow-2xl hover:shadow-3xl">
                    <span class="relative z-10 flex items-center justify-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Get Free Consultation
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="#portfolio" class="group relative overflow-hidden border-2 border-white/30 hover:border-white text-white hover:bg-white hover:text-slate-900 px-10 py-5 rounded-2xl font-bold text-lg transform hover:-translate-y-2 transition-all duration-300">
                    <span class="flex items-center justify-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        View Our Portfolio
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<x-footer/>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Blog Filter Functionality
    const filterButtons = document.querySelectorAll('.blog-filter');
    const blogItems = document.querySelectorAll('.blog-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            
            blogItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeInUp 0.6s ease-out';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Load More Functionality
    const loadMoreBtn = document.getElementById('load-more-btn');
    let visibleArticles = 6;

    loadMoreBtn.addEventListener('click', () => {
        const hiddenArticles = document.querySelectorAll('.blog-item:nth-child(n+' + (visibleArticles + 1) + ')');
        
        for (let i = 0; i < 6 && i < hiddenArticles.length; i++) {
            hiddenArticles[i].style.display = 'block';
            hiddenArticles[i].style.animation = 'fadeInUp 0.8s ease-out';
        }
        
        visibleArticles += 6;
        
        if (visibleArticles >= blogItems.length) {
            loadMoreBtn.style.display = 'none';
        }
    });

    // Newsletter Form Functionality
    const newsletterForm = document.querySelector('form');
    const emailInput = document.querySelector('input[type="email"]');
    
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = emailInput.value.trim();
        
        if (email && isValidEmail(email)) {
            // Show success message
            showNotification('Thank you for subscribing! Check your email for confirmation.', 'success');
            emailInput.value = '';
        } else {
            // Show error message
            showNotification('Please enter a valid email address.', 'error');
        }
    });

    // Email validation function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Notification function
    function showNotification(message, type) {
        // Remove existing notifications
        const existingNotification = document.querySelector('.notification');
        if (existingNotification) {
            existingNotification.remove();
        }

        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification fixed top-4 right-4 z-50 px-6 py-4 rounded-2xl font-bold text-white shadow-2xl transform transition-all duration-500 translate-x-full ${
            type === 'success' 
                ? 'bg-gradient-to-r from-emerald-500 to-green-500' 
                : 'bg-gradient-to-r from-red-500 to-pink-500'
        }`;
        notification.textContent = message;

        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);

        // Animate out and remove
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                notification.remove();
            }, 500);
        }, 4000);
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Enhanced CSS animations and styles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(-3deg); }
        }
        
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }
        
        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }
        
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }
        
        .blog-filter.active {
            transform: scale(1.05);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.25);
        }
        
        .blog-item:nth-child(n+7) {
            display: none;
        }
        
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }
        
        /* Custom scrollbar for better UX */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #06b6d4, #10b981);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #0891b2, #059669);
        }
        
        /* Enhanced hover effects */
        .blog-item:hover {
            transform: translateY(-16px) rotate(1deg);
        }
        
        .blog-item:hover .group-hover\\:translate-x-1 {
            transform: translateX(4px);
        }
        
        /* Newsletter input focus effect */
        input[type="email"]:focus {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
        
        /* Button hover animations */
        button:hover, a:hover {
            transform: translateY(-2px);
        }
        
        /* Notification animation */
        .notification {
            backdrop-filter: blur(10px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .blog-item {
                transform: none !important;
            }
            
            .blog-item:hover {
                transform: translateY(-8px) !important;
            }
        }
        
        /* Loading animation for images */
        .blog-item img {
            transition: opacity 0.3s ease;
        }
        
        .blog-item img[src=""] {
            opacity: 0;
        }
        
        /* Enhanced text selection */
        ::selection {
            background: rgba(6, 182, 212, 0.3);
            color: inherit;
        }
        
        ::-moz-selection {
            background: rgba(6, 182, 212, 0.3);
            color: inherit;
        }
        
        /* Smooth transitions for all interactive elements */
        * {
            transition-property: transform, opacity, box-shadow, background-color, border-color, color;
            transition-duration: 300ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Focus styles for accessibility */
        button:focus, a:focus, input:focus {
            outline: 2px solid #06b6d4;
            outline-offset: 2px;
        }
        
        /* Article hover effect enhancements */
        .blog-item:hover h3 {
            color: var(--hover-color, #059669);
        }
        
        .blog-item.construction:hover h3 {
            --hover-color: #059669;
        }
        
        .blog-item.design:hover h3 {
            --hover-color: #7c3aed;
        }
        
        .blog-item.interior:hover h3 {
            --hover-color: #ea580c;
        }
        
        .blog-item.tips:hover h3 {
            --hover-color: #e11d48;
        }
    `;
    document.head.appendChild(style);

    // Initialize AOS (Animate On Scroll) if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }

    // Lazy loading for images (if needed)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '50px'
    };

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.classList.remove('opacity-0');
                    imageObserver.unobserve(img);
                }
            }
        });
    }, observerOptions);

    // Observe all images with data-src attribute
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });

    // Search functionality (if search input exists)
    const searchInput = document.querySelector('#blog-search');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            blogItems.forEach(item => {
                const title = item.querySelector('h3').textContent.toLowerCase();
                const content = item.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || content.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }

    // Reading progress indicator
    function updateReadingProgress() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        
        let progressBar = document.querySelector('#reading-progress');
        if (!progressBar) {
            progressBar = document.createElement('div');
            progressBar.id = 'reading-progress';
            progressBar.className = 'fixed top-0 left-0 z-50 h-1 bg-gradient-to-r from-cyan-500 to-emerald-500 transition-all duration-300';
            document.body.appendChild(progressBar);
        }
        
        progressBar.style.width = scrolled + '%';
    }

    window.addEventListener('scroll', updateReadingProgress);

    // Back to top button
    const backToTopBtn = document.createElement('button');
    backToTopBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    `;
    backToTopBtn.className = 'fixed bottom-8 right-8 z-50 w-12 h-12 bg-gradient-to-r from-cyan-500 to-emerald-500 text-white rounded-full shadow-2xl opacity-0 invisible transform transition-all duration-300 hover:scale-110 hover:shadow-3xl';
    backToTopBtn.onclick = () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
    document.body.appendChild(backToTopBtn);

    // Show/hide back to top button
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('opacity-0', 'invisible');
            backToTopBtn.classList.add('opacity-100', 'visible');
        } else {
            backToTopBtn.classList.add('opacity-0', 'invisible');
            backToTopBtn.classList.remove('opacity-100', 'visible');
        }
    });

    // Print functionality
    function printArticle(articleElement) {
        const printWindow = window.open('', '_blank');
        const articleContent = articleElement.outerHTML;
        
        printWindow.document.write(`
            <!DOCTYPE html>
            <html>
            <head>
                <title>TSI Blog Article</title>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .no-print { display: none; }
                    img { max-width: 100%; height: auto; }
                </style>
            </head>
            <body>
                ${articleContent}
            </body>
            </html>
        `);
        
        printWindow.document.close();
        printWindow.print();
        printWindow.close();
    }

    // Social sharing functionality
    function shareArticle(title, url) {
        if (navigator.share) {
            navigator.share({
                title: title,
                url: url
            });
        } else {
            // Fallback for browsers that don't support Web Share API
            const shareUrl = `https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`;
            window.open(shareUrl, '_blank', 'width=600,height=400');
        }
    }

    // Add event listeners for print and share buttons if they exist
    document.querySelectorAll('.print-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const article = e.target.closest('.blog-item');
            printArticle(article);
        });
    });

    document.querySelectorAll('.share-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const article = e.target.closest('.blog-item');
            const title = article.querySelector('h3').textContent;
            shareArticle(title, window.location.href);
        });
    });
});
</script>

@endsection