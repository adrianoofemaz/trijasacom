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
                            Portfolio Terpilih
                        </span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 text-white leading-tight">
                        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-emerald-400 to-purple-400 animate-gradient">Portfolio</span>
                    </h1>
                    <p class="text-xl sm:text-2xl md:text-3xl mb-8 text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                        Showcasing excellence in construction, infrastructure, and design projects across 
                        <span class="text-emerald-400 font-semibold">Indonesia</span>
                    </p>
                </div>
                
                <!-- Enhanced Portfolio Filter Tags -->
                <div class="flex flex-wrap justify-center gap-3 md:gap-4 animate-fade-in-up delay-300 mb-12">
                    <button class="portfolio-filter active group relative overflow-hidden bg-gradient-to-r from-cyan-500 to-emerald-500 hover:from-cyan-400 hover:to-emerald-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="all">
                        <span class="relative z-10">All Projects</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="portfolio-filter group relative overflow-hidden bg-gradient-to-r from-emerald-600 to-teal-500 hover:from-emerald-500 hover:to-teal-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="civil">
                        <span class="relative z-10">Civil Construction</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="portfolio-filter group relative overflow-hidden bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-500 hover:to-pink-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="infrastructure">
                        <span class="relative z-10">Infrastructure</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="portfolio-filter group relative overflow-hidden bg-gradient-to-r from-orange-600 to-red-500 hover:from-orange-500 hover:to-red-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="design">
                        <span class="relative z-10">Design Work</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                    <button class="portfolio-filter group relative overflow-hidden bg-gradient-to-r from-rose-600 to-pink-500 hover:from-rose-500 hover:to-pink-400 transform hover:scale-105 transition-all duration-300 px-6 sm:px-8 py-3 sm:py-4 rounded-2xl text-sm sm:text-base text-white font-bold shadow-xl hover:shadow-2xl cursor-pointer" data-filter="interior">
                        <span class="relative z-10">Interior Work</span>
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

<!-- Enhanced Portfolio Gallery -->
<section class="py-16 lg:py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover our most innovative and impactful construction and design projects</p>
        </div>
        
        <!-- Portfolio Grid -->
        <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            
            <!-- Project 1: Housing Renovation -->
            <div class="portfolio-item civil group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden">
                    <div class="w-full h-72 bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center relative">
                        <!-- Enhanced Project Image Placeholder -->
                        <div class="w-full h-full bg-gradient-to-br from-emerald-100 to-cyan-100 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/20 to-cyan-500/20"></div>
                            <svg class="w-20 h-20 text-emerald-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <!-- Decorative Elements -->
                            <div class="absolute top-4 right-4 w-8 h-8 bg-emerald-400/30 rounded-full animate-pulse"></div>
                            <div class="absolute bottom-6 left-6 w-6 h-6 bg-cyan-400/30 rounded-full animate-pulse delay-300"></div>
                        </div>
                        
                        <!-- Enhanced Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        <!-- Enhanced View Button -->
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-lg border border-white/20 text-white px-8 py-4 rounded-2xl font-bold opacity-0 group-hover:opacity-100 transition-all duration-500 hover:bg-white/20 hover:scale-110 view-project-btn" 
                                data-project="renovation-housing">
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                View Details
                            </span>
                        </button>
                        
                        <!-- Enhanced Category Badge -->
                        <div class="absolute top-6 left-6 bg-gradient-to-r from-emerald-500 to-cyan-500 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            <span class="flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Civil Construction
                            </span>
                        </div>
                        
                        <!-- Enhanced Cost Badge -->
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm text-gray-800 px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            IDR 880M
                        </div>
                    </div>
                    
                    <!-- Enhanced Card Content -->
                    <div class="p-8">
                        <div class="flex items-center mb-3">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">Housing Renovation</h3>
                        </div>
                        <p class="text-gray-600 text-base mb-6 leading-relaxed">Complete renovation including facade and interior design at Pejaten Barat, South Jakarta</p>
                        
                        <!-- Enhanced Project Info -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Pejaten Barat, Jakarta Selatan
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Oct 2022 - Jun 2023
                            </div>
                        </div>
                        
                        <!-- Enhanced Progress Bar -->
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 font-medium">Project Status</span>
                                <span class="text-emerald-600 font-bold">Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                <div class="bg-gradient-to-r from-emerald-500 to-cyan-500 h-3 rounded-full shadow-sm animate-progress" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2: Varana Housing -->
            <div class="portfolio-item civil group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden">
                    <div class="w-full h-72 bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-emerald-500/20"></div>
                            <svg class="w-20 h-20 text-green-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            </svg>
                            <div class="absolute top-4 right-4 w-8 h-8 bg-green-400/30 rounded-full animate-pulse"></div>
                            <div class="absolute bottom-6 left-6 w-6 h-6 bg-emerald-400/30 rounded-full animate-pulse delay-300"></div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-lg border border-white/20 text-white px-8 py-4 rounded-2xl font-bold opacity-0 group-hover:opacity-100 transition-all duration-500 hover:bg-white/20 hover:scale-110 view-project-btn" 
                                data-project="varana-housing">
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                View Details
                            </span>
                        </button>
                        <div class="absolute top-6 left-6 bg-gradient-to-r from-green-500 to-emerald-500 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            <span class="flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Civil Construction
                            </span>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm text-gray-800 px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            IDR 1.8B
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center mb-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">Varana Housing Development</h3>
                        </div>
                        <p class="text-gray-600 text-base mb-6 leading-relaxed">Complete house construction with interior finishing in premium housing complex</p>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Varana Housing
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Oct 2023 - May 2024
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 font-medium">Project Status</span>
                                <span class="text-green-600 font-bold">Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                <div class="bg-gradient-to-r from-green-500 to-emerald-500 h-3 rounded-full shadow-sm animate-progress" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3: Infrastructure -->
            <div class="portfolio-item infrastructure group bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 hover:rotate-1" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden">
                    <div class="w-full h-72 bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20"></div>
                            <svg class="w-20 h-20 text-purple-600 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                            <div class="absolute top-4 right-4 w-8 h-8 bg-purple-400/30 rounded-full animate-pulse"></div>
                            <div class="absolute bottom-6 left-6 w-6 h-6 bg-pink-400/30 rounded-full animate-pulse delay-300"></div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-lg border border-white/20 text-white px-8 py-4 rounded-2xl font-bold opacity-0 group-hover:opacity-100 transition-all duration-500 hover:bg-white/20 hover:scale-110 view-project-btn" 
                                data-project="varana-guardrail">
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                View Details
                            </span>
                        </button>
                        <div class="absolute top-6 left-6 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            <span class="flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                Infrastructure
                            </span>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm text-gray-800 px-4 py-2 rounded-full text-xs font-bold shadow-lg">
                            IDR 45M
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center mb-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-purple-600 transition-colors">Varana Guardrail Installation</h3>
                        </div>
                        <p class="text-gray-600 text-base mb-6 leading-relaxed">Professional guardrail installation for residential safety and aesthetics</p>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Varana Housing
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Jan 2024 - Feb 2024
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 font-medium">Project Status</span>
                                <span class="text-purple-600 font-bold">Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                <div class="bg-gradient-to-r from-purple-500 to-pink-500 h-3 rounded-full shadow-sm animate-progress" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more projects with similar enhanced styling -->
        </div>

        <!-- Enhanced Load More Button -->
        <div class="text-center mt-16" data-aos="fade-up">
            <button id="load-more-btn" class="group relative overflow-hidden bg-gradient-to-r from-slate-900 to-blue-900 hover:from-slate-800 hover:to-blue-800 text-white px-12 py-5 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-3xl transform hover:-translate-y-2 transition-all duration-500">
                <span class="relative z-10 flex items-center">
                    <svg class="w-6 h-6 mr-3 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Load More Projects
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </button>
        </div>
    </div>
</section>

<!-- Enhanced Project Details Modal -->
<div id="project-modal" class="fixed inset-0 bg-black/60 backdrop-blur-md z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-3xl max-w-6xl w-full max-h-[90vh] overflow-hidden shadow-2xl transform transition-all duration-300">
            <!-- Modal Header -->
            <div class="p-8 border-b border-gray-100 bg-gradient-to-r from-slate-50 to-gray-50">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 id="modal-title" class="text-3xl font-bold text-gray-900 mb-2"></h2>
                        <p id="modal-subtitle" class="text-gray-600"></p>
                    </div>
                    <button id="close-modal" class="text-gray-400 hover:text-gray-600 text-3xl w-12 h-12 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors duration-200">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Modal Content -->
            <div class="overflow-y-auto max-h-[calc(90vh-120px)]">
                <!-- Image Gallery Section -->
                <div class="p-8 bg-gray-50">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Project Gallery</h3>
                    
                    <!-- Main Image Display -->
                    <div class="mb-6">
                        <div id="main-image-container" class="relative h-96 rounded-2xl overflow-hidden shadow-lg">
                            <img id="main-image" src="" alt="" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            
                            <!-- Navigation Arrows -->
                            <button id="prev-image" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 backdrop-blur-sm hover:bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-200 hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button id="next-image" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 backdrop-blur-sm hover:bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-200 hover:scale-110">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                            
                            <!-- Image Counter -->
                            <div class="absolute bottom-4 right-4 bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm">
                                <span id="current-image-index">1</span> / <span id="total-images">5</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Thumbnail Gallery -->
                    <div class="relative">
                        <div id="thumbnail-container" class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
                            <!-- Thumbnails will be generated dynamically -->
                        </div>
                        
                        <!-- Thumbnail Navigation -->
                        <button id="scroll-thumbs-left" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white shadow-lg hover:shadow-xl w-8 h-8 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 z-10">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="scroll-thumbs-right" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white shadow-lg hover:shadow-xl w-8 h-8 rounded-full flex items-center justify-center transition-all duration-200 hover:scale-110 z-10">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Project Details Section -->
                <div class="p-8">
                    <div id="modal-content">
                        <!-- Content will be loaded dynamically -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        View More Projects
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Statistics Section -->
<section class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Achievements</h2>
            <p class="text-xl text-gray-600">Numbers that speak for our excellence</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="stat-item text-center group" data-aos="fade-up">
                <div class="bg-gradient-to-br from-cyan-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-black text-gray-900 mb-2" data-count="50">0</div>
                    <div class="text-gray-600 font-medium">Completed Projects</div>
                </div>
            </div>
            
            <div class="stat-item text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-black text-gray-900 mb-2" data-count="98">0</div>
                    <div class="text-gray-600 font-medium">Client Satisfaction %</div>
                </div>
            </div>
            
            <div class="stat-item text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-black text-gray-900 mb-2" data-count="8">0</div>
                    <div class="text-gray-600 font-medium">Years Experience</div>
                </div>
            </div>
            
            <div class="stat-item text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-black text-gray-900 mb-2" data-count="15">0</div>
                    <div class="text-gray-600 font-medium">Award Winning</div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer/>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio Filter Functionality
    const filterButtons = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeInUp 0.6s ease-out';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Enhanced Project Modal Functionality
    const modal = document.getElementById('project-modal');
    const modalTitle = document.getElementById('modal-title');
    const modalSubtitle = document.getElementById('modal-subtitle');
    const modalContent = document.getElementById('modal-content');
    const closeModal = document.getElementById('close-modal');
    const viewProjectBtns = document.querySelectorAll('.view-project-btn');

    // Image Gallery Variables
    const mainImage = document.getElementById('main-image');
    const thumbnailContainer = document.getElementById('thumbnail-container');
    const currentImageIndex = document.getElementById('current-image-index');
    const totalImages = document.getElementById('total-images');
    const prevImageBtn = document.getElementById('prev-image');
    const nextImageBtn = document.getElementById('next-image');
    const scrollThumbsLeft = document.getElementById('scroll-thumbs-left');
    const scrollThumbsRight = document.getElementById('scroll-thumbs-right');
    
    let currentImageIdx = 0;
    let projectImages = [];

    // Sample project data with images
    const projectDetails = {
        'renovation-housing': {
            title: 'Housing Renovation',
            subtitle: 'Complete renovation including facade and interior design',
            images: [
                'https://images.unsplash.com/photo-1558618047-b6a4b0d2e29c?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&h=600&fit=crop'
            ],
            content: `
                <div class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gradient-to-br from-emerald-50 to-cyan-50 p-6 rounded-2xl">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div>
                                Project Overview
                            </h3>
                            <p class="text-gray-700 leading-relaxed">Complete renovation including facade and interior design at Pejaten Barat, South Jakarta. This project involved structural improvements, modern interior design, and enhanced building systems with sustainable materials.</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-purple-50 p-6 rounded-2xl">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                Project Details
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Budget:</span>
                                    <span class="text-gray-900 font-bold">IDR 880M</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Duration:</span>
                                    <span class="text-gray-900 font-bold">8 Months</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Area:</span>
                                    <span class="text-gray-900 font-bold">450 sqm</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Status:</span>
                                    <span class="text-emerald-600 font-bold">Completed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <div class="w-3 h-3 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full mr-3"></div>
                            Key Features & Achievements
                        </h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Facade Renovation</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Modern exterior design with energy-efficient materials and contemporary architectural elements</p>
                            </div>
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Interior Design</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Contemporary living spaces with optimal functionality and premium finishing materials</p>
                            </div>
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">MEP Systems</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Complete mechanical, electrical, and plumbing upgrades with smart home integration</p>
                            </div>
                        </div>
                    </div>
                </div>
            `
        },
        'varana-housing': {
            title: 'Varana Housing Development',
            subtitle: 'Premium housing complex with modern architecture',
            images: [
                'https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=600&fit=crop'
            ],
            content: `
                <div class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-2xl">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                Project Overview
                            </h3>
                            <p class="text-gray-700 leading-relaxed">Complete house construction with interior finishing in premium housing complex. This project features modern architecture with sustainable building practices and smart home integration.</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                Project Details
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Budget:</span>
                                    <span class="text-gray-900 font-bold">IDR 1.8B</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Duration:</span>
                                    <span class="text-gray-900 font-bold">7 Months</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Area:</span>
                                    <span class="text-gray-900 font-bold">600 sqm</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Status:</span>
                                    <span class="text-green-600 font-bold">Completed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <div class="w-3 h-3 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full mr-3"></div>
                            Key Features & Achievements
                        </h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Smart Home Integration</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Advanced home automation and security systems with IoT connectivity</p>
                            </div>
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Eco-Friendly Design</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Sustainable materials and energy-efficient systems for environmental sustainability</p>
                            </div>
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Premium Finishes</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">High-quality materials and luxury interior elements throughout the property</p>
                            </div>
                        </div>
                    </div>
                </div>
            `
        },
        'varana-guardrail': {
            title: 'Varana Guardrail Installation',
            subtitle: 'Professional safety infrastructure installation',
            images: [
                'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1558618047-b6a4b0d2e29c?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&h=600&fit=crop',
                'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&h=600&fit=crop'
            ],
            content: `
                <div class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-6 rounded-2xl">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                Project Overview
                            </h3>
                            <p class="text-gray-700 leading-relaxed">Professional guardrail installation for residential safety and aesthetics. This infrastructure project focused on providing maximum safety while maintaining visual appeal.</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-6 rounded-2xl">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                Project Details
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Budget:</span>
                                    <span class="text-gray-900 font-bold">IDR 45M</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Duration:</span>
                                    <span class="text-gray-900 font-bold">1 Month</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Length:</span>
                                    <span class="text-gray-900 font-bold">200 meters</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 font-medium">Status:</span>
                                    <span class="text-purple-600 font-bold">Completed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mr-3"></div>
                            Key Features & Specifications
                        </h3>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Safety Standards</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Meets international safety standards with premium grade materials and construction</p>
                            </div>
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Custom Design</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Tailored design to match architectural aesthetics while ensuring maximum functionality</p>
                            </div>
                            <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Quick Installation</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Efficient installation process with minimal disruption to daily activities</p>
                            </div>
                        </div>
                    </div>
                </div>
            `
        }
    };

    // Function to update image gallery
    function updateImageGallery(images) {
        projectImages = images;
        totalImages.textContent = images.length;
        currentImageIdx = 0;
        
        // Update main image
        mainImage.src = images[0];
        currentImageIndex.textContent = '1';
        
        // Generate thumbnails
        thumbnailContainer.innerHTML = '';
        images.forEach((image, index) => {
            const thumb = document.createElement('div');
            thumb.className = `relative w-20 h-16 rounded-lg overflow-hidden cursor-pointer border-2 transition-all duration-200 ${index === 0 ? 'border-blue-500 opacity-100' : 'border-gray-200 opacity-70 hover:opacity-100'}`;
            thumb.innerHTML = `
                <img src="${image}" alt="Thumbnail ${index + 1}" class="w-full h-full object-cover">
                <div class="absolute inset-0 ${index === 0 ? 'bg-blue-500/20' : 'bg-black/0 hover:bg-black/10'} transition-colors duration-200"></div>
            `;
            
            thumb.addEventListener('click', () => {
                currentImageIdx = index;
                updateMainImage();
                updateThumbnailSelection();
            });
            
            thumbnailContainer.appendChild(thumb);
        });
    }

    // Function to update main image
    function updateMainImage() {
        mainImage.src = projectImages[currentImageIdx];
        currentImageIndex.textContent = (currentImageIdx + 1).toString();
    }

    // Function to update thumbnail selection
    function updateThumbnailSelection() {
        const thumbs = thumbnailContainer.children;
        Array.from(thumbs).forEach((thumb, index) => {
            if (index === currentImageIdx) {
                thumb.className = thumb.className.replace('border-gray-200 opacity-70', 'border-blue-500 opacity-100');
                thumb.querySelector('div').className = 'absolute inset-0 bg-blue-500/20 transition-colors duration-200';
            } else {
                thumb.className = thumb.className.replace('border-blue-500 opacity-100', 'border-gray-200 opacity-70');
                thumb.querySelector('div').className = 'absolute inset-0 bg-black/0 hover:bg-black/10 transition-colors duration-200';
            }
        });
    }

    // Image navigation event listeners
    prevImageBtn.addEventListener('click', () => {
        currentImageIdx = (currentImageIdx - 1 + projectImages.length) % projectImages.length;
        updateMainImage();
        updateThumbnailSelection();
    });

    nextImageBtn.addEventListener('click', () => {
        currentImageIdx = (currentImageIdx + 1) % projectImages.length;
        updateMainImage();
        updateThumbnailSelection();
    });

    // Thumbnail scrolling
    scrollThumbsLeft.addEventListener('click', () => {
        thumbnailContainer.scrollBy({ left: -150, behavior: 'smooth' });
    });

    scrollThumbsRight.addEventListener('click', () => {
        thumbnailContainer.scrollBy({ left: 150, behavior: 'smooth' });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('hidden')) {
            if (e.key === 'ArrowLeft') {
                prevImageBtn.click();
            } else if (e.key === 'ArrowRight') {
                nextImageBtn.click();
            } else if (e.key === 'Escape') {
                closeModal.click();
            }
        }
    });

    viewProjectBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const projectId = btn.getAttribute('data-project');
            const project = projectDetails[projectId];
            
            if (project) {
                modalTitle.textContent = project.title;
                modalSubtitle.textContent = project.subtitle;
                modalContent.innerHTML = project.content;
                updateImageGallery(project.images);
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    });

    // Enhanced Counter Animation
    const counters = document.querySelectorAll('[data-count]');
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const current = parseInt(counter.innerText);
            const increment = Math.ceil(target / 60);

            if (current < target) {
                counter.innerText = Math.min(current + increment, target);
                setTimeout(() => animateCounters(), 50);
            }
        });
    };

    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-item').forEach(item => {
        observer.observe(item);
    });

    // Load More Functionality
    const loadMoreBtn = document.getElementById('load-more-btn');
    let visibleProjects = 9;

    loadMoreBtn.addEventListener('click', () => {
        const hiddenProjects = document.querySelectorAll('.portfolio-item:nth-child(n+' + (visibleProjects + 1) + ')');
        
        for (let i = 0; i < 6 && i < hiddenProjects.length; i++) {
            hiddenProjects[i].style.display = 'block';
            hiddenProjects[i].style.animation = 'fadeInUp 0.8s ease-out';
        }
        
        visibleProjects += 6;
        
        if (visibleProjects >= portfolioItems.length) {
            loadMoreBtn.style.display = 'none';
        }
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
        
        @keyframes progress {
            from { width: 0%; }
            to { width: var(--progress-width, 100%); }
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
        
        .animate-progress {
            animation: progress 2s ease-out;
        }
        
        .portfolio-filter.active {
            transform: scale(1.05);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.25);
        }
        
        .portfolio-item:nth-child(n+10) {
            display: none;
        }
        
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }
        
        /* Custom modal backdrop blur */
        .modal-backdrop {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Smooth transitions for all interactive elements */
        * {
            transition-property: transform, opacity, box-shadow, background-color, border-color;
            transition-duration: 300ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
    `;
    document.head.appendChild(style);
});
</script>

@endsection