<!-- Enhanced Navigation Component -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100 transition-all duration-300">
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo Section -->
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('front.index') }}" class="flex items-center group">
                    <!-- Logo Icon -->
                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-cp-dark-blue to-cp-dark-blue/80 rounded-xl flex items-center justify-center mr-3 group-hover:scale-105 transition-transform duration-300 shadow-lg">
                        <img src="{{asset('images/logo/logo.svg')}}" class="object-contain w-full h-full" alt="logo">
                    </div>
                    <!-- Logo Text -->
                    <div class="hidden sm:block">
                        <h1 class="text-xl lg:text-2xl font-bold text-gray-800 group-hover:text-cp-dark-blue transition-colors duration-300">Trijasa Sigma</h1>
                        <p class="text-sm text-gray-500 -mt-1">Build Futuristic Dreams</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('front.index') }}" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium {{ request()->routeIs('front.index') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('front.about') }}" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium {{ request()->routeIs('front.about') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    Tentang Kami
                </a>
                <a href="{{ route('front.service') }}" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium {{ request()->routeIs('front.services') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    Layanan Servis
                </a>
                <a href="{{ route('front.portofolio') }}" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium {{ request()->routeIs('front.portofolio') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    Portofolio
                </a>
                <a href="{{ route('front.blog') }}" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium {{ request()->routeIs('front.blog') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    Blog
                </a>
                <a href="{{ route('front.contact') }}" class="nav-link bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-2 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg ml-4">
                    Kontak
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="mobile-menu-button p-2 rounded-lg text-gray-700 hover:text-cp-dark-blue hover:bg-gray-50 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-cp-dark-blue/20">
                    <svg class="hamburger-icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="close-icon w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden hidden border-t border-gray-100 bg-white/95 backdrop-blur-md">
            <div class="py-4 space-y-2">
                <a href="{{ route('front.index') }}" class="block px-4 py-3 text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium rounded-lg {{ request()->routeIs('front.index') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Beranda
                    </div>
                </a>
                <a href="{{ route('front.about') }}" class="block px-4 py-3 text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium rounded-lg {{ request()->routeIs('front.about') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Tentang Kami
                    </div>
                </a>
                <a href="{{ route('front.service') }}" class="block px-4 py-3 text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium rounded-lg {{ request()->routeIs('front.services') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Layanan Servis
                    </div>
                </a>
                <a href="" class="block px-4 py-3 text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium rounded-lg {{ request()->routeIs('front.projects') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Portofolio
                    </div>
                </a>
                <a href="" class="block px-4 py-3 text-gray-700 hover:text-cp-dark-blue hover:bg-cp-dark-blue/5 transition-all duration-300 font-medium rounded-lg {{ request()->routeIs('front.blog') ? 'text-cp-dark-blue bg-cp-dark-blue/5' : '' }}">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        Blog
                    </div>
                </a>
                
                <!-- Mobile Contact Button -->
                <div class="pt-4 mt-4 border-t border-gray-100">
                    <a href="{{ route('front.contact') }}" class="flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Kontak Kami
                    </a>
                </div>

                <!-- Mobile Contact Info -->
                <div class="pt-4 space-y-2 text-sm text-gray-600">
                    <div class="flex items-center px-4">
                        <svg class="w-4 h-4 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:021-7406313" class="hover:text-blue-600 transition-colors">021-7406313</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Navigation Styles -->
<style>
/* Navigation Styles */
.nav-link {
    position: relative;
    overflow: hidden;
}

.nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #2563eb, #1d4ed8);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::before,
.nav-link.active::before {
    width: 100%;
}

/* Mobile Menu Animation */
.mobile-menu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-in-out;
}

.mobile-menu.show {
    max-height: 500px;
}

/* Mobile Menu Button Animation */
.mobile-menu-button .hamburger-icon,
.mobile-menu-button .close-icon {
    transition: opacity 0.2s ease-in-out;
}

.mobile-menu-button.open .hamburger-icon {
    opacity: 0;
    display: none;
}

.mobile-menu-button.open .close-icon {
    opacity: 1;
    display: block;
}

/* Backdrop Blur Support */
@supports (backdrop-filter: blur(12px)) {
    nav {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }
}

/* Smooth scroll offset for fixed nav */
html {
    scroll-padding-top: 80px;
}

/* Animation for nav items */
@keyframes slideInDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.nav-link {
    animation: slideInDown 0.3s ease-out;
}

.nav-link:nth-child(1) { animation-delay: 0.1s; }
.nav-link:nth-child(2) { animation-delay: 0.2s; }
.nav-link:nth-child(3) { animation-delay: 0.3s; }
.nav-link:nth-child(4) { animation-delay: 0.4s; }
.nav-link:nth-child(5) { animation-delay: 0.5s; }
.nav-link:nth-child(6) { animation-delay: 0.6s; }

/* Responsive adjustments */
@media (max-width: 1024px) {
    .mobile-menu {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(12px);
        border-top: 1px solid #e5e7eb;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
}

/* Hide mobile menu initially */
@media (min-width: 1024px) {
    .mobile-menu {
        display: none !important;
    }
}
</style>

<!-- Navigation JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('show');
            mobileMenuButton.classList.toggle('open');
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('show');
                mobileMenuButton.classList.remove('open');
            }
        });
        
        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('show');
                mobileMenuButton.classList.remove('open');
            });
        });
    }
    
    // Add scroll effect to navigation
    let lastScrollTop = 0;
    const nav = document.querySelector('nav');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            nav.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling up
            nav.style.transform = 'translateY(0)';
        }
        
        // Add shadow when scrolled
        if (scrollTop > 50) {
            nav.classList.add('shadow-lg');
            nav.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
        } else {
            nav.classList.remove('shadow-lg');
            nav.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
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
    
    // Add active state based on current route
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
});
</script>