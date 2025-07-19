@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-gradient-to-br from-[#F6F7FA] via-[#E8EBF0] to-[#F6F7FA] relative overflow-hidden min-h-screen flex items-center">
    <x-nav/>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-cp-dark-blue/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-green-500/5 rounded-full blur-3xl animate-pulse delay-500"></div>
        <!-- Floating Elements -->
        <div class="absolute top-20 left-20 w-4 h-4 bg-cp-dark-blue/20 rounded-full animate-bounce delay-300"></div>
        <div class="absolute top-40 right-32 w-6 h-6 bg-purple-500/20 rounded-full animate-bounce delay-700"></div>
        <div class="absolute bottom-32 left-40 w-3 h-3 bg-green-500/20 rounded-full animate-bounce delay-1000"></div>
    </div>
    
    <div class="container max-w-7xl mx-auto relative pt-10 z-10 px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Hero Section -->
        <section class="relative py-12 sm:py-16 lg:py-20">
            <div class="max-w-5xl mx-auto text-center">
                <div class="animate-fade-in-up">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 text-gray-800 leading-tight">
                        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-cp-dark-blue to-purple-600">Portfolio</span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl mb-6 sm:mb-8 text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Showcasing excellence in construction, infrastructure, and design projects across Indonesia
                    </p>
                </div>
                
                <!-- Portfolio Filter Tags -->
                <div class="flex flex-wrap justify-center gap-2 sm:gap-3 md:gap-4 animate-fade-in-up delay-300 mb-8">
                    <button class="portfolio-filter active bg-gradient-to-r from-cp-dark-blue to-cp-dark-blue/80 hover:scale-105 transform transition-all duration-300 px-4 sm:px-6 py-2 sm:py-3 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer" data-filter="all">
                        All Projects
                    </button>
                    <button class="portfolio-filter bg-gradient-to-r from-green-600 to-green-500 hover:scale-105 transform transition-all duration-300 px-4 sm:px-6 py-2 sm:py-3 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer" data-filter="civil">
                        Civil Construction
                    </button>
                    <button class="portfolio-filter bg-gradient-to-r from-purple-600 to-purple-500 hover:scale-105 transform transition-all duration-300 px-4 sm:px-6 py-2 sm:py-3 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer" data-filter="infrastructure">
                        Infrastructure
                    </button>
                    <button class="portfolio-filter bg-gradient-to-r from-orange-600 to-orange-500 hover:scale-105 transform transition-all duration-300 px-4 sm:px-6 py-2 sm:py-3 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer" data-filter="design">
                        Design Work
                    </button>
                    <button class="portfolio-filter bg-gradient-to-r from-red-600 to-red-500 hover:scale-105 transform transition-all duration-300 px-4 sm:px-6 py-2 sm:py-3 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer" data-filter="interior">
                        Interior Work
                    </button>
                </div>

                <!-- Scroll Indicator -->
                <div class="mt-8 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Enhanced Portfolio Gallery -->
<section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Portfolio Grid -->
        <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            
            <!-- Civil Construction Projects -->
            <!-- Project 1: Housing Renovation -->
            <div class="portfolio-item civil group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-cp-dark-blue/10 to-cp-dark-blue/5 flex items-center justify-center relative">
                        <!-- Project Image Placeholder -->
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- View Button -->
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="renovation-housing">
                            View Details
                        </button>
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4 bg-cp-dark-blue text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Civil Construction
                        </div>
                        <!-- Cost Badge -->
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 880M
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-cp-dark-blue transition-colors">Housing Renovation</h3>
                        <p class="text-gray-600 text-sm mb-4">Complete renovation including facade and interior design at Pejaten Barat, South Jakarta</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Pejaten Barat, Jakarta Selatan
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Oct 2022 - Jun 2023
                            </span>
                        </div>
                        <!-- Progress Bar -->
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-green-400 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2: Varana Housing -->
            <div class="portfolio-item civil group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-green-600/10 to-green-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="varana-housing">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Civil Construction
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 1.8B
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors">Varana Housing Development</h3>
                        <p class="text-gray-600 text-sm mb-4">Complete house construction with interior finishing in premium housing complex</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Varana Housing
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Oct 2023 - May 2024
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-green-500 to-green-400 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3: Duta Indah III -->
            <div class="portfolio-item civil group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-purple-600/10 to-purple-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="duta-indah">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Civil Construction
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 2.1B
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-purple-600 transition-colors">Duta Indah III Construction</h3>
                        <p class="text-gray-600 text-sm mb-4">Multi-floor residential with basement, swimming pool, and complete MEP system</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Pondok Indah, Jakarta Selatan
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                May 2024 - Feb 2025
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>In Progress</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-purple-500 to-purple-400 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4: Tirtayasa Residential -->
            <div class="portfolio-item civil group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-orange-600/10 to-orange-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="tirtayasa">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-orange-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Civil Construction
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 1.65B
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-orange-600 transition-colors">Tirtayasa Residential</h3>
                        <p class="text-gray-600 text-sm mb-4">Commercial building with cafe and live music venue featuring strong structural design</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Tirtayasa, Jakarta Selatan
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Jun 2024 - Nov 2024
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-orange-500 to-orange-400 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 5: Cibinong Religious Center -->
            <div class="portfolio-item civil group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-teal-600/10 to-teal-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="cibinong">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-teal-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Civil Construction
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 1.32B
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-teal-600 transition-colors">Religious Center & Boarding School</h3>
                        <p class="text-gray-600 text-sm mb-4">Modern religious facility and boarding school on 850 sqm land with complete infrastructure</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Cibinong, Bogor
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                May 2024 - Jan 2025
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>In Progress</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-teal-500 to-teal-400 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 6: Varana Guardrail -->
            <div class="portfolio-item infrastructure group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="600">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-blue-600/10 to-blue-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="varana-guardrail">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Infrastructure
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 45M
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">Varana Guardrail Installation</h3>
                        <p class="text-gray-600 text-sm mb-4">Professional guardrail installation for residential safety and aesthetics</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Varana Housing
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Jan 2024 - Feb 2024
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-400 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Design Projects -->
            <!-- Project 7: Residence Design -->
            <div class="portfolio-item design group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="700">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-purple-600/10 to-purple-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="residence-design">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Design Work
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 85M
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-purple-600 transition-colors">Modern Residence Design</h3>
                        <p class="text-gray-600 text-sm mb-4">Contemporary architectural design with sustainable and aesthetic approach</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Jakarta Selatan
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Mar 2024 - May 2024
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-purple-500 to-purple-400 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interior Projects -->
            <!-- Project 8: Luxury Interior -->
            <div class="portfolio-item interior group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="800">
                <div class="relative overflow-hidden">
                    <div class="w-full h-64 bg-gradient-to-br from-rose-600/10 to-rose-600/5 flex items-center justify-center relative">
                        <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm text-white px-6 py-3 rounded-full font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 hover:bg-white/30 view-project-btn" 
                                data-project="luxury-interior">
                            View Details
                        </button>
                        <div class="absolute top-4 left-4 bg-rose-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            Interior Work
                        </div>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-xs font-semibold">
                            IDR 320M
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-rose-600 transition-colors">Luxury Interior Design</h3>
                        <p class="text-gray-600 text-sm mb-4">Premium interior finishing with custom furniture and lighting design</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                </svg>
                                Kemang, Jakarta Selatan
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Sep 2024 - Dec 2024
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Project Status</span>
                                <span>Completed</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-rose-500 to-rose-400 h-2 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12" data-aos="fade-up">
            <button id="load-more-btn" class="bg-gradient-to-r from-cp-dark-blue to-purple-600 hover:from-cp-dark-blue/90 hover:to-purple-600/90 text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                <span class="flex items-center">
                    Load More Projects
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</section>

<!-- Project Details Modal -->
<div id="project-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h2 id="modal-title" class="text-2xl font-bold text-gray-800"></h2>
                    <button id="close-modal" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
            </div>
            <div class="p-6">
                <div id="modal-content">
                    <!-- Content will be loaded dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<section class="py-16 bg-gradient-to-r from-cp-dark-blue to-purple-600 text-white">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Ready to Start Your Project?</h2>
        <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            Let us bring your construction and design vision to life with our expertise and commitment to excellence.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="#contact" class="bg-white text-cp-dark-blue px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transform hover:-translate-y-1 transition-all duration-300 shadow-lg">
                Get Free Consultation
            </a>
            <a href="#portfolio" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-cp-dark-blue transform hover:-translate-y-1 transition-all duration-300">
                View More Projects
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-white">
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="stat-item" data-aos="fade-up">
                <div class="text-4xl font-bold text-cp-dark-blue mb-2" data-count="50">0</div>
                <div class="text-gray-600">Completed Projects</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl font-bold text-cp-dark-blue mb-2" data-count="98">0</div>
                <div class="text-gray-600">Client Satisfaction %</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl font-bold text-cp-dark-blue mb-2" data-count="8">0</div>
                <div class="text-gray-600">Years Experience</div>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl font-bold text-cp-dark-blue mb-2" data-count="15">0</div>
                <div class="text-gray-600">Award Winning</div>
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
                    item.style.animation = 'fadeInUp 0.5s ease-in-out';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Project Modal Functionality
    const modal = document.getElementById('project-modal');
    const modalTitle = document.getElementById('modal-title');
    const modalContent = document.getElementById('modal-content');
    const closeModal = document.getElementById('close-modal');
    const viewProjectBtns = document.querySelectorAll('.view-project-btn');

    // Project details data
    const projectDetails = {
        'renovation-housing': {
            title: 'Housing Renovation',
            content: `
                <div class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-3">Project Overview</h3>
                            <p class="text-gray-600">Complete renovation including facade and interior design at Pejaten Barat, South Jakarta. This project involved structural improvements, modern interior design, and enhanced building systems.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-3">Project Details</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li><strong>Budget:</strong> IDR 880M</li>
                                <li><strong>Duration:</strong> Oct 2022 - Jun 2023</li>
                                <li><strong>Area:</strong> 450 sqm</li>
                                <li><strong>Status:</strong> Completed</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3">Key Features</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium">Facade Renovation</h4>
                                <p class="text-sm text-gray-600">Modern exterior design with energy-efficient materials</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium">Interior Design</h4>
                                <p class="text-sm text-gray-600">Contemporary living spaces with optimal functionality</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium">MEP Systems</h4>
                                <p class="text-sm text-gray-600">Complete mechanical, electrical, and plumbing upgrades</p>
                            </div>
                        </div>
                    </div>
                </div>
            `
        },
        'varana-housing': {
            title: 'Varana Housing Development',
            content: `
                <div class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-3">Project Overview</h3>
                            <p class="text-gray-600">Complete house construction with interior finishing in premium housing complex. This project features modern architecture with sustainable building practices.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-3">Project Details</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li><strong>Budget:</strong> IDR 1.8B</li>
                                <li><strong>Duration:</strong> Oct 2023 - May 2024</li>
                                <li><strong>Area:</strong> 600 sqm</li>
                                <li><strong>Status:</strong> Completed</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3">Key Features</h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium">Smart Home Integration</h4>
                                <p class="text-sm text-gray-600">Advanced home automation and security systems</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium">Eco-Friendly Design</h4>
                                <p class="text-sm text-gray-600">Sustainable materials and energy-efficient systems</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-medium">Premium Finishes</h4>
                                <p class="text-sm text-gray-600">High-quality materials and luxury interior elements</p>
                            </div>
                        </div>
                    </div>
                </div>
            `
        }
        // Add more project details as needed
    };

    viewProjectBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const projectId = btn.getAttribute('data-project');
            const project = projectDetails[projectId];
            
            if (project) {
                modalTitle.textContent = project.title;
                modalContent.innerHTML = project.content;
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

    // Counter Animation
    const counters = document.querySelectorAll('[data-count]');
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const count = parseInt(counter.innerText);
            const increment = target / 100;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(animateCounters, 20);
            } else {
                counter.innerText = target;
            }
        });
    };

    // Trigger counter animation when in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    });

    counters.forEach(counter => {
        observer.observe(counter.parentElement);
    });

    // Load More Functionality
    const loadMoreBtn = document.getElementById('load-more-btn');
    let visibleProjects = 8;

    loadMoreBtn.addEventListener('click', () => {
        const hiddenProjects = document.querySelectorAll('.portfolio-item:nth-child(n+' + (visibleProjects + 1) + ')');
        
        for (let i = 0; i < 4 && i < hiddenProjects.length; i++) {
            hiddenProjects[i].style.display = 'block';
            hiddenProjects[i].style.animation = 'fadeInUp 0.5s ease-in-out';
        }
        
        visibleProjects += 4;
        
        if (visibleProjects >= portfolioItems.length) {
            loadMoreBtn.style.display = 'none';
        }
    });

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .portfolio-filter.active {
            transform: scale(1.05);
        }
        
        .portfolio-item:nth-child(n+9) {
            display: none;
        }
    `;
    document.head.appendChild(style);
});
</script>

@endsection