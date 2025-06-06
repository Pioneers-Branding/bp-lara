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

        /* Custom pagination styles */
        .pagination-custom {
            --swiper-pagination-color: white;
            --swiper-pagination-bullet-inactive-color: #4b5563;
            /* gray-600 */
            --swiper-pagination-bullet-inactive-opacity: 0.8;
            --swiper-pagination-bullet-size: 10px;
            --swiper-pagination-bullet-horizontal-gap: 6px;
        }

        .pagination-custom .swiper-pagination-bullet {
            background: #4b5563;
            /* Gray inactive bullets */
            opacity: 0.5;
        }

        .pagination-custom .swiper-pagination-bullet-active {
            background: white;
            /* White active bullet */
            opacity: 1;
        }
    </style>
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll {
            animation: scroll 20s linear infinite;
        }

        .carousel:hover .animate-scroll {
            animation-play-state: paused;
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
        .contact-section {
            position: relative;
            min-height: 100vh;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .map-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: grayscale(0.8) brightness(0.9);
        }

        .contact-form-container {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 32px rgba(0, 128, 128, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .contact-form-container:hover {
            box-shadow: 0 12px 48px rgba(0, 128, 128, 0.3);
            /* transform: translateY(-5px); */
        }

        .teal-input {
            border-bottom: 2px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .teal-input:focus {
            border-color: #14b8a6;
            box-shadow: 0 4px 6px -1px rgba(20, 184, 166, 0.1);
        }

        .teal-btn {
            background-color: #14b8a6;
            color: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .teal-btn:hover {
            background-color: #0d9488;
            transform: translateY(-2px);
        }

        .teal-btn::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }

        .teal-btn:hover::after {
            left: 100%;
        }

        .invalid-feedback {
            color: #e53e3e;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: none;
        }

        .invalid-input {
            border-color: #e53e3e !important;
        }

        .floating-label {
            position: absolute;
            pointer-events: none;
            left: 12px;
            top: 12px;
            transition: 0.2s ease all;
            color: #6b7280;
        }

        .teal-input:focus~.floating-label,
        .teal-input:not(:placeholder-shown)~.floating-label {
            top: -10px;
            left: 10px;
            font-size: 0.75rem;
            color: #14b8a6;
            background-color: white;
            padding: 0 4px;
        }

        .success-checkmark {
            display: none;
            color: #14b8a6;
            margin-left: 8px;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(20, 184, 166, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(20, 184, 166, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(20, 184, 166, 0);
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        .contact-info-item {
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateX(5px);
            color: #14b8a6;
        }

        @media (max-width: 768px) {
            .contact-form-container {
                margin: 1rem;
            }
        }
    </style>
    <style>
        /* Custom teal glow effect on hover */
        .hover\:shadow-\[0_0_15px_rgba\(45\,212\,191\,0\.5\)\]:hover {
            box-shadow: 0 0 15px rgba(45, 212, 191, 0.5);
        }
    </style>
    <style>
        /* Grid pattern background */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        #modal-video-container {
            width: 100%;
            height: 100%;
        }
    </style>



    <div class="h-16"></div>

    <!-- Hero Section -->
    <section class="relative min-h-[85vh] bg-gradient-to-b from-gray-50 to-white overflow-hidden">
        <!-- Grid Pattern Background -->
        <div class="absolute inset-0 bg-grid-pattern"></div>

        <!-- Gradient Orbs - Responsive positioning -->
        <div
            class="absolute top-1/4 left-1/4 w-48 md:w-72 lg:w-96 h-48 md:h-72 lg:h-96 bg-teal-400/20 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 right-1/4 w-48 md:w-72 lg:w-96 h-48 md:h-72 lg:h-96 bg-blue-400/20 rounded-full blur-3xl">
        </div>

        <!-- Main Content -->
        <div class="container max-w-[1500px] mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 relative">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <!-- Left Content Column -->
                <div class="w-full lg:w-1/2 text-left space-y-6 sm:space-y-8 pb-4 lg:pb-0">
                    <!-- Trust Badge - Responsive padding and text -->
                    <div
                        class="inline-flex items-center px-3 sm:px-4 py-1.5 sm:py-2 bg-white/50 backdrop-blur-sm border border-gray-200 rounded-full shadow-sm">
                        <span class="flex items-center gap-2">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-500 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-teal-600"></span>
                            </span>
                            <span class="text-xs sm:text-sm font-semibold text-gray-700">Trusted by 200+ Healthcare
                                Leaders</span>
                        </span>
                    </div>

                    <!-- Main Heading - Responsive text sizes -->
                    <div class="space-y-3 sm:space-y-4">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 tracking-tight">
                            Transform Healthcare Through
                            <span class="relative mt-1 sm:mt-2 block">
                                <span
                                    class="absolute -inset-1 bg-gradient-to-r from-teal-500/20 to-blue-500/20 blur-xl"></span>
                                <span
                                    class="relative bg-gradient-to-r from-teal-600 to-blue-600 text-transparent bg-clip-text">
                                    Digital Innovation
                                </span>
                            </span>
                        </h1>
                        <p class="text-lg sm:text-xl text-gray-600 max-w-xl">
                            Revolutionize patient care with AI-powered solutions. Achieve
                            <span class="font-semibold text-gray-800">45% reduced wait times</span> and
                            <span class="font-semibold text-gray-800">94% satisfaction rates</span>.
                        </p>
                    </div>

                    <!-- CTA Buttons - Stack on mobile -->
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                        <button
                            class="group px-6 sm:px-8 py-3 bg-gradient-to-r from-teal-600 to-blue-600 text-white rounded-lg shadow-lg shadow-blue-500/20 hover:shadow-xl hover:shadow-blue-500/30 transition-all">
                            <span class="flex items-center justify-center">
                                Start Free Trial
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </span>
                        </button>
                        <button
                            class="px-6 sm:px-8 py-3 bg-white text-gray-700 rounded-lg shadow-md border border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all">
                            Watch Demo
                        </button>
                    </div>
                </div>

                <!-- Right Image Column -->
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
                    <div class="relative">
                        <!-- Shadow/glow effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-blue-500/20 rounded-xl blur-lg -z-10 scale-105">
                        </div>
                        <!-- Image -->
                        <img src="https://img.freepik.com/free-photo/magnifying-glass-with-seo-concepts_1134-81.jpg?t=st=1744637135~exp=1744640735~hmac=4a2559bd7274716c88227a9e499f2b65f1fafc75819e6be48dfdddd83e2b0a5c&w=1800"
                            alt="Healthcare Digital Innovation"
                            class="w-full max-w-2xl h-auto md:h-96 object-cover rounded-xl shadow-lg" />
                    </div>
                </div>
            </div>

            <!-- Stats Section - Responsive grid -->
            <div class="max-w-6xl mx-auto mt-12 sm:mt-16 lg:mt-20">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <!-- Stat Card 1 -->
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-teal-500/10 to-blue-500/10 rounded-xl blur-xl group-hover:blur-2xl transition-all">
                        </div>
                        <div
                            class="relative p-4 sm:p-6 bg-white/70 backdrop-blur-sm rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all">
                            <div class="text-3xl sm:text-4xl font-bold text-gray-900 mb-1 count-up" data-value="45">0
                            </div>
                            <div class="text-xs sm:text-sm font-medium text-teal-600">Faster Service</div>
                        </div>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-teal-500/10 to-blue-500/10 rounded-xl blur-xl group-hover:blur-2xl transition-all">
                        </div>
                        <div
                            class="relative p-4 sm:p-6 bg-white/70 backdrop-blur-sm rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all">
                            <div class="text-3xl sm:text-4xl font-bold text-gray-900 mb-1 count-up" data-value="94">0
                            </div>
                            <div class="text-xs sm:text-sm font-medium text-blue-600">Patient Satisfaction</div>
                        </div>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-teal-500/10 to-blue-500/10 rounded-xl blur-xl group-hover:blur-2xl transition-all">
                        </div>
                        <div
                            class="relative p-4 sm:p-6 bg-white/70 backdrop-blur-sm rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all">
                            <div class="text-3xl sm:text-4xl font-bold text-gray-900 mb-1 count-up" data-value="300">0
                            </div>
                            <div class="text-xs sm:text-sm font-medium text-teal-600">ROI Average</div>
                        </div>
                    </div>

                    <!-- Stat Card 4 -->
                    <div class="relative group">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-teal-500/10 to-blue-500/10 rounded-xl blur-xl group-hover:blur-2xl transition-all">
                        </div>
                        <div
                            class="relative p-4 sm:p-6 bg-white/70 backdrop-blur-sm rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-all">
                            <div class="text-3xl sm:text-4xl font-bold text-gray-900 mb-1 count-up" data-value="15">0
                            </div>
                            <div class="text-xs sm:text-sm font-medium text-blue-600">Industry Awards</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="bg-gradient-to-b from-white via-teal-50/30 to-white py-8 pb-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="container mx-auto">
                <div class="mb-8 text-center">
                    <!-- <h4 class="text-xs text-teal-600 font-semibold tracking-wide uppercase mb-2">Why Choose Us</h4> -->
                </div>
                <div class="flex flex-col items-center w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-teal-600">
                        <path fill-rule="evenodd"
                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <h2 class="my-8 text-2xl font-bold text-gray-900 md:text-4xl mb-12">Transform Your Digital Presence
                    </h2>
                    <!-- <p class="text-gray-700">We have built many products and some of them are below</p> -->
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Feature 1 -->
                    <div
                        class="border rounded-lg p-4 hover:bg-gradient-to-br hover:from-teal-50 hover:to-teal-100/50 transition-all duration-300 group hover:border-teal-200 hover:shadow-lg">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-white/80 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <div class="ml-3 text-base font-semibold text-gray-800">SEO Excellence</div>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600 ml-12">Climb the search rankings with our smart,
                            data-driven SEO strategies and optimized keywords that drive traffic and leads.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="border rounded-lg p-4 hover:bg-gradient-to-br hover:from-teal-50 hover:to-teal-100/50 transition-all duration-300 group hover:border-teal-200 hover:shadow-lg">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-white/80 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                            </div>
                            <div class="ml-3 text-base font-semibold text-gray-800">Performance Analytics</div>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600 ml-12">Track your success with real-time
                            insights and detailed reporting, helping you make informed decisions to improve your
                            campaigns.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="border rounded-lg p-4 hover:bg-gradient-to-br hover:from-teal-50 hover:to-teal-100/50 transition-all duration-300 group hover:border-teal-200 hover:shadow-lg">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-white/80 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                            </div>
                            <div class="ml-3 text-base font-semibold text-gray-800">Social Media Growth</div>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600 ml-12">Connect with your audience and build a
                            strong brand presence across all major social platforms to grow your business.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="border rounded-lg p-4 hover:bg-gradient-to-br hover:from-teal-50 hover:to-teal-100/50 transition-all duration-300 group hover:border-teal-200 hover:shadow-lg">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-white/80 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-3 text-base font-semibold text-gray-800">Video Marketing</div>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600 ml-12">Engage your audience with compelling
                            video content that captures attention and turns viewers into loyal customers.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="border rounded-lg p-4 hover:bg-gradient-to-br hover:from-teal-50 hover:to-teal-100/50 transition-all duration-300 group hover:border-teal-200 hover:shadow-lg">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-white/80 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-3 text-base font-semibold text-gray-800">Email Campaigns</div>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600 ml-12">Deliver personalized email marketing
                            strategies that build relationships, engage customers, and drive conversions.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="border rounded-lg p-4 hover:bg-gradient-to-br hover:from-teal-50 hover:to-teal-100/50 transition-all duration-300 group hover:border-teal-200 hover:shadow-lg">
                        <div class="flex items-center mb-3">
                            <div class="p-2 bg-teal-50 rounded-lg group-hover:bg-white/80 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div class="ml-3 text-base font-semibold text-gray-800">Performance Tracking</div>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600 ml-12">Measure what matters with advanced
                            analytics and conversion tracking tools that show the ROI of every campaign.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-gradient-to-br from-gray-800 via-teal-800 to-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col items-center w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                    class="w-6 h-6 text-teal-600">
                    <path fill-rule="evenodd"
                        d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                        clip-rule="evenodd"></path>
                </svg>

                <h2 class="my-8 text-2xl font-bold text-gray-100 md:text-4xl mb-12">Explore our offerings
                </h2>
                <!-- <p class="text-gray-700">We have built many products and some of them are below</p> -->
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-3 gap-4 md:gap-5">
                <!-- Featured number - SEO Excellence -->
                <div
                    class="col-span-1 row-span-1 bg-zinc-900 rounded-3xl p-6 overflow-hidden transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <h2 class="text-teal-400 text-6xl font-bold mb-2">140+</h2>
                    <p class="text-zinc-400 text-xl leading-tight">
                        Successful SEO <br />campaigns
                    </p>
                </div>

                <!-- Services Icons -->
                <div
                    class="col-span-1 row-span-1 bg-zinc-900 rounded-3xl p-6 overflow-hidden transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <div class="flex flex-wrap gap-3 justify-center">
                        <div class="p-3 bg-black rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div class="p-3 bg-zinc-800 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-200" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            </svg>
                        </div>
                        <div class="p-3 bg-zinc-700 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                            </svg>
                        </div>
                        <div class="p-3 bg-teal-400/20 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-zinc-400 text-center mt-6">
                        6 digital <br />marketing services
                    </p>
                </div>

                <!-- Traffic increase number -->
                <div
                    class="col-span-1 row-span-1 bg-zinc-900 rounded-3xl p-6 flex flex-col justify-between transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <h2 class="text-teal-400 text-6xl font-bold">85%</h2>
                    <p class="text-zinc-400 text-xl">
                        Traffic <br />increase
                    </p>
                </div>

                <!-- Large reviews section -->
                <div
                    class="col-span-3 bg-zinc-900 rounded-3xl p-6 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <div class="flex mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-teal-400 mx-0.5">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-teal-400 mx-0.5">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-teal-400 mx-0.5">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-teal-400 mx-0.5">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-teal-400 mx-0.5">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h2 class="text-white text-4xl font-bold my-2">Best in the Business !</h2>
                    <p class="text-zinc-400 text-lg">400+ satisfied clients</p>
                </div>

                <!-- Image Grid Items -->
                <div
                    class="col-span-1 bg-zinc-900 rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <img src="https://img.freepik.com/free-photo/social-media-marketing-concept-marketing-with-applications_23-2150063172.jpg?t=st=1744634159~exp=1744637759~hmac=54bcd1b847e7194b111cae8be029be5eac8b07e2f95a2bfbd2415049f401c988&w=1480"
                        alt="SEO Services" class="w-full h-full object-cover" />
                </div>

                <div
                    class="col-span-1 bg-zinc-900 rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <img src="https://img.freepik.com/free-photo/ui-ux-representations-with-laptop_23-2150201871.jpg?t=st=1744634087~exp=1744637687~hmac=f4d35ea1d6b9314c01a2fc2e1198d3aa46b8ed381d19aaa06ccc8e7eb80ef865&w=1800"
                        alt="Analytics Dashboard" class="w-full h-full object-cover" />
                </div>

                <!-- Video Marketing - Teal Version -->
                <div
                    class="col-span-1 bg-teal-800 rounded-3xl p-6 flex flex-col justify-center transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <div class="p-3 bg-black/20 inline-block rounded-xl mb-4 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold">Video Marketing</h3>
                    <p class="text-white/80 mt-2">Engage your audience with compelling video content</p>
                </div>

                <!-- Wide Image -->
                <div
                    class="col-span-2 bg-zinc-900 rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <img src="https://img.freepik.com/premium-photo/google-icon-screen-smartphone-mobile-phone-3d-render_41204-21728.jpg?w=1800"
                        alt="Digital Marketing Services" class="w-full h-64 object-cover" />
                </div>

                <!-- Additional Service Boxes -->
                <!-- Email Marketing -->
                <div
                    class="col-span-1 bg-teal-900/50 rounded-3xl p-6 flex flex-col justify-center transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <div class="p-3 bg-black/20 inline-block rounded-xl mb-4 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold">Email Marketing</h3>
                    <p class="text-white/80 mt-2">Drive conversions with personalized campaigns</p>
                </div>

                <!-- Social Media -->
                <div
                    class="col-span-1 bg-zinc-900 rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <img src="https://img.freepik.com/premium-photo/illustration-abstract-link-network-app-social-media_1148129-3137.jpg?w=2000"
                        alt="Social Media Marketing" class="w-full h-full object-cover" />
                </div>

                <!-- Content Marketing -->
                <div
                    class="col-span-1 bg-teal-700/40 rounded-3xl p-6 flex flex-col justify-center transition-all duration-300 hover:shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <div class="p-3 bg-black/20 inline-block rounded-xl mb-4 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-200" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <h3 class="text-white text-xl font-bold">Content Marketing</h3>
                    <p class="text-white/80 mt-2">Build authority with valuable content</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <div id="portfolio" class="p-4 min-h-screen relative ">
        <!-- Background gradients -->
        <!-- <div aria-hidden="true" class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-20">
                <div class="blur-[46px] h-56 bg-gradient-to-br to-purple-400 from-blue-700"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-teal-600"></div>
            </div> -->

        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="mt-12 text-gray-900">
                <div class="flex flex-col items-center w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-teal-600">
                        <path fill-rule="evenodd"
                            d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <h2 class="my-8 text-2xl font-bold text-gray-900 md:text-4xl">Our Work</h2>
                    <p class="text-gray-700">We have built many products and some of them are below</p>
                </div>
            </div>

            <!-- Tab Interface -->
            <div class="mt-8">
                <div class="flex space-x-4 overflow-x-auto no-scrollbar border-b border-gray-300">
                    <button id="tab-all"
                        class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900 border-b-2 border-indigo-600 focus:outline-none">
                        All
                    </button>
                    <button id="tab-web"
                        class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 focus:outline-none">
                        Web
                    </button>
                    <button id="tab-mobile"
                        class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 focus:outline-none">
                        Mobile
                    </button>
                    <button id="tab-api"
                        class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 focus:outline-none">
                        API
                    </button>
                </div>

                <!-- Card Sections -->
                <div class="mt-8">
                    <!-- All Tab Content -->
                    <div id="content-all" class="tab-content">
                        <div
                            class="grid divide-x divide-y divide-teal-200 overflow-hidden rounded-3xl border border-teal-200 text-gray-600 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                            <!-- Card 1 -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/164986/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="Xyz.com Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            Xyz.com
                                        </h5>
                                        <p class="text-gray-500 text-xs">Platform to convert Domains into Content
                                            websites.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120853/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="ABC.com Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            ABC.com
                                        </h5>
                                        <p class="text-gray-500 text-xs">Platform to create dynamic widgets for
                                            websites.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120852/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="ASD.com Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            ASD.com
                                        </h5>
                                        <p class="text-gray-500 text-xs">API SaaS Platform that provides API Suite to
                                            help you
                                            ship
                                            fast.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120850/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="TMK.co Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            TMK.co
                                        </h5>
                                        <p class="text-gray-500 text-xs">Chrome Extension that lets you add ChatGPT on
                                            any
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120850/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="TMK.co Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            TMK.co
                                        </h5>
                                        <p class="text-gray-500 text-xs">Chrome Extension that lets you add ChatGPT on
                                            any
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120850/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="TMK.co Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            TMK.co
                                        </h5>
                                        <p class="text-gray-500 text-xs">Chrome Extension that lets you add ChatGPT on
                                            any
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120850/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="TMK.co Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            TMK.co
                                        </h5>
                                        <p class="text-gray-500 text-xs">Chrome Extension that lets you add ChatGPT on
                                            any
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/120850/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="TMK.co Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            TMK.co
                                        </h5>
                                        <p class="text-gray-500 text-xs">Chrome Extension that lets you add ChatGPT on
                                            any
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Web Tab Content -->
                    <div id="content-web" class="tab-content hidden">
                        <div
                            class="grid divide-x divide-y divide-gray-300 overflow-hidden rounded-3xl border border-gray-300 text-gray-600 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                            <!-- Web Project Cards -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/164986/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="WebProject1 Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            WebProject1
                                        </h5>
                                        <p class="text-gray-500 text-xs">Responsive web application with modern UI/UX.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more web project cards as needed -->
                        </div>
                    </div>

                    <!-- Mobile Tab Content -->
                    <div id="content-mobile" class="tab-content hidden">
                        <div
                            class="grid divide-x divide-y divide-gray-300 overflow-hidden rounded-3xl border border-gray-300 text-gray-600 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                            <!-- Mobile Project Cards -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/164986/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="MobileProject1 Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            MobileProject1
                                        </h5>
                                        <p class="text-gray-500 text-xs">Cross-platform mobile app with React Native.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more mobile project cards as needed -->
                        </div>
                    </div>

                    <!-- API Tab Content -->
                    <div id="content-api" class="tab-content hidden">
                        <div
                            class="grid divide-x divide-y divide-gray-300 overflow-hidden rounded-3xl border border-gray-300 text-gray-600 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                            <!-- API Project Cards -->
                            <div
                                class="group relative bg-gray-50 transition hover:z-[1] hover:shadow-xl hover:shadow-gray-600/10">
                                <div class="relative space-y-8 py-12 p-8">
                                    <img loading="lazy" src="https://www.svgrepo.com/show/164986/logo.svg" loading="lazy"
                                        width="200" height="200" class="w-12 h-12 rounded-full"
                                        style="color:transparent" alt="APIProject1 Logo">
                                    <div class="space-y-2">
                                        <h5
                                            class="text-xl font-semibold text-teal-800 transition group-hover:text-teal-600">
                                            APIProject1
                                        </h5>
                                        <p class="text-gray-500 text-xs">RESTful API service with comprehensive
                                            documentation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more API project cards as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Case studies -->
    <section class="max-w-7xl mx-auto px-6 pb-20">
        <!-- Header -->
        <div class="mb-8  w-full text-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-teal-600 mx-auto mb-6">
                <path fill-rule="evenodd"
                    d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                    clip-rule="evenodd"></path>
            </svg>
            <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">Case Studies</h2>
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

    <!-- Testimonials Section -->
    <div class=" px-4 pb-16 pt-10 bg-gradient-to-br from-gray-900 via-teal-800 to-gray-800">
        <div class="max-w-7xl mx-auto container">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="w-10 h-10 text-teal-300 mx-auto mb-6">
                    <path fill-rule="evenodd"
                        d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                        clip-rule="evenodd"></path>
                </svg>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    What Our Clients Say
                </h2>
                <div class="w-24 h-1 bg-teal-500 mx-auto mb-6 rounded-full"></div>
                <p class="text-teal-100">
                    Hear success stories directly from our clients who have transformed their businesses with our
                    solutions.
                </p>
            </div>

            <!-- Video Slider -->
            <div class="swiper video-testimonials">
                <div class="swiper-wrapper pb-12">
                    <!-- Video 1 -->
                    <div class="swiper-slide px-4">
                        <div
                            class="bg-gray-900 rounded-2xl shadow-xl p-6 border border-gray-700 hover:border-teal-500 transition-all duration-300">
                            <div class="aspect-video rounded-xl overflow-hidden">
                                <lite-youtube videoid="dQw4w9WgXcQ"
                                    style="background-image: url('https://i.ytimg.com/vi/dQw4w9WgXcQ/hqdefault.jpg');"
                                    class="rounded-xl"></lite-youtube>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-700 rounded-full flex items-center justify-center mr-3 text-teal-300 font-bold text-lg">
                                    SJ</div>
                                <div>
                                    <h3 class="font-semibold text-white">Sarah Johnson</h3>
                                    <p class="text-teal-200 text-sm">CEO, TechStart Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="swiper-slide px-4">
                        <div
                            class="bg-gray-900  rounded-2xl shadow-xl p-6 border border-teal-700 hover:border-teal-500 transition-all duration-300">
                            <div class="aspect-video rounded-xl overflow-hidden">
                                <lite-youtube videoid="M7lc1UVf-VE"
                                    style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"
                                    class="rounded-xl"></lite-youtube>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-700 rounded-full flex items-center justify-center mr-3 text-teal-300 font-bold text-lg">
                                    MC</div>
                                <div>
                                    <h3 class="font-semibold text-white">Michael Chen</h3>
                                    <p class="text-teal-200 text-sm">Founder, Digital Dynamics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="swiper-slide px-4">
                        <div
                            class="bg-gray-900  rounded-2xl shadow-xl p-6 border border-teal-700 hover:border-teal-500 transition-all duration-300">
                            <div class="aspect-video rounded-xl overflow-hidden">
                                <lite-youtube videoid="W-rHIsDFrzQ"
                                    style="background-image: url('https://i.ytimg.com/vi/W-rHIsDFrzQ/hqdefault.jpg');"
                                    class="rounded-xl"></lite-youtube>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-700 rounded-full flex items-center justify-center mr-3 text-teal-300 font-bold text-lg">
                                    ED</div>
                                <div>
                                    <h3 class="font-semibold text-white">Emma Davis</h3>
                                    <p class="text-teal-200 text-sm">Marketing Director, InnovateCo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide px-4">
                        <div
                            class="bg-gray-900  rounded-2xl shadow-xl p-6 border border-teal-700 hover:border-teal-500 transition-all duration-300">
                            <div class="aspect-video rounded-xl overflow-hidden">
                                <lite-youtube videoid="M7lc1UVf-VE"
                                    style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"
                                    class="rounded-xl"></lite-youtube>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-700 rounded-full flex items-center justify-center mr-3 text-teal-300 font-bold text-lg">
                                    MC</div>
                                <div>
                                    <h3 class="font-semibold text-white">Michael Chen</h3>
                                    <p class="text-teal-200 text-sm">Founder, Digital Dynamics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide px-4">
                        <div
                            class="bg-gray-900  rounded-2xl shadow-xl p-6 border border-teal-700 hover:border-teal-500 transition-all duration-300">
                            <div class="aspect-video rounded-xl overflow-hidden">
                                <lite-youtube videoid="M7lc1UVf-VE"
                                    style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"
                                    class="rounded-xl"></lite-youtube>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-700 rounded-full flex items-center justify-center mr-3 text-teal-300 font-bold text-lg">
                                    MC</div>
                                <div>
                                    <h3 class="font-semibold text-white">Michael Chen</h3>
                                    <p class="text-teal-200 text-sm">Founder, Digital Dynamics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide px-4">
                        <div
                            class="bg-gray-900  rounded-2xl shadow-xl p-6 border border-teal-700 hover:border-teal-500 transition-all duration-300">
                            <div class="aspect-video rounded-xl overflow-hidden">
                                <lite-youtube videoid="M7lc1UVf-VE"
                                    style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/hqdefault.jpg');"
                                    class="rounded-xl"></lite-youtube>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-700 rounded-full flex items-center justify-center mr-3 text-teal-300 font-bold text-lg">
                                    MC</div>
                                <div>
                                    <h3 class="font-semibold text-white">Michael Chen</h3>
                                    <p class="text-teal-200 text-sm">Founder, Digital Dynamics</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more slides as needed -->
                </div>

                <!-- Navigation Buttons -->
                <div class="swiper-button-next text-teal-300"></div>
                <div class="swiper-button-prev text-teal-300"></div>

                <!-- Pagination -->
                <div class="swiper-pagination "></div>
            </div>
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
                        <img loading="lazy" src="{{ asset('frontend/images/cta-img.png') }}" alt="Digital Marketing"
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
                card.addEventListener('mousemove', handleMouseMove, {
                    passive: true
                });

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

    <!-- Contact us section -->
    <section id="contact-form" class="contact-section flex items-center justify-center w-full py-16 px-4">
        <!-- Map Background -->
        <div class="map-background">
            <img src="{{ asset('frontend/images/map.png') }}" alt="Office Location Map"
                class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto z-10">
            <div class="text-center mb-10">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h2>
                <p class="text- text-gray-300 max-w-2xl mx-auto">We'd love to hear from you. Fill out the form below
                    and
                    we'll get back to you as soon as possible.</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-8 max-w-6xl mx-auto">
                <!-- Contact Form -->
                <div class="lg:w-2/3 contact-form-container p-8 md:p-10">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send us a message</h3>

                    <form id="contactFormElement" class="space-y-6" novalidate>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name Input -->
                            <div class="relative">
                                <input type="text" id="contactName" name="name"
                                    class="teal-input w-full bg-transparent border-0 border-b-2 px-4 py-3 focus:outline-none"
                                    placeholder=" " required>
                                <label for="contactName" class="floating-label">Full Name</label>
                                <div class="invalid-feedback" id="nameError">Please enter your name (min 2 characters)
                                </div>
                                <span class="success-checkmark absolute right-3 top-4">✓</span>
                            </div>

                            <!-- Email Input -->
                            <div class="relative">
                                <input type="email" id="contactEmail" name="email"
                                    class="teal-input w-full bg-transparent border-0 border-b-2 px-4 py-3 focus:outline-none"
                                    placeholder=" " required>
                                <label for="contactEmail" class="floating-label">Email Address</label>
                                <div class="invalid-feedback" id="emailError">Please enter a valid email address</div>
                                <span class="success-checkmark absolute right-3 top-4">✓</span>
                            </div>
                        </div>

                        <!-- Subject Input -->
                        <div class="relative">
                            <input type="text" id="contactSubject" name="subject"
                                class="teal-input w-full bg-transparent border-0 border-b-2 px-4 py-3 focus:outline-none"
                                placeholder=" ">
                            <label for="contactSubject" class="floating-label">Subject (Optional)</label>
                            <span class="success-checkmark absolute right-3 top-4">✓</span>
                        </div>

                        <!-- Message Input -->
                        <div class="relative">
                            <textarea id="contactMessage" name="message" rows="4"
                                class="teal-input w-full bg-transparent border-0 border-b-2 px-4 py-3 focus:outline-none resize-none"
                                placeholder=" " required></textarea>
                            <label for="contactMessage" class="floating-label">Your Message</label>
                            <div class="invalid-feedback" id="messageError">Please enter your message (min 10
                                characters)
                            </div>
                            <span class="success-checkmark absolute right-3 top-3">✓</span>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-between mt-8">
                            <button type="submit" id="contactSubmitBtn"
                                class="teal-btn px-8 py-3 rounded-full font-medium text-white flex items-center">
                                <span>Send Message</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                            <div id="formStatus" class="text-sm"></div>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="lg:w-1/3 contact-form-container p-8 md:p-10 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Get in touch</h3>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4 contact-info-item">
                                <div class="text-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Our Location</h4>
                                    <p class="text-gray-600 mt-1">123 Business Avenue, Suite 100<br>New York, NY 10001
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 contact-info-item">
                                <div class="text-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Email Us</h4>
                                    <p class="text-gray-600 mt-1">info@yourcompany.com<br>support@yourcompany.com</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 contact-info-item">
                                <div class="text-teal-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Call Us</h4>
                                    <p class="text-gray-600 mt-1">+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-medium text-gray-800 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        // Hero Section Tabs
        document.addEventListener('DOMContentLoaded', () => {
            // Hero Section Tab Functionality
            const heroTabs = document.querySelectorAll('#services [role="tab"]');
            const heroTabContents = document.querySelectorAll('#services .tab-content');

            heroTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active classes from all hero tabs
                    heroTabs.forEach(t => {
                        t.classList.remove('text-white', 'border-b-2', 'border-white');
                        t.classList.add('text-gray-300', 'border-transparent');
                        t.setAttribute('aria-selected', 'false');
                    });

                    // Hide all hero tab contents
                    heroTabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Add active classes to the clicked hero tab
                    tab.classList.remove('text-gray-300', 'border-transparent');
                    tab.classList.add('text-white', 'border-b-2', 'border-white');
                    tab.setAttribute('aria-selected', 'true');

                    // Show the corresponding hero tab content
                    const target = document.getElementById(tab.getAttribute('data-tab-target'));
                    if (target) {
                        target.classList.remove('hidden');
                    }
                });
            });

            // Initialize the first hero tab as active
            if (heroTabs.length > 0) {
                heroTabs[0].click();
            }

            // Portfolio Section Tab Functionality
            const portfolioTabs = document.querySelectorAll('[id^="tab-"]');
            const portfolioContents = document.querySelectorAll('#portfolio .tab-content');

            portfolioTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active classes from all portfolio tabs
                    portfolioTabs.forEach(t => {
                        t.classList.remove('text-gray-900', 'border-indigo-600');
                        t.classList.add('text-gray-600');
                        t.classList.remove('border-b-2');
                    });

                    // Add active classes to clicked portfolio tab
                    this.classList.add('text-gray-900', 'border-indigo-600');
                    this.classList.remove('text-gray-600');
                    this.classList.add('border-b-2');

                    // Hide all portfolio contents
                    portfolioContents.forEach(content => content.classList.add('hidden'));

                    // Show the relevant portfolio content
                    const contentId = 'content-' + this.id.split('-')[1];
                    const contentElement = document.getElementById(contentId);
                    if (contentElement) {
                        contentElement.classList.remove('hidden');
                    }
                });
            });

            // Initialize the first portfolio tab as active
            if (portfolioTabs.length > 0) {
                portfolioTabs[0].click();
            }
        });
    </script>
    <script>
        // Initialize Swipers
        const caseStudySwiper = new Swiper('.caseStudySwiper', {
            loop: true,
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 1
                }
            }
        });

        const testimonialSwiper = new Swiper('.testimonialSwiper', {
            loop: true,
            autoplay: {
                delay: 7000
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        });

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Animate stats counters
        document.querySelectorAll('[data-counter]').forEach(el => {
            gsap.to(el, {
                scrollTrigger: el,
                innerText: el.dataset.counter,
                duration: 2,
                snap: {
                    innerText: 1
                },
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
        gsap.from('h1', {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power4.out"
        });
        gsap.from('p', {
            opacity: 0,
            y: 30,
            duration: 1,
            delay: 0.3,
            ease: "power4.out"
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>
    <script>
        // First, define the Lite YouTube Embed component
        class LiteYTEmbed extends HTMLElement {
            constructor() {
                super();
                this.isIframeLoaded = false;
            }

            connectedCallback() {
                this.videoId = this.getAttribute('videoid');

                // Set preview image
                const playBtn = document.createElement('button');
                playBtn.className = 'lty-playbtn';
                this.appendChild(playBtn);

                // Add click handler to the play button
                playBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.handleVideoClick();
                });

                // Make entire element clickable
                this.addEventListener('click', (e) => {
                    if (e.target !== playBtn) {
                        this.handleVideoClick();
                    }
                });
            }

            handleVideoClick() {
                // Stop swiper autoplay when video is clicked
                if (window.swiper) {
                    window.swiper.autoplay.stop();
                    window.swiper.params.autoplay.enabled = false;
                }

                // Show video in modal instead of embedding directly
                const videoId = this.getAttribute('videoid');
                showVideoInModal(videoId);
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
            }
        });

        // Create modal element
        const modal = document.createElement('div');
        modal.id = 'video-modal';
        modal.className = 'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 hidden';
        modal.innerHTML = `
            <div class="relative w-full max-w-4xl mx-4">
                <button id="close-modal" class="absolute -top-12 right-0 text-white hover:text-teal-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div class="aspect-video w-full">
                    <div id="modal-video-container"></div>
                </div>
            </div>
        `;
        document.body.appendChild(modal);

        // Close modal when clicking the close button
        document.getElementById('close-modal').addEventListener('click', function() {
            closeVideoModal();
        });

        // Close modal when clicking outside the video
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeVideoModal();
            }
        });

        function showVideoInModal(videoId) {
            const container = document.getElementById('modal-video-container');

            // Create YouTube iframe
            container.innerHTML = `
                <iframe width="100%" height="100%" 
                    src="https://www.youtube.com/embed/${videoId}?autoplay=1&enablejsapi=1" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                    class="rounded-lg">
                </iframe>
            `;

            modal.classList.remove('hidden');

            // Listen for video end in modal
            const iframe = container.querySelector('iframe');
            iframe.addEventListener('load', () => {
                iframe.contentWindow.postMessage(JSON.stringify({
                    event: 'listening',
                    id: videoId
                }), '*');
            });
        }

        function closeVideoModal() {
            modal.classList.add('hidden');
            const container = document.getElementById('modal-video-container');
            container.innerHTML = '';

            // Restart swiper autoplay when modal closes
            if (window.swiper) {
                window.swiper.params.autoplay.enabled = true;
                window.swiper.autoplay.start();
            }
        }

        // Handle all video card clicks as fallback
        document.querySelectorAll('.swiper-slide').forEach(slide => {
            slide.addEventListener('click', function(e) {
                // Don't trigger if clicking on navigation or other elements
                if (e.target.closest('a') || e.target.closest('button')) return;

                const youtubeElement = slide.querySelector('lite-youtube');
                if (youtubeElement) {
                    const videoId = youtubeElement.getAttribute('videoid');
                    showVideoInModal(videoId);
                }
            });
        });
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
        function showQuoteForm() {
            // Add your quote form logic here
            alert("Let's create something amazing! Redirecting to quote form...");
        };

        // Pause animation on hover
        const carousel = document.querySelector('.carousel');
        carousel.addEventListener('mouseenter', () => {
            carousel.querySelector('.animate-scroll').style.animationPlayState = 'paused';
        });

        carousel.addEventListener('mouseleave', () => {
            carousel.querySelector('.animate-scroll').style.animationPlayState = 'running';
        });
    </script>
    <script>
        // Unique function names with clear prefixes 
        const contactFormValidator = {
            init: function() {
                const form = document.getElementById('contactFormElement');
                const submitButton = document.getElementById('contactSubmitBtn');
                const formStatus = document.getElementById('formStatus');

                // Initialize validation
                this.setupFormListeners(form, submitButton, formStatus);
                this.setupInputListeners();
            },

            setupFormListeners: function(form, submitButton, formStatus) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    // Validate all fields before submission
                    const isNameValid = contactFormValidator.validateName();
                    const isEmailValid = contactFormValidator.validateEmail();
                    const isMessageValid = contactFormValidator.validateMessage();

                    if (isNameValid && isEmailValid && isMessageValid) {
                        // Show loading state
                        submitButton.disabled = true;
                        submitButton.classList.add('opacity-75');
                        submitButton.innerHTML =
                            '<span>Sending...</span><svg class="animate-spin ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';

                        // Simulate form submission (replace with formester connection)
                        setTimeout(function() {
                            submitButton.disabled = false;
                            submitButton.classList.remove('opacity-75');
                            submitButton.innerHTML =
                                '<span>Send Message</span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>';

                            // Show success message
                            formStatus.textContent = "Message sent successfully!";
                            formStatus.className = "text-sm text-teal-500";

                            // Reset form
                            form.reset();
                            document.querySelectorAll('.success-checkmark').forEach(checkmark => {
                                checkmark.style.display = 'none';
                            });

                            // Clear success message after 3 seconds
                            setTimeout(function() {
                                formStatus.textContent = "";
                            }, 3000);
                        }, 1500);
                    } else {
                        // Show general error message
                        formStatus.textContent = "Please fix the errors in the form.";
                        formStatus.className = "text-sm text-red-500";

                        // Highlight all invalid fields
                        if (!isNameValid) this.showError('contactName', 'nameError');
                        if (!isEmailValid) this.showError('contactEmail', 'emailError');
                        if (!isMessageValid) this.showError('contactMessage', 'messageError');
                    }
                }.bind(this));
            },

            setupInputListeners: function() {
                // Name validation
                const nameInput = document.getElementById('contactName');
                nameInput.addEventListener('input', this.validateName.bind(this));
                nameInput.addEventListener('blur', this.validateName.bind(this));

                // Email validation
                const emailInput = document.getElementById('contactEmail');
                emailInput.addEventListener('input', this.validateEmail.bind(this));
                emailInput.addEventListener('blur', this.validateEmail.bind(this));

                // Message validation
                const messageInput = document.getElementById('contactMessage');
                messageInput.addEventListener('input', this.validateMessage.bind(this));
                messageInput.addEventListener('blur', this.validateMessage.bind(this));

                // Subject (optional)
                const subjectInput = document.getElementById('contactSubject');
                subjectInput.addEventListener('input', function() {
                    const checkmark = subjectInput.nextElementSibling.nextElementSibling;
                    if (subjectInput.value.trim() !== '') {
                        checkmark.style.display = 'inline';
                    } else {
                        checkmark.style.display = 'none';
                    }
                });
            },

            validateName: function() {
                const nameInput = document.getElementById('contactName');
                const nameError = document.getElementById('nameError');
                const checkmark = nameInput.nextElementSibling.nextElementSibling.nextElementSibling;

                const value = nameInput.value.trim();

                if (value === '') {
                    this.showError('contactName', 'nameError', 'Please enter your name');
                    return false;
                } else if (value.length < 2) {
                    this.showError('contactName', 'nameError', 'Name must be at least 2 characters');
                    return false;
                } else {
                    this.hideError('contactName', 'nameError');
                    checkmark.style.display = 'inline';
                    return true;
                }
            },

            validateEmail: function() {
                const emailInput = document.getElementById('contactEmail');
                const emailError = document.getElementById('emailError');
                const checkmark = emailInput.nextElementSibling.nextElementSibling.nextElementSibling;

                const value = emailInput.value.trim();
                const emailRegex =
                    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                if (value === '') {
                    this.showError('contactEmail', 'emailError', 'Please enter your email address');
                    return false;
                } else if (!emailRegex.test(value)) {
                    this.showError('contactEmail', 'emailError', 'Please enter a valid email address');
                    return false;
                } else {
                    this.hideError('contactEmail', 'emailError');
                    checkmark.style.display = 'inline';
                    return true;
                }
            },

            validateMessage: function() {
                const messageInput = document.getElementById('contactMessage');
                const messageError = document.getElementById('messageError');
                const checkmark = messageInput.nextElementSibling.nextElementSibling.nextElementSibling;

                const value = messageInput.value.trim();

                if (value === '') {
                    this.showError('contactMessage', 'messageError', 'Please enter your message');
                    return false;
                } else if (value.length < 10) {
                    this.showError('contactMessage', 'messageError', 'Message must be at least 10 characters');
                    return false;
                } else {
                    this.hideError('contactMessage', 'messageError');
                    checkmark.style.display = 'inline';
                    return true;
                }
            },

            showError: function(inputId, errorId, message) {
                const input = document.getElementById(inputId);
                const error = document.getElementById(errorId);

                input.classList.add('invalid-input');
                error.textContent = message || error.textContent;
                error.style.display = 'block';

                input.nextElementSibling.nextElementSibling.nextElementSibling.style.display = 'none';
            },

            hideError: function(inputId, errorId) {
                const input = document.getElementById(inputId);
                const error = document.getElementById(errorId);

                input.classList.remove('invalid-input');
                error.style.display = 'none';
            }
        };

        // Initialize the contact form validator
        document.addEventListener('DOMContentLoaded', function() {
            contactFormValidator.init();

            // Smooth scroll function for CTAs
            document.querySelectorAll('a[href="#contact-form"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add visual effects to the form container
            const formContainer = document.querySelector('.contact-form-container');
            if (formContainer) {
                formContainer.classList.add('pulse-animation');

                // Remove animation after 5 seconds
                setTimeout(function() {
                    formContainer.classList.remove('pulse-animation');
                }, 5000);
            }
        });
    </script>
    <script>
        // Counter animation script
        document.addEventListener('DOMContentLoaded', function() {
            const countElements = document.querySelectorAll('.count-up');

            const animateCounter = (element, target, duration = 2000) => {
                let start = 0;
                const end = parseInt(target);
                const range = end - start;
                const startTime = performance.now();

                const updateCount = (timestamp) => {
                    const runtime = timestamp - startTime;
                    const progress = Math.min(runtime / duration, 1);
                    const currentCount = Math.floor(progress * range);

                    element.innerText = currentCount + (element.dataset.value.includes('%') ? '%' : '+');

                    if (runtime < duration) {
                        requestAnimationFrame(updateCount);
                    } else {
                        element.innerText = target + (element.dataset.value.includes('%') ? '%' : '+');
                    }
                };

                requestAnimationFrame(updateCount);
            };

            // Create an Intersection Observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target.getAttribute('data-value');
                        animateCounter(entry.target, target);
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, {
                threshold: 0.1 // Trigger when 10% of the element is visible
            });

            // Observe all counter elements
            countElements.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
@endpush
