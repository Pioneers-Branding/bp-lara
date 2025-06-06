@extends('frontend.layouts.master')


@section('content')
<style>
    @media (max-width: 768px) {
        .desk-menu {
            /* background-color: #000; */
            display: none !important;
        }
    }

    .mega-menu {
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: fixed;
        left: 0;
        right: 0;
        width: 100%;
        background: white;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        z-index: 50;
        padding: 2rem 0;
        margin-top: 1px;
    }

    .has-mega-menu:hover .mega-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .nav-highlight::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #0d9488 0%, #2dd4bf 100%);
        transition: width 0.3s ease;
    }

    .has-mega-menu:hover .nav-highlight::after {
        width: 100%;
    }

    @media (max-width: 1023px) {
        .mega-menu {
            display: none !important;
        }
    }
</style>
<style>
    @keyframes fade-up {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-up {
        animation: fade-up 1s ease-out forwards;
    }

    .swiper-slide {
        transition: transform 0.3s ease;
    }

    .portfolio-item:hover .overlay {
        opacity: 1;
    }

    @media (max-width: 768px) {
        .text-5xl {
            font-size: 2.5rem;
        }

        .text-7xl {
            font-size: 3rem;
        }
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #0d9488;
        border-radius: 4px;
    }
</style>
<style>
    .tablet-frame {
        background: linear-gradient(145deg, #f0f0f0, #ffffff);
        border-radius: 50px;
        box-shadow:
            20px 20px 60px #d9d9d9,
            -20px -20px 60px #ffffff,
            inset 0 0 20px rgba(0, 0, 0, 0.05);
    }

    .screen-slider .swiper-slide {
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .swiper-pagination-bullet {
        background: white !important;
    }

    @media (max-width: 768px) {
        .tablet-frame {
            border-radius: 30px;
        }

        .tablet-frame .rounded-xl {
            border-radius: 25px;
        }

        .tablet-frame .rounded-24 {
            border-radius: 24px;
        }
    }

    @media (max-width: 480px) {
        .tablet-frame {
            margin: 0 10px;
        }
    }
</style>
<style>
    .bg-grid-pattern {
        background-image:
            linear-gradient(to right, rgba(0, 128, 128, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(0, 128, 128, 0.05) 1px, transparent 1px);
        background-size: 24px 24px;
    }

    /* Responsive grid pattern for smaller screens */
    @media (max-width: 640px) {
        .bg-grid-pattern {
            background-size: 16px 16px;
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .group:hover .group-hover\:blur-2xl {
        transition-delay: 50ms;
    }

    /* Optimize blur effects for mobile */
    @media (max-width: 640px) {
        .blur-3xl {
            --tw-blur: blur(24px);
        }

        .group-hover\:blur-2xl {
            --tw-blur: blur(20px);
        }
    }
</style>
<style>
    .ig-tabs-scroll::-webkit-scrollbar {
        display: none;
    }

    .ig-tabs-scroll {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .fade-in {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<style>
    /* Previous Instagram styles remain */

    .yt-tabs-scroll::-webkit-scrollbar {
        display: none;
    }

    .yt-tabs-scroll {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* YouTube Lite Custom Styles */
    lite-youtube {
        background-color: #000;
        position: relative;
        display: block;
        contain: content;
        background-position: center center;
        background-size: cover;
        cursor: pointer;
    }

    lite-youtube::before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAADGCAYAAAAT+OqFAAAAdklEQVQoz42QQQ7AIAgEF/T/D+kbq/RWAlnQyyazA4aoAB4FsBSA/bFjuF1EOL7VbrIrBuusmrt4ZZORfb6ehbWdnRHEIiITaEUKa5EJqUakRSaEYBJSCY2dEstQY7AuxahwXFrvZmWl2rh4JZ07z9dLtesfNj5q0FU3A5ObbwAAAABJRU5ErkJggg==);
        background-position: top;
        background-repeat: repeat-x;
        height: 60px;
        padding-bottom: 50px;
        width: 100%;
        transition: all 0.2s cubic-bezier(0, 0, 0.2, 1);
    }

    lite-youtube::after {
        content: "";
        display: block;
        padding-bottom: var(--aspect-ratio);
    }

    lite-youtube>iframe {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        border: 0;
    }
</style>

<!-- <style>
    .campaign-tabs-scroll::-webkit-scrollbar {
        display: none;
    }

    .campaign-tabs-scroll {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .fade-in {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style> -->
<style>
    .client-scroll::-webkit-scrollbar {
        display: none;
    }

    .client-scroll {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .campaign-card {
        box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
    }

    .campaign-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.3), transparent);
        opacity: 0.3;
    }

    @keyframes fadeScale {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .fade-scale {
        animation: fadeScale 0.4s ease-out forwards;
    }
</style>

<style>
    .dm-stat-counter {
        opacity: 0;
        transform: translateY(20px);
    }

    .dm-client-logo {
        opacity: 0;
        transform: translateY(10px);
    }

    .dm-hero-element {
        opacity: 0;
        transform: translateY(30px);
    }

    .dm-cta-button {
        transition: all 0.3s ease;
    }

    .dm-cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
</style>


<div class="h-16"></div>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <!-- Background with overlay gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-teal-50 to-emerald-50 z-0">
            <div class="absolute inset-0 bg-[url('/api/placeholder/1920/1080')] bg-cover opacity-5"></div>
            <div class="absolute right-0 top-0 w-2/3 h-full bg-gradient-to-l from-teal-500/5 to-transparent"></div>
            <div class="absolute -right-24 -top-24 w-96 h-96 bg-teal-400/10 rounded-full blur-3xl"></div>
            <div class="absolute -left-24 bottom-0 w-80 h-80 bg-emerald-400/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="flex flex-col lg:flex-row py-12 md:py-16 lg:py-20 items-center">
                <!-- Left Content Column -->
                <div class="w-full lg:w-1/2 mb-10 lg:mb-0 lg:pr-8">
                    <div class="dm-hero-element">
                        <span
                            class="inline-block py-1 px-3 rounded-full bg-teal-100 text-teal-800 text-xs font-semibold mb-4">HEALTHCARE
                            INDUSTRY</span>
                    </div>
                    <h1
                        class="dm-hero-element text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 bg-gradient-to-r from-teal-600 to-emerald-500 bg-clip-text text-transparent">
                        Digital Marketing Solutions for Healthcare
                    </h1>
                    <p class="dm-hero-element text-lg md:text-xl text-gray-700 mb-8">
                        Elevate your healthcare practice with data-driven marketing strategies that increase patient
                        acquisition and build trust in your brand.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="dm-hero-element flex flex-wrap gap-4 mb-12">
                        <a href="/contact"
                            class="dm-cta-button bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-6 rounded-lg flex items-center">
                            <span>Get a Free Consultation</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="/case-studies"
                            class="dm-cta-button bg-white border border-gray-300 hover:border-teal-400 text-gray-800 font-semibold py-3 px-6 rounded-lg flex items-center">
                            <span>View Case Studies</span>
                        </a>
                    </div>

                    <!-- Stats Row -->
                    <div class="grid grid-cols-3 gap-4 mb-8">
                        <div class="dm-stat-counter">
                            <h3 class="text-3xl md:text-4xl font-bold text-teal-600" id="dm-stat1">0</h3>
                            <p class="text-sm md:text-base text-gray-600">Patients Reached</p>
                        </div>
                        <div class="dm-stat-counter">
                            <h3 class="text-3xl md:text-4xl font-bold text-teal-600" id="dm-stat2">0</h3>
                            <p class="text-sm md:text-base text-gray-600">Conversion Rate</p>
                        </div>
                        <div class="dm-stat-counter">
                            <h3 class="text-3xl md:text-4xl font-bold text-teal-600" id="dm-stat3">0</h3>
                            <p class="text-sm md:text-base text-gray-600">ROI Increase</p>
                        </div>
                    </div>
                </div>

                <!-- Right Image Column -->
                <div class="w-full lg:w-1/2 dm-hero-element">
                    <div class="relative">
                        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                            <img src="https://img.freepik.com/free-photo/business-concept-with-graphic-holography_23-2149160934.jpg?t=st=1744198750~exp=1744202350~hmac=f114fe4d3b51d11fc4460c188a4847c9893efae1542ff0b7876e279f7f95cb31&w=2000"
                                alt="Healthcare Marketing Dashboard" class="w-full h-auto">
                            <div
                                class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-teal-900/20 to-transparent opacity-60">
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-6 -right-6 bg-teal-100 rounded-lg p-3 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-emerald-100 rounded-lg p-3 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Logos Section -->
            <div class="py-8 border-t border-gray-100">
                <p class="text-center text-gray-600 mb-6 dm-hero-element">Trusted by Leading Healthcare Providers</p>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-12">
                    <div
                        class="dm-client-logo w-32 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center">
                        <img src="/api/placeholder/120/60" alt="Mayo Clinic" class="max-h-8">
                    </div>
                    <div
                        class="dm-client-logo w-32 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center">
                        <img src="/api/placeholder/120/60" alt="Cleveland Clinic" class="max-h-8">
                    </div>
                    <div
                        class="dm-client-logo w-32 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center">
                        <img src="/api/placeholder/120/60" alt="Johns Hopkins" class="max-h-8">
                    </div>
                    <div
                        class="dm-client-logo w-32 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center">
                        <img src="/api/placeholder/120/60" alt="Mount Sinai" class="max-h-8">
                    </div>
                    <div
                        class="dm-client-logo w-32 h-16 bg-white rounded-lg shadow-sm flex items-center justify-center">
                        <img src="/api/placeholder/120/60" alt="NYU Langone" class="max-h-8">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class=" mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="flex items-center justify-between mb-12">
                    <div>
                        <h2 class="text-3xl font-bold mb-2">Redefine Patient Care</h2>
                        <p class="text-gray-600">Smart solutions for modern healthcare challenges</p>
                    </div>
                    <button class="text-teal-600 font-medium hover:text-teal-700 hidden md:flex items-center group">
                        Explore All Features
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Feature 1 -->
                    <div
                        class="group p-6 bg-gray-50 rounded-xl hover:bg-gradient-to-br hover:from-teal-50 hover:to-blue-50 transition-all">
                        <div
                            class="w-12 h-12 bg-teal-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-teal-500/20 transition-all">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Smart Scheduling</h3>
                        <p class="text-gray-600 mb-4">AI-powered appointment system that reduces wait times and
                            optimizes staff allocation.</p>
                        <div class="flex items-center text-teal-600 font-medium">
                            <span class="mr-2">Learn More</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="group p-6 bg-gray-50 rounded-xl hover:bg-gradient-to-br hover:from-teal-50 hover:to-blue-50 transition-all">
                        <div
                            class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-500/20 transition-all">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Secure Telehealth</h3>
                        <p class="text-gray-600 mb-4">HIPAA-compliant virtual care platform with integrated EHR and
                            patient
                            monitoring.</p>
                        <div class="flex items-center text-blue-600 font-medium">
                            <span class="mr-2">Learn More</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case studies -->
    <section class="max-w-7xl mx-auto px-6 my-12">
        <!-- Header -->
        <div class="mb-12 pt-12 mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900">Case Studies</h2>
            <p class="text-gray-600 mt-2">Transforming businesses through digital excellence</p>
        </div>

        <!-- Client Tabs -->
        <div class="flex space-x-1 mb-8 overflow-x-auto hide-scrollbar">
            <button onclick="switchClient(0)" class="client-tab active px-6 py-3 text-sm font-medium whitespace-nowrap">
                Medanta Hospitals
            </button>
            <button onclick="switchClient(1)" class="client-tab px-6 py-3 text-sm font-medium whitespace-nowrap">
                Tech Solutions Inc
            </button>
            <button onclick="switchClient(2)" class="client-tab px-6 py-3 text-sm font-medium whitespace-nowrap">
                Global Retail Corp
            </button>
            <button onclick="switchClient(3)" class="client-tab px-6 py-3 text-sm font-medium whitespace-nowrap">
                Education First
            </button>
        </div>

        <!-- Case Study Content -->
        <div class="case-study-content active" data-client="0">
            <div class="grid lg:grid-cols-3 gap-6">
                <!-- Overview Card -->
                <div class="lg:col-span-2 bg-white rounded-xl border-2 border-gray-100 p-6">
                    <div class="flex items-center mb-6">
                        <img loading="lazy" src="https://enquire.brandingpioneers.com/medanta-logo.png"
                            alt="Medanta Logo" class="w-12 h-12 rounded-lg">
                        <div class="ml-4">
                            <h3 class="font-semibold text-gray-900">Medanta Hospitals</h3>
                            <p class="text-sm text-gray-500">Healthcare • Video Marketing • SEO</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="relative h-48">
                            <!-- Slide Indicators -->
                            <div class="flex items-center space-x-3 mb-6">
                                <div class="slide-indicator active" data-slide="0"></div>
                                <div class="slide-indicator" data-slide="1"></div>
                                <div class="slide-indicator" data-slide="2"></div>
                            </div>

                            <!-- Content Slides -->
                            <div class="slides-container">
                                <div class="slide absolute w-full transition-opacity duration-300 opacity-0 invisible"
                                    data-slide="0">
                                    <h4 class="text-lg font-medium mb-2">The Challenge</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Medanta Hospitals needed to boost patient engagement and education through
                                        specialized videography
                                        and marketing in the tertiary care sector, facing challenges in digital presence
                                        and educational
                                        outreach.
                                    </p>
                                </div>

                                <div class="slide absolute w-full transition-opacity duration-300 opacity-0 invisible"
                                    data-slide="1">
                                    <h4 class="text-lg font-medium mb-2">The Solution</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        We implemented comprehensive video marketing strategies with professional
                                        production
                                        and strategic distribution, focusing on patient-centric content.
                                    </p>
                                </div>

                                <div class="slide absolute w-full transition-opacity duration-300 opacity-0 invisible"
                                    data-slide="2">
                                    <h4 class="text-lg font-medium mb-2">The Impact</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Achieved significant growth with 400% increase in video viewership and doubled
                                        patient
                                        engagement rates through targeted content.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Key Achievements -->
                        <div class="grid grid-cols-2 gap-4 pt-4 border-t">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Video Viewership</p>
                                <div class="progress-bar">
                                    <div class="progress-value" style="width: 80%"></div>
                                </div>
                                <p class="text-sm font-medium mt-1">400% Increase</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Patient Engagement</p>
                                <div class="progress-bar">
                                    <div class="progress-value" style="width: 60%"></div>
                                </div>
                                <p class="text-sm font-medium mt-1">2x Growth</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Metrics Cards -->
                <div class="space-y-4">
                    <div class="metric-card p-6 rounded-xl shadow-sm">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm text-gray-500">Monthly Views</p>
                                <h4 class="text-2xl font-bold mt-1">438.9K</h4>
                            </div>
                            <span class="text-green-500 text-sm font-medium px-2 py-1 bg-green-50 rounded">↑ 23%</span>
                        </div>
                        <div class="mt-4">
                            <div class="progress-bar">
                                <div class="progress-value" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="metric-card p-6 rounded-xl shadow-sm">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-sm text-gray-500">Watch Time</p>
                                <h4 class="text-2xl font-bold mt-1">6.9K hrs</h4>
                            </div>
                            <span class="text-green-500 text-sm font-medium px-2 py-1 bg-green-50 rounded">↑ 18%</span>
                        </div>
                        <div class="mt-4">
                            <div class="progress-bar">
                                <div class="progress-value" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="#"
                        class="block p-6 hover:bg-gradient-to-l transition-all duration-200 bg-gradient-to-r from-blue-500 to-blue-700 rounded-xl text-white">
                        <h4 class="font-medium mb-1">View Full Case Study</h4>
                        <p class="text-sm opacity-90">Explore our complete transformation story →</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional client content sections (hidden by default) -->
        <div class="case-study-content" data-client="1">
            <!-- Similar structure for Tech Solutions Inc -->
        </div>
        <div class="case-study-content" data-client="2">
            <!-- Similar structure for Global Retail Corp -->
        </div>
        <div class="case-study-content" data-client="3">
            <!-- Similar structure for Education First -->
        </div>
    </section>

    <!-- Case Study Section -->
    <!-- <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="p-8 lg:p-12">
                            <div
                                class="inline-block px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-sm font-medium mb-6">
                                Featured Case Study
                            </div>
                            <h3 class="text-2xl font-bold mb-4">National Health Network's Digital Transformation</h3>
                            <p class="text-gray-600 mb-6">How we helped one of the largest healthcare networks reduce
                                operational costs by 35% while improving patient satisfaction to 94%.</p>

                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-green-400 rounded-full mr-3"></div>
                                    <span class="text-gray-600">45% reduction in patient wait times</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-blue-400 rounded-full mr-3"></div>
                                    <span class="text-gray-600">300% increase in virtual consultations</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-purple-400 rounded-full mr-3"></div>
                                    <span class="text-gray-600">$2.4M annual cost savings</span>
                                </div>
                            </div>

                            <button
                                class="inline-flex items-center text-teal-600 font-medium hover:text-teal-700 group">
                                Read Full Case Study
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </button>
                        </div>
                        <div class="relative h-64 lg:h-auto">
                            <img src="/api/placeholder/800/600" alt="Case Study"
                                class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-teal-500/20 to-blue-500/20 mix-blend-overlay">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Tablet Mockup Section -->
    <section class="py-8 sm:py-12 md:py-16 lg:py-20 px-4">
        <!-- Section Header -->
        <div class="relative text-center mb-8 md:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Work Samples</h2>
            <div class="h-1 w-16 sm:w-20 md:w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full mx-auto"></div>
            <p class="text-gray-400 font-bold text-xl sm:text-2xl italic mt-6 sm:mt-8">01 Websites</p>
        </div>

        <!-- Tablet Container with max-width constraints -->
        <div class="mx-auto max-w-[380px] sm:max-w-[500px] md:max-w-[600px] lg:max-w-[800px] xl:max-w-[1000px]">
            <div class="relative mx-auto tablet-frame">
                <!-- Tablet Body -->
                <div
                    class="relative bg-gray-900 rounded-[20px] sm:rounded-[30px] md:rounded-[40px] p-2 sm:p-3 md:p-4 shadow-2xl">
                    <!-- Camera Notch -->
                    <div
                        class="absolute top-2 sm:top-3 md:top-4 left-1/2 -translate-x-1/2 w-12 sm:w-16 md:w-24 h-3 sm:h-4 md:h-5 bg-gray-900 rounded-full flex items-center justify-center">
                        <div class="w-1 sm:w-1.5 md:w-2 h-1 sm:h-1.5 md:h-2 bg-gray-700 rounded-full"></div>
                    </div>

                    <!-- Screen Area -->
                    <div
                        class="relative bg-gray-800 rounded-[12px] sm:rounded-[16px] md:rounded-[24px] overflow-hidden">
                        <!-- Screen Content -->
                        <div class="swiper screen-slider w-full h-full">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide bg-white">
                                    <img src="https://img.freepik.com/free-psd/design-agency-web-template_23-2148975466.jpg?t=st=1744201475~exp=1744205075~hmac=069635495ac6258d9df390b374ed674dc324e61f1fd1dd77a2701d83af41f287&w=2000"
                                        alt="Screen 1" class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide bg-gray-100">
                                    <img src="https://img.freepik.com/free-psd/corporate-banner-template-illustrated_23-2148777701.jpg?t=st=1744201632~exp=1744205232~hmac=779ec595b57855393763fb80b301a2371f5bc979872d96c6022e576a95242239&w=2000"
                                        alt="Screen 2" class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide bg-gray-200">
                                    <img src="assets/max-preview.png" alt="Screen 3" class="w-full h-full object-cover">
                                </div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide bg-gray-300">
                                    <img src="assets/max-preview.png" alt="Screen 4" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- Screen Bezel Effect -->
                        <div
                            class="absolute inset-0 pointer-events-none border-4 sm:border-6 md:border-8 border-gray-900/20 rounded-[10px] sm:rounded-[14px] md:rounded-[20px]">
                        </div>
                    </div>

                    <!-- Home Button -->
                    <div
                        class="absolute bottom-2 sm:bottom-3 md:bottom-4 left-1/2 -translate-x-1/2 w-8 sm:w-12 md:w-16 h-0.5 sm:h-0.75 md:h-1 bg-gray-700 rounded-full">
                    </div>

                    <!-- Side Buttons - Scale with screen size -->
                    <div
                        class="absolute top-[20%] -right-1 sm:-right-1.5 md:-right-2 w-1 sm:w-1.5 md:w-2 h-12 sm:h-14 md:h-16 bg-gradient-to-b from-gray-700 to-gray-900 rounded-r">
                    </div>
                    <div
                        class="absolute top-[40%] -right-1 sm:-right-1.5 md:-right-2 w-1 sm:w-1.5 md:w-2 h-12 sm:h-14 md:h-16 bg-gradient-to-b from-gray-700 to-gray-900 rounded-r">
                    </div>
                    <div
                        class="absolute top-[30%] -left-1 sm:-left-1.5 md:-left-2 w-1 sm:w-1.5 md:w-2 h-12 sm:h-14 md:h-16 bg-gradient-to-b from-gray-700 to-gray-900 rounded-l">
                    </div>
                </div>

                <!-- Reflection Effect -->
                <div
                    class="absolute inset-0 pointer-events-none rounded-[20px] sm:rounded-[30px] md:rounded-[40px] overflow-hidden">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-white/10 to-transparent mix-blend-overlay">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Mockups Section -->
    <section class="instagram-mockup-section py-4 sm:py-6 md:py-8 px-3 sm:px-4 bg-white">
        <!-- Section Header -->
        <div class="relative text-center mb-6 sm:mb-8 md:mb-16">
            <div class="h-1 w-20 sm:w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full mx-auto"></div>
            <p class="text-gray-400 font-bold text-xl sm:text-2xl italic mt-6 sm:mt-8">02 Social Media</p>
        </div>

        <!-- Responsive Grid Container -->
        <div class="grid md:grid-cols-1 lg:grid-cols-2 max-w-5xl mx-auto gap-6 sm:gap-8">
            <!-- Instagram Container -->
            <div class="w-full max-w-[350px] md:max-w-md mx-auto md:bg-gray-100 p-0 sm:p-4 rounded-xl">
                <!-- Instagram Tabs -->
                <div class="flex overflow-x-auto ig-tabs-scroll mb-4 sm:mb-6 bg-white rounded-lg p-2 no-scrollbar">
                    <button data-tab="0"
                        class="ig-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg mr-2 bg-gradient-to-r from-purple-500 to-pink-500 text-white text-sm sm:text-base">TechVision</button>
                    <button data-tab="1"
                        class="ig-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg mr-2 bg-gray-100 text-gray-600 hover:bg-gray-200 text-sm sm:text-base">EcoSmart</button>
                    <button data-tab="2"
                        class="ig-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg mr-2 bg-gray-100 text-gray-600 hover:bg-gray-200 text-sm sm:text-base">FoodieDelight</button>
                    <button data-tab="3"
                        class="ig-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg bg-gray-100 text-gray-600 hover:bg-gray-200 text-sm sm:text-base">FitLife</button>
                </div>

                <!-- Instagram Post Container -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                    <!-- Post Header -->
                    <div class="flex items-center p-3 border-b">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Profile" class="ig-profile-img w-8 h-8 rounded-full object-cover">
                        <div class="ml-3 flex-grow">
                            <div class="ig-username font-semibold text-sm">brandingpioneers_</div>
                            <div class="ig-name text-xs text-gray-500">Branding Pioneers</div>
                        </div>
                        <button class="text-gray-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 14a2 2 0 100-4 2 2 0 000 4zM19 14a2 2 0 100-4 2 2 0 000 4zM5 14a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Post Image -->
                    <div class="relative pb-[100%]">
                        <img src="https://images.unsplash.com/photo-1735827944545-b4316477f27d?q=80&w=2831&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Post content" class="ig-post-img absolute inset-0 w-full h-full object-cover">
                    </div>

                    <!-- Post Actions -->
                    <div class="p-3 border-b">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center space-x-4">
                                <button class="text-gray-900 hover:text-gray-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                                <button class="text-gray-900 hover:text-gray-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </button>
                                <button class="text-gray-900 hover:text-gray-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                    </svg>
                                </button>
                            </div>
                            <button class="text-gray-900 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                        </div>
                        <div class="ig-likes font-semibold text-sm">2,547 likes</div>
                    </div>

                    <!-- Caption -->
                    <div class="p-3">
                        <div class="relative">
                            <p class="text-sm">
                                <span class="ig-caption-username font-semibold mr-1">brandingpioneers_</span>
                                <span class="ig-caption">Transforming healthcare through digital innovation. 🏥✨
                                    #HealthTech #Innovation</span>
                            </p>
                        </div>
                        <div class="mt-2 text-xs text-gray-500 ig-time">2 days ago</div>
                    </div>

                    <!-- Comment Input -->
                    <div class="flex items-center p-3 border-t">
                        <button class="text-gray-900 hover:text-gray-700 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                        <input type="text" placeholder="Add a comment..."
                            class="flex-grow text-sm bg-transparent focus:outline-none">
                        <button class="text-blue-500 font-semibold text-sm ml-4">Post</button>
                    </div>
                </div>
            </div>

            <!-- YouTube Container -->
            <div class="w-full max-w-[350px] md:max-w-md mx-auto md:bg-gray-100 p-0 sm:p-4 rounded-xl">
                <!-- YouTube Tabs -->
                <div class="flex overflow-x-auto yt-tabs-scroll mb-4 sm:mb-6 bg-white rounded-lg p-2 no-scrollbar">
                    <button data-yttab="0"
                        class="yt-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg mr-2 bg-gradient-to-r from-red-500 to-red-600 text-white text-sm sm:text-base">TechVision</button>
                    <button data-yttab="1"
                        class="yt-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg mr-2 bg-gray-100 text-gray-600 hover:bg-gray-200 text-sm sm:text-base">EcoSmart</button>
                    <button data-yttab="2"
                        class="yt-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg mr-2 bg-gray-100 text-gray-600 hover:bg-gray-200 text-sm sm:text-base">FoodieDelight</button>
                    <button data-yttab="3"
                        class="yt-tab-btn flex-shrink-0 px-3 sm:px-4 py-2 rounded-lg bg-gray-100 text-gray-600 hover:bg-gray-200 text-sm sm:text-base">FitLife</button>
                </div>

                <!-- YouTube Video Container -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                    <!-- Video Embed Container -->
                    <div class="relative pb-[56.25%] bg-black">
                        <div class="video-container absolute inset-0 w-full h-full">
                            <lite-youtube videoid="dQw4w9WgXcQ" playlabel="Play"
                                class="absolute inset-0 w-full h-full"></lite-youtube>
                        </div>
                    </div>

                    <!-- Video Info Section -->
                    <div class="p-4">
                        <!-- Title and Options -->
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="yt-title font-semibold text-lg leading-tight flex-grow pr-4">How We Transformed
                                Healthcare With Digital Innovation</h3>
                            <button class="text-gray-600 p-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 14a2 2 0 100-4 2 2 0 000 4zM19 14a2 2 0 100-4 2 2 0 000 4zM5 14a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </div>

                        <!-- View Count and Time -->
                        <div class="text-sm text-gray-600 mb-4">
                            <span class="yt-views">24K views</span> •
                            <span class="yt-time">2 days ago</span>
                        </div>

                        <!-- Channel Info -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="yt-channel-img w-10 h-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Channel">
                                <div class="ml-3">
                                    <div class="yt-channel-name font-medium">TechVision Official</div>
                                    <div class="yt-subscribers text-sm text-gray-600">128K subscribers</div>
                                </div>
                            </div>
                            <button
                                class="bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium hover:bg-red-700">
                                Subscribe
                            </button>
                        </div><!-- Action Buttons (Completing from where it left off) -->
                        <div class="flex flex-wrap items-center gap-2 mt-4 pt-4 border-t">
                            <button
                                class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                <span class="yt-likes">1.2K</span>
                            </button>
                            <button
                                class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018c.163 0 .326.02.485.06L17 4m-7 10v2a2 2 0 002 2h.095c.5 0 .905-.405.905-.905 0-.714.211-1.412.608-2.006L17 13V4m-7 10h2" />
                                </svg>
                                <span>Dislike</span>
                            </button>
                            <button
                                class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-full">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                </svg>
                                <span>Share</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Creative Campaign Showcase Section -->
    <section class="campaign-showcase py-16 px-4 bg-gray-50">
        <!-- Section Header -->
        <div class="relative text-center mb-6 sm:mb-8 md:mb-16">
            <div class="h-1 w-20 sm:w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full mx-auto"></div>
            <p class="text-gray-400 font-bold text-xl sm:text-2xl italic mt-6 sm:mt-8">03 Ads and Campaigns</p>
        </div>
        <!-- Client Selector -->
        <div class="max-w-6xl mx-auto mb-12">
            <div class="flex overflow-x-auto client-scroll space-x-4 p-2">
                <button data-client="0" class="client-btn flex-shrink-0 group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="relative px-6 py-3 bg-white rounded-xl border-2 border-transparent group-hover:border-purple-300 transition-all">
                        <span class="text-gray-700 group-hover:text-gray-900 font-medium">Nike Campaigns</span>
                    </div>
                </button>
                <button data-client="1" class="client-btn flex-shrink-0 group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="relative px-6 py-3 bg-white rounded-xl border-2 border-transparent group-hover:border-blue-300 transition-all">
                        <span class="text-gray-700 group-hover:text-gray-900 font-medium">Adidas Growth</span>
                    </div>
                </button>
                <button data-client="2" class="client-btn flex-shrink-0 group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-amber-500 to-orange-500 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="relative px-6 py-3 bg-white rounded-xl border-2 border-transparent group-hover:border-amber-300 transition-all">
                        <span class="text-gray-700 group-hover:text-gray-900 font-medium">Tesla Motors</span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Image Showcase Grid -->
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 campaign-grid">
                <!-- Campaign Images will be inserted here by JavaScript -->
                <div
                    class="campaign-card group relative aspect-[4/5] rounded-2xl overflow-hidden cursor-pointer hover:scale-[1.02] transition-all duration-300">
                    <img src="/api/placeholder/400/500" alt="Campaign 1" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform">
                                <h3 class="text-white font-bold text-xl mb-2">Summer Collection</h3>
                                <p class="text-gray-200 text-sm">Engagement Rate: 4.8%</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="campaign-card group relative aspect-[4/5] rounded-2xl overflow-hidden cursor-pointer hover:scale-[1.02] transition-all duration-300">
                    <img src="/api/placeholder/400/500" alt="Campaign 2" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform">
                                <h3 class="text-white font-bold text-xl mb-2">Brand Story</h3>
                                <p class="text-gray-200 text-sm">Views: 2.4M</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="campaign-card group relative aspect-[4/5] rounded-2xl overflow-hidden cursor-pointer hover:scale-[1.02] transition-all duration-300">
                    <img src="/api/placeholder/400/500" alt="Campaign 3" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform">
                                <h3 class="text-white font-bold text-xl mb-2">Product Launch</h3>
                                <p class="text-gray-200 text-sm">ROI: 342%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campaign Analytics Dashboard Section -->
    <!-- <section class="campaign-analytics-section py-12 px-4 bg-gray-50">

        <div class="max-w-7xl mx-auto">
            <div class="flex overflow-x-auto campaign-tabs-scroll mb-8 bg-white rounded-xl p-3 shadow-lg">
                <button data-campaign="0"
                    class="campaign-tab-btn flex-shrink-0 px-6 py-3 rounded-xl mr-3 bg-gradient-to-r from-blue-500 to-cyan-500 text-white shadow-lg shadow-blue-500/20">
                    <div class="flex items-center gap-3">
                        <img src="/api/placeholder/32/32" alt="Nike" class="w-8 h-8 rounded-lg">
                        <span>Nike Campaigns</span>
                    </div>
                </button>
                <button data-campaign="1"
                    class="campaign-tab-btn flex-shrink-0 px-6 py-3 rounded-xl mr-3 bg-white text-gray-700 hover:bg-gray-50">
                    <div class="flex items-center gap-3">
                        <img src="/api/placeholder/32/32" alt="Adidas" class="w-8 h-8 rounded-lg">
                        <span>Adidas Growth</span>
                    </div>
                </button>
                <button data-campaign="2"
                    class="campaign-tab-btn flex-shrink-0 px-6 py-3 rounded-xl mr-3 bg-white text-gray-700 hover:bg-gray-50">
                    <div class="flex items-center gap-3">
                        <img src="/api/placeholder/32/32" alt="Tesla" class="w-8 h-8 rounded-lg">
                        <span>Tesla Motors</span>
                    </div>
                </button>
            </div>


            <div class="campaign-dashboard bg-white rounded-2xl shadow-xl p-6">

                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 pb-6 border-b">
                    <div>
                        <h3 class="campaign-title text-2xl font-bold text-gray-900 mb-2">Nike Summer Collection 2024
                        </h3>
                        <p class="campaign-date text-gray-600">Campaign Period: Apr 15 - Jun 30, 2024</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex items-center gap-3">
                        <span
                            class="campaign-status px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">Active</span>
                        <span
                            class="campaign-budget px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">Budget:
                            $50,000</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-4 border border-blue-100">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Impressions</span>
                            <span class="text-green-600 text-sm font-medium">↑ 23%</span>
                        </div>
                        <div class="campaign-impressions text-2xl font-bold text-gray-900">2.4M</div>
                        <div class="mt-2 text-sm text-gray-500">vs 1.8M last month</div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-4 border border-purple-100">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Engagement Rate</span>
                            <span class="text-green-600 text-sm font-medium">↑ 12%</span>
                        </div>
                        <div class="campaign-engagement text-2xl font-bold text-gray-900">4.8%</div>
                        <div class="mt-2 text-sm text-gray-500">vs 4.2% last month</div>
                    </div>

                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-4 border border-amber-100">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Conversions</span>
                            <span class="text-green-600 text-sm font-medium">↑ 18%</span>
                        </div>
                        <div class="campaign-conversions text-2xl font-bold text-gray-900">28.5K</div>
                        <div class="mt-2 text-sm text-gray-500">vs 23.1K last month</div>
                    </div>

                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-4 border border-emerald-100">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">ROI</span>
                            <span class="text-green-600 text-sm font-medium">↑ 15%</span>
                        </div>
                        <div class="campaign-roi text-2xl font-bold text-gray-900">342%</div>
                        <div class="mt-2 text-sm text-gray-500">vs 315% last month</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <h4 class="text-sm font-medium text-gray-600 mb-4">Top Performing Ad</h4>
                        <div class="aspect-video bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="/api/placeholder/600/338" alt="Campaign Visual"
                                class="campaign-image w-full h-full object-cover">
                        </div>
                        <div class="mt-4">
                            <div class="text-sm font-medium text-gray-900 mb-1 campaign-ad-title">Summer Sport
                                Collection
                            </div>
                            <div class="text-sm text-gray-600 campaign-ad-stats">CTR: 4.2% • CPC: $0.82</div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <h4 class="text-sm font-medium text-gray-600 mb-4">Engagement Growth</h4>
                        <div class="h-[300px] campaign-chart">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Testimonials Section -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                What Our Clients Say
            </h2>
            <div class="w-20 h-1 bg-teal-600 mx-auto mb-4"></div>
            <p class="text-gray-600">
                Hear success stories directly from our clients who have transformed their businesses with our solutions.
            </p>
        </div>

        <!-- Video Slider -->
        <div class="swiper video-testimonials">
            <div class="swiper-wrapper pb-12">
                <!-- Video 1 -->
                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="aspect-video">
                            <lite-youtube videoid="dQw4w9WgXcQ"
                                style="background-image: url('https://i.ytimg.com/vi/dQw4w9WgXcQ/hqdefault.jpg');"></lite-youtube>
                        </div>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-900">Sarah Johnson</h3>
                            <p class="text-gray-600 text-sm">CEO, TechStart Solutions</p>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="aspect-video">
                            <lite-youtube videoid="M7lc1UVf-VE"
                                style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"></lite-youtube>
                        </div>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-900">Michael Chen</h3>
                            <p class="text-gray-600 text-sm">Founder, Digital Dynamics</p>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="aspect-video">
                            <lite-youtube videoid="W-rHIsDFrzQ"
                                style="background-image: url('https://i.ytimg.com/vi/W-rHIsDFrzQ/hqdefault.jpg');"></lite-youtube>
                        </div>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-900">Emma Davis</h3>
                            <p class="text-gray-600 text-sm">Marketing Director, InnovateCo</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="aspect-video">
                            <lite-youtube videoid="M7lc1UVf-VE"
                                style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"></lite-youtube>
                        </div>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-900">Michael Chen</h3>
                            <p class="text-gray-600 text-sm">Founder, Digital Dynamics</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="aspect-video">
                            <lite-youtube videoid="M7lc1UVf-VE"
                                style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"></lite-youtube>
                        </div>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-900">Michael Chen</h3>
                            <p class="text-gray-600 text-sm">Founder, Digital Dynamics</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide px-4">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <div class="aspect-video">
                            <lite-youtube videoid="M7lc1UVf-VE"
                                style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"></lite-youtube>
                        </div>
                        <div class="mt-4">
                            <h3 class="font-semibold text-gray-900">Michael Chen</h3>
                            <p class="text-gray-600 text-sm">Founder, Digital Dynamics</p>
                        </div>
                    </div>
                </div>

                <!-- Add more slides as needed -->
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- CTA -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- CTA Card Container with 3D perspective wrapper -->
        <div class="perspective-wrapper" style="perspective: 1000px;">
            <div class="relative rounded-2xl overflow-hidden modern-cta will-change-transform" id="modern-cta-card">
                <!-- Background Gradients -->
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900"></div>

                <!-- Subtle Grid Pattern -->
                <div
                    class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.05)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:24px_24px]">
                </div>

                <!-- Light Effect -->
                <div class="absolute inset-0 opacity-0 light-effect pointer-events-none"></div>

                <!-- Content Container -->
                <div class="relative flex flex-col md:flex-row items-center gap-8">
                    <!-- Text Content -->
                    <div class="flex-1 p-8 md:p-16 text-center md:text-left">
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4" id="modern-cta-title">
                            Transform Your Digital Presence
                        </h2>
                        <p class="text-gray-300 text-base md:text-lg max-w-2xl mb-8" id="modern-cta-text">
                            Join the digital revolution and elevate your brand with our cutting-edge marketing
                            solutions.
                            Let's create something extraordinary together.
                        </p>

                        <div class="relative inline-flex group cursor-pointer" id="modern-cta-button">
                            <div
                                class="absolute -inset-px bg-gradient-to-r from-teal-600 via-teal-400 to-teal-600 rounded-xl blur-lg
                                                                          transition-all duration-500 group-hover:opacity-100 opacity-75 group-hover:duration-200">
                            </div>

                            <button
                                class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white
                                                                             bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl transition-all duration-200
                                                                             hover:transform hover:scale-[1.01] active:scale-[0.99]">
                                <span
                                    class="relative bg-gradient-to-r from-teal-400 to-teal-500 bg-clip-text text-transparent">
                                    Get Started Today
                                </span>

                                <!-- Shimmer Effect -->
                                <div class="absolute inset-0 w-full h-full rounded-xl overflow-hidden">
                                    <div class="modern-shimmer"></div>
                                </div>
                            </button>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="md:w-1/2 h-full">
                        <img loading="lazy" src="assets/cta-img.png" alt="Digital Marketing"
                            class="w-full h-[300px] md:h-[400px] object-cover object-center"
                            style="clip-path: polygon(10% 0, 100% 0, 100% 100%, 0% 100%);">
                    </div>
                </div>
            </div>
        </div>

        <style>
            .perspective-wrapper {
                transform-style: preserve-3d;
                transform: perspective(1000px);
            }

            .modern-cta {
                transform-style: preserve-3d;
                transition: transform 0.1s ease-out;
                transform: translateZ(0);
                backface-visibility: hidden;
            }

            .light-effect {
                background: radial-gradient(800px circle at var(--mouse-x) var(--mouse-y),
                        rgba(255, 255, 255, 0.06),
                        transparent 40%);
                transition: opacity 0.2s ease-out;
            }

            /* Disable 3D effect for devices that prefer reduced motion */
            @media (prefers-reduced-motion: reduce) {
                .modern-cta {
                    transform: none !important;
                    transition: none !important;
                }
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const card = document.querySelector('#modern-cta-card');
                const lightEffect = card.querySelector('.light-effect');
                let rafId = null;
                let isHovering = false;

                // Throttled transform update function
                function updateTransform(x, y) {
                    if (!isHovering) return;

                    const rect = card.getBoundingClientRect();
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const rotateX = ((y - centerY) / (rect.height / 2)) * 5; // Max 5 degrees
                    const rotateY = ((centerX - x) / (rect.width / 2)) * 5; // Max 5 degrees

                    // Apply transform with hardware acceleration
                    card.style.transform = `
                                    rotateX(${rotateX}deg)
                                    rotateY(${rotateY}deg)
                                    translateZ(0)
                                `;

                    // Update light effect
                    lightEffect.style.opacity = '1';
                    lightEffect.style.setProperty('--mouse-x', `${x}px`);
                    lightEffect.style.setProperty('--mouse-y', `${y}px`);
                }

                // Throttled mousemove handler
                function handleMouseMove(e) {
                    if (rafId) return;

                    rafId = requestAnimationFrame(() => {
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        updateTransform(x, y);
                        rafId = null;
                    });
                }

                // Mouse enter handler
                card.addEventListener('mouseenter', () => {
                    isHovering = true;
                });

                // Mouse move handler
                card.addEventListener('mousemove', handleMouseMove, { passive: true });

                // Mouse leave handler
                card.addEventListener('mouseleave', () => {
                    isHovering = false;
                    rafId && cancelAnimationFrame(rafId);
                    card.style.transform = 'translateZ(0)';
                    lightEffect.style.opacity = '0';
                });

                // Clean up on page unload
                window.addEventListener('unload', () => {
                    rafId && cancelAnimationFrame(rafId);
                });

                // GSAP Animations remain the same...
                gsap.registerPlugin(ScrollTrigger);

                const modernCTAAnimation = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#modern-cta-card",
                        start: "top center+=100",
                        toggleActions: "play none none reverse"
                    }
                });

                modernCTAAnimation
                    .from("#modern-cta-title", {
                        y: 30,
                        opacity: 0,
                        duration: 0.8,
                        ease: "power4.out"
                    })
                    .from("#modern-cta-text", {
                        y: 20,
                        opacity: 0,
                        duration: 0.8,
                        ease: "power4.out"
                    }, "-=0.6")
                    .from("#modern-cta-button", {
                        y: 20,
                        opacity: 0,
                        duration: 0.8,
                        ease: "power4.out"
                    }, "-=0.6");
            });
        </script>
    </div>


@endsection

@push('scripts')


<!-- Scripts -->
<script>
    // Mobile menu handling
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script> -->

<script>
    // Initialize Swipers
    const caseStudySwiper = new Swiper('.caseStudySwiper', {
        loop: true,
        autoplay: { delay: 5000 },
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 640: { slidesPerView: 1 }, 1024: { slidesPerView: 1 } }
    });

    const testimonialSwiper = new Swiper('.testimonialSwiper', {
        loop: true,
        autoplay: { delay: 7000 },
        pagination: { el: '.swiper-pagination', clickable: true }
    });

    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);

    // Animate stats counters
    document.querySelectorAll('[data-counter]').forEach(el => {
        gsap.to(el, {
            scrollTrigger: el,
            innerText: el.dataset.counter,
            duration: 2,
            snap: { innerText: 1 },
            ease: "power4.out"
        });
    });

    // Portfolio item animations
    gsap.utils.toArray('.portfolio-item').forEach(item => {
        gsap.from(item, {
            scrollTrigger: item,
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power4.out"
        });
    });

    // Mobile menu toggle
    document.getElementById('mobileMenu').addEventListener('click', () => {
        document.querySelector('.md\\:flex').classList.toggle('hidden');
    });

    // Hero text animation
    gsap.from('h1', { opacity: 0, y: 50, duration: 1, ease: "power4.out" });
    gsap.from('p', { opacity: 0, y: 30, duration: 1, delay: 0.3, ease: "power4.out" });
</script>

<script>
    // Counter Animation
    const counters = document.querySelectorAll('[data-counter]');
    const counterOptions = {
        threshold: 0.5
    };

    const startCounter = (counter) => {
        const target = parseFloat(counter.dataset.counter);
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = current.toFixed(1);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };

        updateCounter();
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, counterOptions);

    counters.forEach(counter => counterObserver.observe(counter));

    // Intersection Observer for fade-in animations
    const fadeElements = document.querySelectorAll('.fade-in');
    const fadeOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100');
                entry.target.classList.remove('opacity-0');
                fadeObserver.unobserve(entry.target);
            }
        });
    }, fadeOptions);

    fadeElements.forEach(element => {
        element.classList.add('opacity-0', 'transition-opacity', 'duration-700');
        fadeObserver.observe(element);
    });

    // Interactive Card Elements
    const interactiveCards = document.querySelectorAll('.interactive-card');
    interactiveCards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.classList.add('transform', 'scale-105', 'shadow-lg');
        });

        card.addEventListener('mouseleave', function () {
            this.classList.remove('transform', 'scale-105', 'shadow-lg');
        });
    });

    // Parallax Scroll Effect
    const parallaxElements = document.querySelectorAll('.parallax');
    let scrollTicking = false;

    window.addEventListener('scroll', () => {
        if (!scrollTicking) {
            window.requestAnimationFrame(() => {
                const scrolled = window.pageYOffset;
                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    element.style.transform = `translateY(${scrolled * speed}px)`;
                });
                scrollTicking = false;
            });
            scrollTicking = true;
        }
    });

    // Form Handling
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = form.querySelector('input[type="email"]');
            const submitButton = form.querySelector('button[type="submit"]');

            if (validateEmail(emailInput.value)) {
                // Success state
                form.classList.add('success');
                emailInput.disabled = true;
                submitButton.innerHTML = 'Thanks! We\'ll be in touch';
                submitButton.disabled = true;
            } else {
                // Error state
                emailInput.classList.add('error');
                // Remove error class after animation
                setTimeout(() => emailInput.classList.remove('error'), 3000);
            }
        });
    });

    // Email Validation
    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Scroll Animation Handler
    let animationTicking = false;

    function handleScrollAnimations() {
        const scrolled = window.scrollY;
        const viewportHeight = window.innerHeight;

        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            const elementTop = element.offsetTop;
            if (scrolled > elementTop - viewportHeight + 100) {
                element.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', () => {
        if (!animationTicking) {
            window.requestAnimationFrame(() => {
                handleScrollAnimations();
                animationTicking = false;
            });
            animationTicking = true;
        }
    });

    // Smooth Scroll for Navigation
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

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', () => {
        handleScrollAnimations();

        // Initialize GSAP animations if available
        if (typeof gsap !== 'undefined') {
            gsap.from('.hero-content', {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: 'power3.out',
                stagger: 0.2
            });
        }
    });
</script>

<script>
    // Initialize Screen Slider with improved options
    const screenSlider = new Swiper('.screen-slider', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        effect: 'slide',
        fadeEffect: {
            crossFade: true
        },
        speed: 1000,
        touchRatio: 1,
        resistance: true,
        resistanceRatio: 0.85,
        touchAngle: 45,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        grabCursor: true,
        keyboard: {
            enabled: true
        },
        on: {
            init: function () {
                console.log('Slider initialized');
            }
        }
    });
</script>

<script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1.5.0/lite-youtube.js"></script>
<script>
    // Instagram Data
    const instagramData = {
        0: {
            name: "TechVision",
            username: "techvision_official",
            avatar: "/api/placeholder/40/40",
            postImage: "/api/placeholder/600/600",
            likes: "2,547",
            caption: "Transforming healthcare through digital innovation. 🏥✨ #HealthTech #Innovation",
            postedAgo: "2 days ago"
        },
        1: {
            name: "EcoSmart",
            username: "ecosmart_global",
            avatar: "/api/placeholder/40/40",
            postImage: "/api/placeholder/600/600",
            likes: "3,892",
            caption: "Building sustainable solutions for a greener tomorrow 🌱 #Sustainability",
            postedAgo: "1 week ago"
        },
        2: {
            name: "FoodieDelight",
            username: "foodiedelight",
            avatar: "/api/placeholder/40/40",
            postImage: "/api/placeholder/600/600",
            likes: "5,123",
            caption: "Experience culinary excellence at its finest 🍽️ #FoodLover",
            postedAgo: "3 days ago"
        },
        3: {
            name: "FitLife",
            username: "fitlife_wellness",
            avatar: "/api/placeholder/40/40",
            postImage: "/api/placeholder/600/600",
            likes: "4,256",
            caption: "Your journey to wellness starts here 💪 #FitnessGoals",
            postedAgo: "5 days ago"
        }
    };

    // YouTube Data
    const youtubeData = {
        0: {
            title: "How We Transformed Healthcare With Digital Innovation",
            videoId: "dQw4w9WgXcQ", // Replace with actual video ID
            views: "24K",
            time: "2 days ago",
            channelName: "TechVision Official",
            channelImg: "/api/placeholder/40/40",
            subscribers: "128K",
            likes: "1.2K"
        },
        1: {
            title: "Sustainable Solutions for a Better Tomorrow",
            videoId: "M7lc1UVf-VE", // Replace with actual video ID
            views: "18K",
            time: "1 week ago",
            channelName: "EcoSmart Global",
            channelImg: "/api/placeholder/40/40",
            subscribers: "95K",
            likes: "956"
        },
        2: {
            title: "The Art of Culinary Excellence",
            videoId: "8lXdyD2Yzls", // Replace with actual video ID
            views: "32K",
            time: "3 days ago",
            channelName: "FoodieDelight",
            channelImg: "/api/placeholder/40/40",
            subscribers: "220K",
            likes: "2.1K"
        },
        3: {
            title: "Transform Your Fitness Journey",
            videoId: "jNQXAC9IVRw", // Replace with actual video ID
            views: "45K",
            time: "5 days ago",
            channelName: "FitLife Wellness",
            channelImg: "/api/placeholder/40/40",
            subscribers: "180K",
            likes: "3.4K"
        }
    };

    // Initialize both tabs on page load
    document.addEventListener('DOMContentLoaded', () => {
        // Instagram Tab Initialization
        const igTabButtons = document.querySelectorAll('.ig-tab-btn');

        igTabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                igTabButtons.forEach(btn => {
                    btn.classList.remove('bg-gradient-to-r', 'from-purple-500', 'to-pink-500', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-600');
                });

                // Add active class to clicked button
                button.classList.remove('bg-gray-100', 'text-gray-600');
                button.classList.add('bg-gradient-to-r', 'from-purple-500', 'to-pink-500', 'text-white');

                // Update Instagram content
                updateInstagramContent(button.dataset.tab);
            });
        });

        // YouTube Tab Initialization
        const ytTabButtons = document.querySelectorAll('.yt-tab-btn');

        ytTabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                ytTabButtons.forEach(btn => {
                    btn.classList.remove('bg-gradient-to-r', 'from-red-500', 'to-red-600', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-600');
                });

                // Add active class to clicked button
                button.classList.remove('bg-gray-100', 'text-gray-600');
                button.classList.add('bg-gradient-to-r', 'from-red-500', 'to-red-600', 'text-white');

                // Update YouTube content
                updateYouTubeContent(button.dataset.yttab);
            });
        });
    });

    // Instagram Content Update Function
    function updateInstagramContent(tabIndex) {
        const data = instagramData[tabIndex];
        const elements = {
            profileImg: document.querySelector('.ig-profile-img'),
            username: document.querySelector('.ig-username'),
            name: document.querySelector('.ig-name'),
            postImg: document.querySelector('.ig-post-img'),
            likes: document.querySelector('.ig-likes'),
            captionUsername: document.querySelector('.ig-caption-username'),
            caption: document.querySelector('.ig-caption'),
            time: document.querySelector('.ig-time')
        };

        // Add fade effect
        Object.values(elements).forEach(el => {
            el.classList.remove('fade-in');
            void el.offsetWidth; // Trigger reflow
            el.classList.add('fade-in');
        });

        // Update content
        elements.profileImg.src = data.avatar;
        elements.username.textContent = data.username;
        elements.name.textContent = data.name;
        elements.postImg.src = data.postImage;
        elements.likes.textContent = `${data.likes} likes`;
        elements.captionUsername.textContent = data.username;
        elements.caption.textContent = data.caption;
        elements.time.textContent = data.postedAgo;
    }

    // YouTube Content Update Function
    function updateYouTubeContent(tabIndex) {
        const data = youtubeData[tabIndex];
        const videoContainer = document.querySelector('.video-container');

        // Create new lite-youtube element
        const newVideo = document.createElement('lite-youtube');
        newVideo.setAttribute('videoid', data.videoId);
        newVideo.setAttribute('playlabel', 'Play');
        newVideo.classList.add('absolute', 'inset-0', 'w-full', 'h-full');

        // Clear and update video container
        videoContainer.innerHTML = '';
        videoContainer.appendChild(newVideo);

        // Update other elements with fade effect
        const elements = {
            title: document.querySelector('.yt-title'),
            views: document.querySelector('.yt-views'),
            time: document.querySelector('.yt-time'),
            channelName: document.querySelector('.yt-channel-name'),
            subscribers: document.querySelector('.yt-subscribers'),
            likes: document.querySelector('.yt-likes'),
            channelImg: document.querySelector('.yt-channel-img')
        };

        // Add fade effect
        Object.values(elements).forEach(el => {
            el.classList.remove('fade-in');
            void el.offsetWidth; // Trigger reflow
            el.classList.add('fade-in');
        });

        // Update content
        elements.title.textContent = data.title;
        elements.views.textContent = `${data.views} views`;
        elements.time.textContent = data.time;
        elements.channelName.textContent = data.channelName;
        elements.subscribers.textContent = `${data.subscribers} subscribers`;
        elements.likes.textContent = data.likes;
        elements.channelImg.src = data.channelImg;
    }
</script>

<!-- <script>
    // Campaign Data
    const campaignData = {
        0: {
            client: "Nike",
            title: "Nike Summer Collection 2024",
            period: "Campaign Period: Apr 15 - Jun 30, 2024",
            status: "Active",
            budget: "$50,000",
            metrics: {
                impressions: {
                    current: "2.4M",
                    previous: "1.8M",
                    growth: "23%"
                },
                engagement: {
                    current: "4.8%",
                    previous: "4.2%",
                    growth: "12%"
                },
                conversions: {
                    current: "28.5K",
                    previous: "23.1K",
                    growth: "18%"
                },
                roi: {
                    current: "342%",
                    previous: "315%",
                    growth: "15%"
                }
            },
            ad: {
                title: "Summer Sport Collection",
                image: "/api/placeholder/600/338",
                ctr: "4.2%",
                cpc: "$0.82"
            }
        },
        1: {
            client: "Adidas",
            title: "Adidas Performance 2024",
            period: "Campaign Period: Mar 1 - May 31, 2024",
            status: "Active",
            budget: "$45,000",
            metrics: {
                impressions: {
                    current: "1.9M",
                    previous: "1.5M",
                    growth: "21%"
                },
                engagement: {
                    current: "4.5%",
                    previous: "3.8%",
                    growth: "16%"
                },
                conversions: {
                    current: "22.3K",
                    previous: "18.7K",
                    growth: "16%"
                },
                roi: {
                    current: "315%",
                    previous: "292%",
                    growth: "13%"
                }
            },
            ad: {
                title: "Performance Essentials",
                image: "/api/placeholder/600/338",
                ctr: "3.8%",
                cpc: "$0.78"
            }
        },
        2: {
            client: "Tesla",
            title: "Tesla Model Y Campaign",
            period: "Campaign Period: May 1 - Jul 31, 2024",
            status: "Scheduled",
            budget: "$75,000",
            metrics: {
                impressions: {
                    current: "3.2M",
                    previous: "2.5M",
                    growth: "28%"
                },
                engagement: {
                    current: "5.2%",
                    previous: "4.1%",
                    growth: "27%"
                },
                conversions: {
                    current: "32.1K",
                    previous: "25.4K",
                    growth: "26%"
                },
                roi: {
                    current: "385%",
                    previous: "328%",
                    growth: "17%"
                }
            },
            ad: {
                title: "Model Y Launch",
                image: "/api/placeholder/600/338",
                ctr: "4.8%",
                cpc: "$1.12"
            }
        }
    };

    // Initialize campaign dashboard
    document.addEventListener('DOMContentLoaded', () => {
        const campaignTabs = document.querySelectorAll('.campaign-tab-btn');

        campaignTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                campaignTabs.forEach(t => {
                    t.classList.remove('bg-gradient-to-r', 'from-blue-500', 'to-cyan-500', 'text-white', 'shadow-lg');
                    t.classList.add('bg-white', 'text-gray-700');
                });

                // Add active class to clicked tab
                tab.classList.remove('bg-white', 'text-gray-700');
                tab.classList.add('bg-gradient-to-r', 'from-blue-500', 'to-cyan-500', 'text-white', 'shadow-lg', 'shadow-blue-500/20');

                // Update dashboard content
                updateCampaignContent(tab.dataset.campaign);
            });
        });
    });

    function updateCampaignContent(campaignIndex) {
        const data = campaignData[campaignIndex];

        // Update campaign header
        document.querySelector('.campaign-title').textContent = data.title;
        document.querySelector('.campaign-date').textContent = data.period;
        document.querySelector('.campaign-status').textContent = data.status;
        document.querySelector('.campaign-budget').textContent = `Budget: ${data.budget}`;

        // Update metrics
        document.querySelector('.campaign-impressions').textContent = data.metrics.impressions.current;
        document.querySelector('.campaign-engagement').textContent = data.metrics.engagement.current;
        document.querySelector('.campaign-conversions').textContent = data.metrics.conversions.current;
        document.querySelector('.campaign-roi').textContent = data.metrics.roi.current;

        // Update ad preview
        document.querySelector('.campaign-image').src = data.ad.image;
        document.querySelector('.campaign-ad-title').textContent = data.ad.title;
        document.querySelector('.campaign-ad-stats').textContent = `CTR: ${data.ad.ctr} • CPC: ${data.ad.cpc}`;

        // Add fade effect to updated elements
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach(el => {
            el.classList.remove('fade-in');
            void el.offsetWidth;
            el.classList.add('fade-in');
        });
    }
</script> -->
<script>
    const campaignData = {
        0: { // Nike
            campaigns: [
                {
                    image: "/api/placeholder/400/500",
                    title: "Summer Collection",
                    metric: "Engagement Rate: 4.8%"
                },
                {
                    image: "/api/placeholder/400/500",
                    title: "Sport Innovation",
                    metric: "Views: 3.2M"
                },
                {
                    image: "/api/placeholder/400/500",
                    title: "Athlete Series",
                    metric: "ROI: 285%"
                }
            ]
        },
        1: { // Adidas
            campaigns: [
                {
                    image: "/api/placeholder/400/500",
                    title: "Urban Style",
                    metric: "Engagement Rate: 5.2%"
                },
                {
                    image: "/api/placeholder/400/500",
                    title: "Performance Line",
                    metric: "Views: 2.8M"
                },
                {
                    image: "/api/placeholder/400/500",
                    title: "Sustainability",
                    metric: "ROI: 312%"
                }
            ]
        },
        2: { // Tesla
            campaigns: [
                {
                    image: "/api/placeholder/400/500",
                    title: "Model Y Launch",
                    metric: "Engagement Rate: 6.1%"
                },
                {
                    image: "/api/placeholder/400/500",
                    title: "Innovation Story",
                    metric: "Views: 4.5M"
                },
                {
                    image: "/api/placeholder/400/500",
                    title: "Future Vision",
                    metric: "ROI: 425%"
                }
            ]
        }
    };

    document.addEventListener('DOMContentLoaded', () => {
        const clientButtons = document.querySelectorAll('.client-btn');

        clientButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active state
                clientButtons.forEach(btn => {
                    const innerDiv = btn.querySelector('div:last-child');
                    innerDiv.classList.remove('border-purple-300', 'border-blue-300', 'border-amber-300');
                });

                const innerDiv = button.querySelector('div:last-child');
                innerDiv.classList.add('border-purple-300');

                // Update campaign grid
                updateCampaigns(button.dataset.client);
            });
        });

        // Initialize with first client
        updateCampaigns('0');
    });

    function updateCampaigns(clientIndex) {
        const data = campaignData[clientIndex];
        const grid = document.querySelector('.campaign-grid');

        // Clear current content
        grid.innerHTML = '';

        // Add new campaign cards
        data.campaigns.forEach(campaign => {
            const card = document.createElement('div');
            card.className = 'campaign-card group relative aspect-[4/5] rounded-2xl overflow-hidden cursor-pointer hover:scale-[1.02] transition-all duration-300 fade-scale';

            card.innerHTML = `
            <img src="${campaign.image}" alt="${campaign.title}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        <h3 class="text-white font-bold text-xl mb-2">${campaign.title}</h3>
                        <p class="text-gray-200 text-sm">${campaign.metric}</p>
                    </div>
                </div>
            </div>
        `;

            grid.appendChild(card);
        });
    }
</script>

<script>
    // Client Switching Logic
    function switchClient(index) {
        const tabs = document.querySelectorAll('.client-tab');
        const contents = document.querySelectorAll('.case-study-content');

        tabs.forEach(tab => tab.classList.remove('active'));
        contents.forEach(content => content.classList.remove('active'));

        tabs[index].classList.add('active');
        contents[index].classList.add('active');
    }

    // Slide Navigation Logic
    function initSlider() {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.slide-indicator');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach(slide => {
                slide.classList.remove('active');
            });
            indicators.forEach(indicator => {
                indicator.classList.remove('active');
            });

            slides[index].classList.add('active');
            indicators[index].classList.add('active');
        }

        // Add click events to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });

        // Auto-advance slides
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000);

        // Show first slide
        showSlide(0);
    }

    // Initialize slider when DOM is loaded
    document.addEventListener('DOMContentLoaded', initSlider);
</script>

<script>
    // First, define the Lite YouTube Embed component
    class LiteYTEmbed extends HTMLElement {
        constructor() {
            super();
            this.isIframeLoaded = false;
        }

        connectedCallback() {
            this.videoId = this.getAttribute('videoid');

            this.addEventListener('click', () => {
                if (!this.isIframeLoaded) {
                    // Stop autoplay when video is clicked
                    if (window.swiper) {
                        window.swiper.autoplay.stop();
                        // Disable autoplay completely
                        window.swiper.params.autoplay.enabled = false;
                    }

                    const iframe = document.createElement('iframe');
                    iframe.width = '100%';
                    iframe.height = '100%';
                    iframe.title = 'YouTube video player';
                    iframe.frameBorder = '0';
                    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                    iframe.allowFullscreen = true;
                    iframe.src = `https://www.youtube-nocookie.com/embed/${this.videoId}?autoplay=1&enablejsapi=1`;

                    // Remove background image and play button
                    this.style.backgroundImage = '';
                    const playBtn = this.querySelector('.lty-playbtn');
                    if (playBtn) {
                        playBtn.remove();
                    }

                    this.appendChild(iframe);
                    this.isIframeLoaded = true;

                    // Listen for video end
                    iframe.addEventListener('load', () => {
                        iframe.contentWindow.postMessage(JSON.stringify({
                            event: 'listening',
                            id: this.videoId
                        }), '*');
                    });
                }
            });

            // Set preview image
            const playBtn = document.createElement('button');
            playBtn.className = 'lty-playbtn';
            this.appendChild(playBtn);
        }
    }
    customElements.define('lite-youtube', LiteYTEmbed);

    // Add message listener for video events
    window.addEventListener('message', (e) => {
        try {
            const data = JSON.parse(e.data);
            if (data.event === 'onStateChange' && data.info === 0) { // Video ended
                if (window.swiper) {
                    // Re-enable and start autoplay when video ends
                    window.swiper.params.autoplay.enabled = true;
                    window.swiper.autoplay.start();
                }
            }
        } catch (err) {
            // Handle parsing error
        }
    });

    // Initialize Swiper
    window.swiper = new Swiper('.video-testimonials', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        on: {
            slideChange: function () {
                // Find any active videos and pause them when sliding
                const activeVideos = document.querySelectorAll('lite-youtube iframe');
                activeVideos.forEach(video => {
                    const videoParent = video.closest('lite-youtube');
                    if (videoParent && !videoParent.closest('.swiper-slide-active')) {
                        video.src = video.src; // This effectively resets/stops the video
                    }
                });
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate hero elements
        gsap.to('.dm-hero-element', {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out"
        });

        // Stat counter animation
        const dmAnimateCounter = (id, target, duration = 2) => {
            const element = document.getElementById(id);
            const start = 0;
            const increment = target / (duration * 60); // 60fps
            let current = 0;

            const dmUpdateCounter = () => {
                current += increment;
                if (current >= target) {
                    element.textContent = id === 'dm-stat2' ? `${target}%` : id === 'dm-stat3' ? `${target}x` : target.toLocaleString();
                } else {
                    element.textContent = id === 'dm-stat2' ? `${Math.ceil(current)}%` : id === 'dm-stat3' ? `${Math.ceil(current)}x` : Math.ceil(current).toLocaleString();
                    requestAnimationFrame(dmUpdateCounter);
                }
            };

            dmUpdateCounter();
        };

        // Animate stats when in view
        gsap.to('.dm-stat-counter', {
            opacity: 1,
            y: 0,
            duration: 0.6,
            stagger: 0.2,
            ease: "power2.out",
            onComplete: () => {
                dmAnimateCounter('dm-stat1', 250000);
                dmAnimateCounter('dm-stat2', 63);
                dmAnimateCounter('dm-stat3', 4);
            }
        });

        // Animate client logos
        gsap.to('.dm-client-logo', {
            opacity: 1,
            y: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: "power2.out",
            delay: 0.8
        });

        // Add scroll trigger for sections below hero
        ScrollTrigger.batch('.dm-stat-counter', {
            onEnter: batch => gsap.to(batch, {
                opacity: 1,
                y: 0,
                stagger: 0.15,
                duration: 0.6
            }),
            start: "top 80%"
        });
    });

    // Function to update industry content
    function dmUpdateIndustryContent(industry) {
        // This function could be used to dynamically change content based on industry
        // For demonstration purposes only - would be implemented based on site architecture
        const dmIndustries = {
            healthcare: {
                title: "Digital Marketing Solutions for Healthcare",
                description: "Elevate your healthcare practice with data-driven marketing strategies that increase patient acquisition and build trust in your brand.",
                stats: [250000, 63, 4],
                statLabels: ["Patients Reached", "Conversion Rate", "ROI Increase"],
                clients: ["Mayo Clinic", "Cleveland Clinic", "Johns Hopkins", "Mount Sinai", "NYU Langone"]
            },
            ecommerce: {
                title: "Digital Marketing Solutions for E-Commerce",
                description: "Boost your online store with targeted campaigns that increase traffic, conversion rates and customer lifetime value.",
                stats: [1500000, 82, 6],
                statLabels: ["Products Sold", "Customer Retention", "Revenue Growth"],
                clients: ["Shopify", "Magento", "WooCommerce", "BigCommerce", "Salesforce Commerce"]
            },
            // Add more industries as needed
        };

        // Implementation would go here
    }
</script>

@endpush
