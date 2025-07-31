@extends('front.layouts.app')

@section('content')
<!-- Enhanced Hero Section with Modern Design -->
<div id="header" class="relative overflow-hidden min-h-screen flex items-center">
    <!-- Dynamic Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900"></div>
    
    <!-- Modern Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Floating Geometric Shapes -->
        <div class="absolute top-20 left-20 w-72 h-72 bg-gradient-to-br from-cyan-400/20 to-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-gradient-to-br from-emerald-400/15 to-teal-500/15 rounded-full blur-3xl animate-pulse delay-500"></div>
        
        <!-- Modern Mesh Patterns -->
        <div class="absolute top-0 left-0 w-full h-full opacity-30">
            <svg class="w-full h-full" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
    </div>
    
    <x-nav/>
    
    <div class="container max-w-7xl mx-auto relative pt-10 z-10 px-4 sm:px-6 lg:px-8">
        <section class="relative py-12 sm:py-16 lg:py-20">
            <div class="max-w-6xl mx-auto text-center">
                <!-- Enhanced Title with Better Typography -->
                <div class="animate-fade-in-up">
                    <div class="mb-6">
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 backdrop-blur-sm border border-cyan-500/20 rounded-full text-cyan-300 text-sm font-semibold tracking-wide">
                            PROFESSIONAL SERVICES
                        </span>
                    </div>
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                        <span class="text-white">Our </span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 animate-gradient-x">Services</span>
                    </h1>
                    <p class="text-xl sm:text-2xl md:text-3xl mb-8 text-gray-300 max-w-4xl mx-auto leading-relaxed font-light">
                        Comprehensive construction and infrastructure solutions with cutting-edge technology
                    </p>
                </div>
                
                <!-- Modern Service Tags with Glass Effect -->
                <div class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-6 animate-fade-in-up delay-300 mb-12">
                    <span class="service-tag glass-morphism bg-gradient-to-r from-cyan-500/20 to-blue-600/20 backdrop-blur-lg border border-cyan-500/30 hover:scale-110 hover:from-cyan-400/30 hover:to-blue-500/30 transform transition-all duration-500 px-6 py-3 rounded-2xl text-sm sm:text-base text-white font-bold shadow-2xl hover:shadow-cyan-500/25 cursor-pointer">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Infrastructure
                        </span>
                    </span>
                    <span class="service-tag glass-morphism bg-gradient-to-r from-emerald-500/20 to-green-600/20 backdrop-blur-lg border border-emerald-500/30 hover:scale-110 hover:from-emerald-400/30 hover:to-green-500/30 transform transition-all duration-500 px-6 py-3 rounded-2xl text-sm sm:text-base text-white font-bold shadow-2xl hover:shadow-emerald-500/25 cursor-pointer">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11"></path>
                            </svg>
                            Construction
                        </span>
                    </span>
                    <span class="service-tag glass-morphism bg-gradient-to-r from-purple-500/20 to-indigo-600/20 backdrop-blur-lg border border-purple-500/30 hover:scale-110 hover:from-purple-400/30 hover:to-indigo-500/30 transform transition-all duration-500 px-6 py-3 rounded-2xl text-sm sm:text-base text-white font-bold shadow-2xl hover:shadow-purple-500/25 cursor-pointer">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h16m-16 0V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4z"></path>
                            </svg>
                            Design
                        </span>
                    </span>
                    <span class="service-tag glass-morphism bg-gradient-to-r from-orange-500/20 to-red-600/20 backdrop-blur-lg border border-orange-500/30 hover:scale-110 hover:from-orange-400/30 hover:to-red-500/30 transform transition-all duration-500 px-6 py-3 rounded-2xl text-sm sm:text-base text-white font-bold shadow-2xl hover:shadow-orange-500/25 cursor-pointer">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            Consulting
                        </span>
                    </span>
                </div>

                <!-- Modern Scroll Indicator -->
                <div class="mt-16 animate-bounce">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-12 border-2 border-gray-400 rounded-full flex justify-center">
                            <div class="w-1 h-3 bg-gray-400 rounded-full mt-2 animate-pulse"></div>
                        </div>
                        <span class="text-gray-400 text-sm mt-2">Scroll to explore</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Enhanced Services Overview with Modern Cards -->
<section class="py-16 sm:py-20 lg:py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(0,0,0,0.15) 1px, transparent 0); background-size: 20px 20px;"></div>
    </div>
    
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16 lg:mb-20">
            <div class="mb-4">
                <span class="inline-block px-4 py-2 bg-blue-100 rounded-full text-blue-600 text-sm font-semibold tracking-wide">
                    WHAT WE OFFER
                </span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-6">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Expertise</span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                PT. Tridjasa Sigma Indonesia provides comprehensive solutions in construction, infrastructure, and design services with innovative approaches
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 lg:gap-10">
            <!-- Civil Construction - Enhanced Design -->
            <div class="service-card group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 border border-gray-100">
                <!-- Gradient Border Animation -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
                
                <div class="relative p-8 sm:p-10">
                    <!-- Modern Icon Design -->
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <!-- Floating Dots -->
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-blue-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">Civil Construction</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8 leading-relaxed">Complete building construction services including residential, commercial, and institutional projects with modern techniques.</p>
                    
                    <!-- Enhanced Feature List -->
                    <ul class="space-y-4">
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Residential Housing</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Commercial Buildings</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Renovation Projects</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Structural Construction</span>
                        </li>
                    </ul>

                    <!-- Call to Action Button -->
                    <div class="mt-8 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-blue-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Infrastructure - Enhanced Design -->
            <div class="service-card group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 border border-gray-100">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 via-green-600 to-teal-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
                
                <div class="relative p-8 sm:p-10">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-emerald-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors duration-300">Infrastructure</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8 leading-relaxed">Essential infrastructure development including roads, bridges, and utilities with sustainable approaches.</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Road Construction</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Bridge Development</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Utility Infrastructure</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Site Preparation</span>
                        </li>
                    </ul>

                    <div class="mt-8 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="w-full bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-emerald-600 hover:to-emerald-700 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Design Services - Enhanced Design -->
            <div class="service-card group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 border border-gray-100">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
                
                <div class="relative p-8 sm:p-10">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h16m-16 0V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-purple-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors duration-300">Design Services</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8 leading-relaxed">Comprehensive design solutions for architectural, interior, and landscape projects with creative innovation.</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Architectural Design</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Interior Design</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Landscape Design</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">MEP Design</span>
                        </li>
                    </ul>

                    <div class="mt-8 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="w-full bg-gradient-to-r from-purple-500 to-purple-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-purple-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Engineering Consulting -->
            <div class="service-card group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 border border-gray-100">
                <div class="absolute inset-0 bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
                <div class="relative p-8 sm:p-10">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-700 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-orange-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors duration-300">Engineering Consulting</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8 leading-relaxed">Professional engineering consulting services for project planning, feasibility studies, and technical solutions.</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Feasibility Studies</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Project Management</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Technical Analysis</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Quality Assurance</span>
                        </li>
                    </ul>

                    <div class="mt-8 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project Management -->
            <div class="service-card group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 border border-gray-100">
                <div class="absolute inset-0 bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
                
                <div class="relative p-8 sm:p-10">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-teal-500 to-teal-700 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-teal-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Project Management</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8 leading-relaxed">Comprehensive project management services ensuring timely delivery and quality control throughout project lifecycle.</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-teal-500 to-teal-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Schedule Planning</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-teal-500 to-teal-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Resource Management</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-teal-500 to-teal-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Risk Management</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-teal-500 to-teal-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Progress Monitoring</span>
                        </li>
                    </ul>

                    <div class="mt-8 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="w-full bg-gradient-to-r from-teal-500 to-teal-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-teal-600 hover:to-teal-700 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>

            <!-- Environmental Services -->
            <div class="service-card group relative bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-4 border border-gray-100">
                <div class="absolute inset-0 bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
                
                <div class="relative p-8 sm:p-10">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-green-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">Environmental Services</h3>
                    <p class="text-base sm:text-lg text-gray-600 mb-8 leading-relaxed">Sustainable environmental solutions and assessments to ensure eco-friendly construction practices and compliance.</p>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Environmental Impact Assessment</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Sustainability Planning</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Green Building Certification</span>
                        </li>
                        <li class="flex items-center group/item">
                            <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-300">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Waste Management</span>
                        </li>
                    </ul>

                    <div class="mt-8 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <button class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 transform hover:scale-105">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Process Section -->
<section class="py-16 sm:py-20 lg:py-24 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full opacity-20">
            <div class="absolute top-20 left-20 w-72 h-72 bg-gradient-to-br from-cyan-400/30 to-blue-500/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-gradient-to-br from-purple-500/30 to-pink-500/30 rounded-full blur-3xl"></div>
        </div>
    </div>
    
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16 lg:mb-20">
            <div class="mb-4">
                <span class="inline-block px-4 py-2 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 backdrop-blur-sm border border-cyan-500/20 rounded-full text-cyan-300 text-sm font-semibold tracking-wide">
                    OUR APPROACH
                </span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6">
                How We <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Work</span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Our proven methodology ensures successful project delivery through systematic planning and execution
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
            <!-- Step 1 -->
            <div class="process-step group relative">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-2xl flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">1</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-cyan-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Planning & Analysis</h3>
                    <p class="text-gray-300 leading-relaxed">Comprehensive project assessment and strategic planning phase</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="process-step group relative">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">2</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Design & Engineering</h3>
                    <p class="text-gray-300 leading-relaxed">Detailed design development and engineering solutions</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="process-step group relative">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">3</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Construction</h3>
                    <p class="text-gray-300 leading-relaxed">Professional execution with quality control and monitoring</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="process-step group relative">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-2xl flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-500">
                            <span class="text-2xl font-black text-white">4</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-emerald-400 rounded-full animate-pulse"></div>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Delivery & Support</h3>
                    <p class="text-gray-300 leading-relaxed">Project handover with ongoing maintenance and support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced CTA Section -->
<section class="py-16 sm:py-20 lg:py-24 bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-700 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full opacity-30">
            <div class="absolute top-10 left-10 w-64 h-64 bg-gradient-to-br from-white/20 to-transparent rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-gradient-to-br from-cyan-400/30 to-transparent rounded-full blur-3xl"></div>
        </div>
    </div>
    
    <div class="container max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <div class="mb-8">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-6">
                Ready to Start Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-white">Project?</span>
            </h2>
            <p class="text-lg sm:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                Let's discuss your construction and infrastructure needs. Our expert team is ready to deliver exceptional results for your next project.
            </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <button class="group bg-white text-blue-600 font-bold py-4 px-8 rounded-2xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                <span class="flex items-center">
                    Get Free Consultation
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </span>
            </button>
            
            <button class="group bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-300 transform hover:scale-105">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Contact Us
                </span>
            </button>
        </div>
    </div>
</section>

<x-footer/>

<!-- Add custom styles for enhanced animations -->
<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes gradient-x {
        0%, 100% {
            background-size: 200% 200%;
            background-position: left center;
        }
        50% {
            background-size: 200% 200%;
            background-position: right center;
        }
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out;
    }
    
    .animate-gradient-x {
        animation: gradient-x 3s ease infinite;
    }
    
    .delay-300 {
        animation-delay: 0.3s;
    }
    
    .glass-morphism {
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
    }
    
    .service-card {
        will-change: transform;
    }
    
    .service-tag:hover {
        box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.25);
    }
</style>

@endsection