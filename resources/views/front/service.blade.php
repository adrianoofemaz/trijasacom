@extends('front.layouts.app')

@section('content')
<div id="header" class="bg-gradient-to-br from-[#F6F7FA] via-[#E8EBF0] to-[#F6F7FA] relative overflow-hidden min-h-screen flex items-center">
    <x-nav/>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-cp-dark-blue/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-green-500/5 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>
    
    <div class="container max-w-7xl mx-auto relative pt-10 z-10 px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Hero Section -->
        <section class="relative py-12 sm:py-16 lg:py-20">
            <div class="max-w-5xl mx-auto text-center">
                <div class="animate-fade-in-up">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 text-gray-800 leading-tight">
                        Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-cp-dark-blue to-purple-600">Services</span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl mb-6 sm:mb-8 text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Comprehensive construction and infrastructure solutions for your projects
                    </p>
                </div>
                
                <div class="flex flex-wrap justify-center gap-2 sm:gap-3 md:gap-4 animate-fade-in-up delay-300">
                    <span class="service-tag bg-gradient-to-r from-cp-dark-blue to-cp-dark-blue/80 hover:scale-105 transform transition-all duration-300 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer">Infrastructure</span>
                    <span class="service-tag bg-gradient-to-r from-green-600 to-green-500 hover:scale-105 transform transition-all duration-300 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer">Construction</span>
                    <span class="service-tag bg-gradient-to-r from-purple-600 to-purple-500 hover:scale-105 transform transition-all duration-300 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer">Design</span>
                    <span class="service-tag bg-gradient-to-r from-orange-600 to-orange-500 hover:scale-105 transform transition-all duration-300 px-3 sm:px-4 py-2 rounded-full text-xs sm:text-sm text-white font-bold shadow-lg hover:shadow-xl cursor-pointer">Consulting</span>
                </div>

                <!-- Scroll Indicator -->
                <div class="mt-12 sm:mt-16 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Enhanced Services Overview -->
<section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-4 sm:mb-6">What We Offer</h2>
            <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                PT. Tridjasa Sigma Indonesia provides comprehensive solutions in construction, infrastructure, and design services
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Civil Construction -->
            <div class="service-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="p-6 sm:p-8 relative">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-cp-dark-blue/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-cp-dark-blue to-cp-dark-blue/80 rounded-2xl flex items-center justify-center mb-4 sm:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Civil Construction</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Complete building construction services including residential, commercial, and institutional projects.</p>
                        <ul class="text-sm text-gray-600 space-y-2 sm:space-y-3">
                            <li class="flex items-center"><span class="w-2 h-2 bg-cp-dark-blue rounded-full mr-3"></span>Residential Housing</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-cp-dark-blue rounded-full mr-3"></span>Commercial Buildings</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-cp-dark-blue rounded-full mr-3"></span>Renovation Projects</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-cp-dark-blue rounded-full mr-3"></span>Structural Construction</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Infrastructure -->
            <div class="service-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="p-6 sm:p-8 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-600/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-green-600 to-green-500 rounded-2xl flex items-center justify-center mb-4 sm:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Infrastructure</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Essential infrastructure development including roads, bridges, and utilities.</p>
                        <ul class="text-sm text-gray-600 space-y-2 sm:space-y-3">
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Road Construction</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Bridge Development</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Utility Infrastructure</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-green-600 rounded-full mr-3"></span>Site Preparation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Design Services -->
            <div class="service-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="p-6 sm:p-8 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-purple-600 to-purple-500 rounded-2xl flex items-center justify-center mb-4 sm:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h16m-16 0V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Design Services</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Comprehensive design solutions for architectural, interior, and landscape projects.</p>
                        <ul class="text-sm text-gray-600 space-y-2 sm:space-y-3">
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Architectural Design</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Interior Design</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>Landscape Design</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-purple-600 rounded-full mr-3"></span>MEP Design</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Engineering Consulting -->
            <div class="service-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="p-6 sm:p-8 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-600/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-orange-600 to-orange-500 rounded-2xl flex items-center justify-center mb-4 sm:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Engineering Consulting</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Expert consulting services for engineering solutions and project management.</p>
                        <ul class="text-sm text-gray-600 space-y-2 sm:space-y-3">
                            <li class="flex items-center"><span class="w-2 h-2 bg-orange-600 rounded-full mr-3"></span>Project Consulting</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-orange-600 rounded-full mr-3"></span>Technical Analysis</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-orange-600 rounded-full mr-3"></span>Design Review</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-orange-600 rounded-full mr-3"></span>Quality Management</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Interior Work -->
            <div class="service-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="p-6 sm:p-8 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-600/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-red-600 to-red-500 rounded-2xl flex items-center justify-center mb-4 sm:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4M8 7h8"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Interior Work</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Complete interior construction and finishing services for residential and commercial spaces.</p>
                        <ul class="text-sm text-gray-600 space-y-2 sm:space-y-3">
                            <li class="flex items-center"><span class="w-2 h-2 bg-red-600 rounded-full mr-3"></span>Interior Construction</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-red-600 rounded-full mr-3"></span>Space Planning</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-red-600 rounded-full mr-3"></span>Finishing Works</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-red-600 rounded-full mr-3"></span>Custom Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Specialized Construction -->
            <div class="service-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="p-6 sm:p-8 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-teal-600/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 sm:w-16 sm:h-16 bg-gradient-to-br from-teal-600 to-teal-500 rounded-2xl flex items-center justify-center mb-4 sm:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Specialized Construction</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6 leading-relaxed">Specialized construction services including swimming pools, basements, and unique structures.</p>
                        <ul class="text-sm text-gray-600 space-y-2 sm:space-y-3">
                            <li class="flex items-center"><span class="w-2 h-2 bg-teal-600 rounded-full mr-3"></span>Swimming Pool Construction</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-teal-600 rounded-full mr-3"></span>Basement Construction</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-teal-600 rounded-full mr-3"></span>Multi-floor Buildings</li>
                            <li class="flex items-center"><span class="w-2 h-2 bg-teal-600 rounded-full mr-3"></span>Custom Structures</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Our Markets -->
<section class="py-12 sm:py-16 lg:py-20 bg-white">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-4 sm:mb-6">Our Markets</h2>
            <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                We serve diverse market segments with tailored solutions for each sector
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
            <div class="market-card group text-center p-4 sm:p-6 lg:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl hover:from-cp-dark-blue/5 hover:to-cp-dark-blue/10 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg cursor-pointer">
                <div class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-cp-dark-blue to-cp-dark-blue/80 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4 lg:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-base sm:text-lg lg:text-xl font-semibold text-gray-800 mb-2">Road</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Road construction and infrastructure development</p>
            </div>

            <div class="market-card group text-center p-4 sm:p-6 lg:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl hover:from-green-600/5 hover:to-green-600/10 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg cursor-pointer">
                <div class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-green-600 to-green-500 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4 lg:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-base sm:text-lg lg:text-xl font-semibold text-gray-800 mb-2">Residential</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Residential building construction and renovation</p>
            </div>

            <div class="market-card group text-center p-4 sm:p-6 lg:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl hover:from-purple-600/5 hover:to-purple-600/10 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg cursor-pointer">
                <div class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-purple-600 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4 lg:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11"></path>
                    </svg>
                </div>
                <h3 class="text-base sm:text-lg lg:text-xl font-semibold text-gray-800 mb-2">Housing</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Housing development and cluster projects</p>
            </div>

            <div class="market-card group text-center p-4 sm:p-6 lg:p-8 bg-gradient-to-br from-gray-50 to-white rounded-2xl hover:from-orange-600/5 hover:to-orange-600/10 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg cursor-pointer">
                <div class="w-12 h-12 sm:w-16 sm:h-16 lg:w-20 lg:h-20 bg-gradient-to-br from-orange-600 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4 lg:mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                    </svg>
                </div>
                <h3 class="text-base sm:text-lg lg:text-xl font-semibold text-gray-800 mb-2">Infrastructure</h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Infrastructure and bridge consulting projects</p>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Our Clients -->
@if($projectClients->count() > 0)
<section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-4 sm:mb-6">Our Valued Clients</h2>
            <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Trusted by leading companies and organizations across various industries
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach($projectClients as $client)
            <div class="client-card group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    @if($client->avatar)
                    <img src="{{ Storage::url($client->avatar) }}" alt="{{ $client->name }}" class="w-full h-48 sm:h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <div class="w-full h-48 sm:h-56 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6 sm:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-800 group-hover:text-cp-dark-blue transition-colors duration-300">{{ $client->name }}</h3>
                        @if($client->logo)
                        <img src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }} logo" class="w-10 h-10 sm:w-12 sm:h-12 object-contain rounded-lg shadow-sm">
                        @endif
                    </div>
                    <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6">{{ $client->occupation }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs sm:text-sm text-cp-dark-blue font-medium bg-cp-dark-blue/10 px-3 py-1 rounded-full">Trusted Partner</span>
                        @if($client->testimonials && $client->testimonials->count() > 0)
                        <span class="text-xs sm:text-sm text-gray-500 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            {{ $client->testimonials->count() }} Review(s)
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Enhanced Statistics -->
@if($statistics->count() > 0)
<section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-r from-cp-dark-blue via-cp-dark-blue/95 to-cp-dark-blue text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4 sm:mb-6">Our Track Record</h2>
            <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto">Numbers that speak for our experience and quality</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 lg:gap-12">
            @foreach($statistics as $index => $stat)
            <div class="stats-card text-center group">
                <div class="relative">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4 text-white group-hover:scale-110 transition-transform duration-300 counter" data-target="{{ $stat->goal }}">0</div>
                    <div class="text-sm sm:text-base lg:text-lg opacity-90 font-medium">{{ $stat->name }}</div>
                    <!-- Progress Ring -->
                    <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-20 h-20 sm:w-24 sm:h-24 -z-10 opacity-20" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                        <circle cx="50" cy="50" r="45" fill="none" stroke="white" stroke-width="2" stroke-dasharray="283" stroke-dashoffset="70" class="animate-pulse"/>
                    </svg>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Enhanced Call to Action -->
<section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-cp-dark-blue/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-600/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="animate-fade-in-up">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4 sm:mb-6">Ready to Start Your Project?</h2>
            <p class="text-lg sm:text-xl mb-8 sm:mb-12 opacity-90 max-w-2xl mx-auto leading-relaxed">
                Let's discuss how we can help bring your construction and infrastructure dreams to reality
            </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center animate-fade-in-up delay-300">
            <a href="{{ route('front.contact') }}" class="group bg-gradient-to-r from-cp-dark-blue to-cp-dark-blue/90 hover:from-cp-dark-blue/90 hover:to-cp-dark-blue text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl w-full sm:w-auto text-center">
                <span class="flex items-center justify-center">
                    Get Free Consultation
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </span>
            </a>
            <a href="tel:021-7406313" class="group bg-transparent border-2 border-white hover:bg-white hover:text-gray-800 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl w-full sm:w-auto text-center">
                <span class="flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Call Now: 021-7406313
                </span>
            </a>
        </div>

        <!-- Contact Info -->
        <div class="mt-8 sm:mt-12 pt-6 sm:pt-8 border-t border-gray-700">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8 text-sm opacity-75">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Available 24/7
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Serving Indonesia
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Licensed & Insured
                </span>
            </div>
        </div>
    </div>
</section>

<x-footer/>

<style>
/* Custom Animations */
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

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out;
}

.delay-300 {
    animation-delay: 0.3s;
    animation-fill-mode: both;
}

/* Service Cards Stagger Animation */
.service-card {
    animation: fade-in-up 0.8s ease-out;
}

.service-card:nth-child(1) { animation-delay: 0.1s; animation-fill-mode: both; }
.service-card:nth-child(2) { animation-delay: 0.2s; animation-fill-mode: both; }
.service-card:nth-child(3) { animation-delay: 0.3s; animation-fill-mode: both; }
.service-card:nth-child(4) { animation-delay: 0.4s; animation-fill-mode: both; }
.service-card:nth-child(5) { animation-delay: 0.5s; animation-fill-mode: both; }
.service-card:nth-child(6) { animation-delay: 0.6s; animation-fill-mode: both; }

/* Market Cards Animation */
.market-card {
    animation: fade-in-up 0.6s ease-out;
}

.market-card:nth-child(1) { animation-delay: 0.1s; animation-fill-mode: both; }
.market-card:nth-child(2) { animation-delay: 0.2s; animation-fill-mode: both; }
.market-card:nth-child(3) { animation-delay: 0.3s; animation-fill-mode: both; }
.market-card:nth-child(4) { animation-delay: 0.4s; animation-fill-mode: both; }

/* Client Cards Animation */
.client-card {
    animation: fade-in-up 0.8s ease-out;
}

.client-card:nth-child(1) { animation-delay: 0.1s; animation-fill-mode: both; }
.client-card:nth-child(2) { animation-delay: 0.2s; animation-fill-mode: both; }
.client-card:nth-child(3) { animation-delay: 0.3s; animation-fill-mode: both; }

/* Stats Counter Animation */
.stats-card {
    animation: fade-in-up 0.8s ease-out;
}

.stats-card:nth-child(1) { animation-delay: 0.1s; animation-fill-mode: both; }
.stats-card:nth-child(2) { animation-delay: 0.2s; animation-fill-mode: both; }
.stats-card:nth-child(3) { animation-delay: 0.3s; animation-fill-mode: both; }
.stats-card:nth-child(4) { animation-delay: 0.4s; animation-fill-mode: both; }

/* Service Tags Pulse Effect */
.service-tag {
    animation: fade-in-up 0.6s ease-out;
}

.service-tag:nth-child(1) { animation-delay: 0.1s; animation-fill-mode: both; }
.service-tag:nth-child(2) { animation-delay: 0.2s; animation-fill-mode: both; }
.service-tag:nth-child(3) { animation-delay: 0.3s; animation-fill-mode: both; }
.service-tag:nth-child(4) { animation-delay: 0.4s; animation-fill-mode: both; }

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Custom hover effects */
.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #3B82F6, #8B5CF6, #10B981, #F59E0B);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card:hover::before {
    transform: scaleX(1);
}

/* Loading animation for counters */
.counter {
    transition: all 0.3s ease;
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .animate-fade-in-up {
        animation-duration: 0.6s;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer for counter animation
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach((counter) => {
        counterObserver.observe(counter);
    });
    
    // Add stagger animation to cards when they come into view
    const cards = document.querySelectorAll('.service-card, .market-card, .client-card');
    
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    }, { threshold: 0.1 });
    
    cards.forEach((card) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        cardObserver.observe(card);
    });
    
    // Smooth scroll for internal links
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
    
    // Add parallax effect to background elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('[class*="animate-pulse"]');
        
        parallaxElements.forEach((element) => {
            const rate = scrolled * -0.5;
            element.style.transform = `translateY(${rate}px)`;
        });
    });
});
</script>
@endsection