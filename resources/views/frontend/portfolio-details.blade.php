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
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .gradient-bg {
            background: linear-gradient(-45deg, #075985, #0d9488, #0369a1, #0d9488);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .faq-item {
            border: 1px solid rgba(13, 148, 136, 0.1);
        }

        .faq-content {
            display: grid;
            grid-template-rows: 0fr;
            transition: grid-template-rows 0.3s ease-out;
        }

        .faq-content>div {
            overflow: hidden;
        }

        .faq-item.active .faq-content {
            grid-template-rows: 1fr;
        }

        .rotate-icon {
            transition: transform 0.3s ease;
        }

        .active .rotate-icon {
            transform: rotate(45deg);
        }

        .hover-scale {
            transition: transform 0.2s ease;
        }

        .hover-scale:hover {
            transform: scale(1.01);
        }
    </style>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes float-delay {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.2;
            }

            50% {
                opacity: 0.3;
            }
        }

        @keyframes pulse-slower {

            0%,
            100% {
                opacity: 0.1;
            }

            50% {
                opacity: 0.2;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delay {
            animation: float-delay 8s ease-in-out infinite;
            animation-delay: 1s;
        }

        .animate-pulse-slow {
            animation: pulse-slow 8s ease-in-out infinite;
        }

        .animate-pulse-slower {
            animation: pulse-slower 10s ease-in-out infinite;
        }

        .particle {
            animation: float 5s ease-in-out infinite;
        }

        .particle:nth-child(2) {
            animation-delay: 1s;
        }

        .particle:nth-child(3) {
            animation-delay: 2s;
        }

        .particle:nth-child(4) {
            animation-delay: 3s;
        }
    </style>

    <div class="h-20"></div>

    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-0 mt-3">
        <div
            class="relative mb-16 overflow-hidden rounded-3xl bg-gradient-to-br from-gray-900 to-gray-800 p-8 lg:p-12 xl:p-16">
            <!-- Animated background elements -->
            <div class="absolute inset-0 overflow-hidden opacity-20">
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(79,209,197,0.4)_0%,transparent_50%)] animate-pulse-slow">
                </div>
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_70%_60%,rgba(45,212,191,0.3)_0%,transparent_50%)] animate-pulse-slower">
                </div>
                <div
                    class="absolute top-0 left-1/4 w-64 h-64 bg-teal-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-float">
                </div>
                <div
                    class="absolute bottom-0 right-1/3 w-80 h-80 bg-indigo-500 rounded-full mix-blend-overlay filter blur-3xl opacity-10 animate-float-delay">
                </div>
            </div>

            <!-- Floating particles -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="particle absolute top-1/4 left-1/5 w-2 h-2 bg-teal-400 rounded-full opacity-70"></div>
                <div class="particle absolute top-1/3 right-1/4 w-1 h-1 bg-white rounded-full opacity-50"></div>
                <div class="particle absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-teal-300 rounded-full opacity-60">
                </div>
                <div class="particle absolute top-2/5 right-1/5 w-1 h-1 bg-white rounded-full opacity-40"></div>
            </div>

            <!-- Tag -->
            <div
                class="absolute top-4 right-4 bg-gradient-to-r from-teal-500 to-emerald-500 text-white px-4 py-1.5 rounded-full text-sm font-medium shadow-lg shadow-teal-500/20 z-10">
                Digital Marketing Experts
            </div>

            <div class="relative mt-8 md:mt-0 grid md:grid-cols-2 gap-12 items-center">
                <div id="content-section" class="opacity-0 z-10">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="relative">
                            <img loading="lazy"
                                src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                alt="Client Logo"
                                class="h-14 w-14 object-contain rounded-xl border-2 border-teal-400/30 shadow-md" />
                            <div
                                class="absolute -bottom-1 -right-1 w-5 h-5 bg-teal-500 rounded-full border-2 border-gray-900">
                            </div>
                        </div>
                        <span class="text-teal-300 text-sm font-medium tracking-wider">TRUSTED BY 500+ BRANDS</span>
                    </div>

                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        Transform Your Brand's <br />
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-teal-300 to-emerald-400 font-extrabold">
                            Digital Presence
                        </span>
                    </h1>

                    <p class="text-gray-300 text-lg md:text-xl max-w-2xl mb-8 leading-relaxed">
                        We craft data-driven marketing strategies that deliver measurable results.
                        From SEO to social media, our full-service approach accelerates your growth
                        across all digital channels.
                    </p>

                    <div class="grid grid-cols-2 gap-4 text-white mb-10">
                        <div
                            class="flex items-center space-x-3 bg-gray-800/50 backdrop-blur-sm px-4 py-3 rounded-xl border border-gray-700 hover:border-teal-400/30 transition-all">
                            <div class="p-2 bg-teal-500/10 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-teal-400">
                                    <path
                                        d="M16.466 7.5C17.399 8.248 18 9.246 18 10.25c0 1.657-1.343 3-3 3M16.466 7.5c-.847-1.923-2.649-3.5-4.466-3.5-3.314 0-6 2.686-6 6s2.686 6 6 6c1.817 0 3.62-1.577 4.466-3.5zm0 0H21v3h-4.466M13 7.5V3H8v18h5v-4.5" />
                                </svg>
                            </div>
                            <span class="font-medium">SEO Optimization</span>
                        </div>
                        <div
                            class="flex items-center space-x-3 bg-gray-800/50 backdrop-blur-sm px-4 py-3 rounded-xl border border-gray-700 hover:border-teal-400/30 transition-all">
                            <div class="p-2 bg-teal-500/10 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-teal-400">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                    </path>
                                </svg>
                            </div>
                            <span class="font-medium">Social Media</span>
                        </div>
                        <div
                            class="flex items-center space-x-3 bg-gray-800/50 backdrop-blur-sm px-4 py-3 rounded-xl border border-gray-700 hover:border-teal-400/30 transition-all">
                            <div class="p-2 bg-teal-500/10 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-teal-400">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                    <line x1="8" y1="21" x2="16" y2="21"></line>
                                    <line x1="12" y1="17" x2="12" y2="21"></line>
                                </svg>
                            </div>
                            <span class="font-medium">PPC Campaigns</span>
                        </div>
                        <div
                            class="flex items-center space-x-3 bg-gray-800/50 backdrop-blur-sm px-4 py-3 rounded-xl border border-gray-700 hover:border-teal-400/30 transition-all">
                            <div class="p-2 bg-teal-500/10 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-teal-400">
                                    <path d="M12 3a6 6 0 0 0-6 6v3a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V9a6 6 0 0 0-6-6Z" />
                                    <path d="M19 9v3a3 3 0 0 1-3 3h-1" />
                                    <path d="M5 9v3a3 3 0 0 0 3 3h1" />
                                    <path d="M16 5V3a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                                    <line x1="10" x2="14" y1="12" y2="12" />
                                </svg>
                            </div>
                            <span class="font-medium">Analytics</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <a href="#"
                            class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-teal-500 to-emerald-600 text-white font-bold rounded-xl hover:from-teal-600 hover:to-emerald-700 transition-all duration-300 shadow-lg shadow-teal-500/30 hover:shadow-teal-500/40">
                            Get Free Consultation
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center px-8 py-4 bg-transparent text-white font-medium rounded-xl border-2 border-gray-600 hover:border-teal-400 hover:text-teal-300 transition-all duration-300">
                            View Case Studies
                        </a>
                    </div>

                    <div class="flex items-center mt-12 space-x-4">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-gray-800"
                                src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client">
                            <img class="w-10 h-10 rounded-full border-2 border-gray-800"
                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client">
                            <img class="w-10 h-10 rounded-full border-2 border-gray-800"
                                src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client">
                        </div>
                        <div class="text-sm text-gray-300">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span class="font-bold text-white">4.9</span>
                                <span class="mx-1">/</span>
                                <span>5.0</span>
                            </div>
                            <div>Rated by 250+ clients</div>
                        </div>
                    </div>
                </div>

                <div id="vector-section" class="relative opacity-0 z-10">
                    <div class="relative">
                        <img loading="lazy" src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"
                            alt="Digital Marketing Illustration" class="w-full max-w-lg mx-auto h-auto animate-float" />
                        <div
                            class="absolute -bottom-8 -left-8 w-32 h-32 bg-teal-500 rounded-full filter blur-3xl opacity-20 -z-10">
                        </div>
                        <div
                            class="absolute -top-8 -right-8 w-40 h-40 bg-indigo-500 rounded-full filter blur-3xl opacity-20 -z-10">
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 bg-gray-800/80 backdrop-blur-sm border border-gray-700 rounded-2xl p-4 shadow-xl w-3/4">
                        <div class="flex items-center">
                            <div class="p-3 bg-teal-500/10 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-white font-medium">+325% ROI</div>
                                <div class="text-gray-400 text-sm">Average client results</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services delivered -->
    <section class="bg-gray-900 relative text-white max-w-7xl mx-auto px-10 rounded-3xl py-12">
        <div class="absolute ">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,#4fd1c5_0%,transparent_50%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_60%,#2dd4bf_0%,transparent_50%)]"></div>
        </div>
        <div class=" mb-12">
            <h2 class="text-4xl font-bold mb-4 text-white bg-clip-text bg-gradient-to-r from-teal-400 to-teal-200">
                Services We Delivered
            </h2>
            <p class="text-gray-400 max-w-2xl ">
                Tailored digital solutions to enhance patient engagement, improve online visibility, and establish
                LifeCare Hospitals as a trusted healthcare provider.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Service Card 1: SEO Optimization -->
            <div
                class=" group relative bg-gray-800/30 rounded-2xl p-6 overflow-hidden border border-gray-500 transition-all duration-300 hover:border-teal-500">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/10 to-teal-300/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div class="mb-4 flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="text-teal-400 group-hover:text-white transition-colors">
                            <path
                                d="M16.466 7.5C17.399 8.248 18 9.246 18 10.25c0 1.657-1.343 3-3 3M16.466 7.5c-.847-1.923-2.649-3.5-4.466-3.5-3.314 0-6 2.686-6 6s2.686 6 6 6c1.817 0 3.62-1.577 4.466-3.5zm0 0H21v3h-4.466M13 7.5V3H8v18h5v-4.5" />
                        </svg>
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xs bg-teal-500 text-white px-2 py-1 rounded-full">Advanced</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Optimized Website & SEO</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Revamped the website for seamless user experience and search engine visibility, making
                        healthcare services more accessible.
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-teal-300 hover:text-white text-sm font-medium group-hover:underline">
                            Learn More
                        </a>
                        <div class="text-gray-500 text-xs group-hover:text-white transition-colors">
                            200% Website Traffic Growth
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 2: Social Media Marketing -->
            <div
                class=" group relative bg-gray-800/30 rounded-2xl p-6 overflow-hidden border border-gray-500 transition-all duration-300 hover:border-teal-500">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/10 to-teal-300/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div class="mb-4 flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="text-teal-400 group-hover:text-white transition-colors">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                            </path>
                        </svg>
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xs bg-teal-500 text-white px-2 py-1 rounded-full">Strategic</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Social Media & Branding Strategy</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Implemented a strategic branding approach to maintain consistency and increase patient trust
                        through engaging social media content.
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-teal-300 hover:text-white text-sm font-medium group-hover:underline">
                            Learn More
                        </a>
                        <div class="text-gray-500 text-xs group-hover:text-white transition-colors">
                            2x Social Media Engagement
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 3: PPC Advertising -->
            <div
                class=" group relative bg-gray-800/30 rounded-2xl p-6 overflow-hidden border border-gray-500 transition-all duration-300 hover:border-teal-500">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/10 to-teal-300/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div class="mb-4 flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="text-teal-400 group-hover:text-white transition-colors">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M8 11l2 2 4-4"></path>
                        </svg>
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xs bg-teal-500 text-white px-2 py-1 rounded-full">Targeted</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Patient Education & Content Marketing</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Developed informative content, blogs, and videos to educate patients about treatments and
                        healthcare services
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-teal-300 hover:text-white text-sm font-medium group-hover:underline">
                            Learn More
                        </a>
                        <div class="text-gray-500 text-xs group-hover:text-white transition-colors">
                            Improved Patient Awareness & Inquiries
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 4: Content Marketing -->
            <div
                class=" group relative bg-gray-800/30 rounded-2xl p-6 overflow-hidden border border-gray-500 transition-all duration-300 hover:border-teal-500">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/10 to-teal-300/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div class="mb-4 flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="text-teal-400 group-hover:text-white transition-colors">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xs bg-teal-500 text-white px-2 py-1 rounded-full">Innovative</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">SEO & Digital Outreach</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Executed advanced SEO strategies to improve discoverability and secure top rankings for key
                        healthcare services.
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-teal-300 hover:text-white text-sm font-medium group-hover:underline">
                            Learn More
                        </a>
                        <div class="text-gray-500 text-xs group-hover:text-white transition-colors">
                            First-Page SEO Rankings
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 5: Email Marketing -->
            <div
                class=" group relative bg-gray-800/30 rounded-2xl p-6 overflow-hidden border border-gray-500 transition-all duration-300 hover:border-teal-500">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/10 to-teal-300/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div class="mb-4 flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="text-teal-400 group-hover:text-white transition-colors">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                            </path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xs bg-teal-500 text-white px-2 py-1 rounded-full">Personalized</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Online Patient Acquisition Campaigns</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Launched digital campaigns to attract new patients through targeted advertising and lead
                        generation.
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-teal-300 hover:text-white text-sm font-medium group-hover:underline">
                            Learn More
                        </a>
                        <div class="text-gray-500 text-xs group-hover:text-white transition-colors">
                            Increased Online Patient Inquiries
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Card 6: Analytics & Reporting -->
            <div
                class=" group relative bg-gray-800/30 rounded-2xl p-6 overflow-hidden border border-gray-500 transition-all duration-300 hover:border-teal-500">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/10 to-teal-300/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div class="mb-4 flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="text-teal-400 group-hover:text-white transition-colors">
                            <path d="M3 3v18h18"></path>
                            <path d="M18 17l-5-5-5 5V4"></path>
                            <path d="M18 8l-5 5 5 5"></path>
                        </svg>
                        <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xs bg-teal-500 text-white px-2 py-1 rounded-full">Data-Driven</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-white">Data-Driven Analytics & Optimization</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Utilized analytics to track performance and refine digital strategies for maximum engagement and
                        conversion.
                    </p>
                    <div class="flex items-center justify-between">
                        <a href="#"
                            class="text-teal-300 hover:text-white text-sm font-medium group-hover:underline">
                            Learn More
                        </a>
                        <div class="text-gray-500 text-xs group-hover:text-white transition-colors">
                            Boosted Campaign Effectiveness
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="achievements-wrapper py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <!-- Title Section -->
            <div class="title-section text-center mb-16 space-y-2">
                <span class="inline-block text-teal-600 font-medium mb-2">Our Results</span>
                <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-slate-800 tracking-tight">
                    Transforming Digital Healthcare Marketing
                </h2>
                <p class="text-slate-600 text-md md:text-lg max-w-3xl mx-auto leading-relaxed mt-2">
                    Our partnership with LifeCare Hospitals Kenya has significantly enhanced their patient interaction,
                    digital presence, and branding efforts.
                </p>
            </div>

            <!-- Redesigned Success Cards -->
            <div class="space-y-16">
                <!-- E-Commerce Success -->
                <div class="achievements-card ">
                    <div class="bg-white rounded-[2rem] shadow-xl overflow-hidden border">
                        <div class="grid md:grid-cols-2 gap-0">
                            <!-- Content Side -->
                            <div class="p-10 lg:p-12 flex flex-col justify-center">
                                <div class="space-y-8">
                                    <!-- Header -->
                                    <div class="flex items-center space-x-4">
                                        <div
                                            class="achievements-icon w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500 to-teal-400 p-4 shadow-lg">
                                            <svg class="w-full h-full text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900">Digital Engagement Breakthrough
                                            </h3>
                                            <p class="text-teal-600 font-medium">Digital Growth Breakthrough</p>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        Enhanced online reach through strategic branding, content marketing, and SEO.
                                    </p>

                                    <!-- Metrics Grid -->
                                    <div class="grid grid-cols-2 gap-6">
                                        <div
                                            class="achievements-metric p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border border-gray-100">
                                            <div class="metric-value text-4xl font-bold mb-2">+200%</div>
                                            <div class="text-sm font-medium text-gray-600">Website Traffic</div>
                                        </div>
                                        <div
                                            class="achievements-metric p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border border-gray-100">
                                            <div class="metric-value text-4xl font-bold mb-2">1st Page</div>
                                            <div class="text-sm font-medium text-gray-600">SEO Rankings</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Side -->
                            <div class="relative h-80 md:h-auto overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-teal-600/20 to-teal-400/20 mix-blend-overlay z-10">
                                </div>
                                <img loading="lazy" src="assets/Lifecare 1.png" alt="E-Commerce Success"
                                    class="achievements-image w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SaaS Success -->
                <div class="achievements-card">
                    <div class="bg-white rounded-[2rem] shadow-xl overflow-hidden border">
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="p-10 lg:p-12 flex flex-col justify-center">
                                <div class="space-y-8">
                                    <!-- Header -->
                                    <div class="flex items-center space-x-4">
                                        <div
                                            class="achievements-icon w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500 to-teal-400 p-4 shadow-lg">
                                            <svg class="w-full h-full text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900">Community Impact</h3>
                                            <p class="text-teal-600 font-medium">Patient Engagement Impact</p>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        Strengthened engagement strategies to improve brand trust and patient
                                        acquisition.
                                    </p>

                                    <!-- Metrics Grid -->
                                    <div class="grid grid-cols-2 gap-6">
                                        <div
                                            class="achievements-metric p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border border-gray-100">
                                            <div class="metric-value text-4xl font-bold mb-2">2x</div>
                                            <div class="text-sm font-medium text-gray-600">Social Media Growth</div>
                                        </div>
                                        <div
                                            class="achievements-metric p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border border-gray-100">
                                            <div class="metric-value text-4xl font-bold mb-2">Increased</div>
                                            <div class="text-sm font-medium text-gray-600">Online Patient Inquiries
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Side -->
                            <div class="relative h-80 md:h-auto overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-teal-600/20 to-teal-400/20 mix-blend-overlay z-10">
                                </div>
                                <img loading="lazy" src="assets/Lifecare 2.png" alt="SaaS Success"
                                    class="achievements-image w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SaaS Success -->
                <div class="achievements-card">
                    <div class="bg-white rounded-[2rem] shadow-xl overflow-hidden border">
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="p-10 lg:p-12 flex flex-col justify-center">
                                <div class="space-y-8">
                                    <!-- Header -->
                                    <div class="flex items-center space-x-4">
                                        <div
                                            class="achievements-icon w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500 to-teal-400 p-4 shadow-lg">
                                            <svg class="w-full h-full text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-2xl font-bold text-gray-900">Future-Ready Aesthetics</h3>
                                            <p class="text-teal-600 font-medium">Innovating Digital Patient Care</p>
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        LifeCare Hospitals Kenya continues its collaboration with Branding Pioneers to
                                        leverage cutting-edge marketing technologies. Future efforts will focus on
                                        expanding digital accessibility, improving telehealth outreach, and
                                        strengthening patient education initiatives.
                                    </p>

                                    <!-- Metrics Grid -->
                                    <div class="grid grid-cols-2 gap-6">
                                        <div
                                            class="achievements-metric p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border border-gray-100">
                                            <div class="metric-value text-4xl font-bold mb-2">AI-powered chatbots</div>
                                            <div class="text-sm font-medium text-gray-600"></div>
                                        </div>
                                        <div
                                            class="achievements-metric p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border border-gray-100">
                                            <div class="metric-value text-4xl font-bold mb-2">Expanded digital Ads</div>
                                            <div class="text-sm font-medium text-gray-600"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Side -->
                            <div class="relative h-80 md:h-auto overflow-hidden">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-teal-600/20 to-teal-400/20 mix-blend-overlay z-10">
                                </div>
                                <img loading="lazy" src="assets/Lifecare 3.png" alt="SaaS Success"
                                    class="achievements-image w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ STARTS -->
    <div class="max-w-7xl mx-auto rounded-3xl gradient-bg py-20 mb-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-5xl font-bold text-center mb-4 text-white">Frequently Asked Questions</h1>
            <p class="text-center text-xl text-teal-50 max-w-2xl mx-auto">Find comprehensive answers to common questions
                about our services and solutions</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 pb-20">
        <div class="flex flex-col space-y-6" id="faqContainer">
            <!-- FAQ Items will be inserted here -->
        </div>
    </div>
    <script>
        const faqs = [{
                question: "What industries do Branding Pioneers specialize in?",
                answer: "We work across industries, including healthcare, e-commerce, B2B, lifestyle, and technology. Our strategies are customized to align with your industry’s unique audience and market dynamics.",
                image: null
            },
            {
                question: "How long does it take to launch an ad campaign?",
                answer: "After finalizing your strategy, campaigns typically go live within 7–14 days, depending on creative development, audience research, and platform approvals.",
                image: null
            },
            {
                question: " Do you offer integrated marketing services beyond ads?",
                answer: "Yes! We combine ads with social media marketing, video production, content creation, and reputation management for a cohesive, omnichannel brand experience.",
                image: null
            },
            {
                question: "What’s included in your lead nurturing systems ?",
                answer: "We automate follow-ups via email sequences, retargeting ads, and CRM tools to keep leads engaged, answer their questions, and guide them toward conversion.",
                image: null
            },
            {
                question: "How do you handle negative feedback or reputation crises?",
                answer: "Our online reputation management team monitors brand mentions 24/7, addresses issues proactively, and crafts responses to mitigate damage while rebuilding trust.",
                image: null
            },
            {
                question: "Can you manage campaigns for small budgets?",
                answer: "Absolutely! We design cost-effective strategies tailored to your budget, ensuring maximum impact even with limited resources.",
                image: null
            },
            {
                question: "What video marketing formats do you specialize in?",
                answer: "We create explainer videos, testimonials, product demos, and educational content optimized for platforms like YouTube, Instagram, and WhatsApp.",
                image: null
            },
            {
                question: "How do you ensure ads comply with platform policies?",
                answer: "Our team stays updated on platform guidelines and uses pre-launch checks to avoid violations. We also optimize creatives for approval success.",
                image: null
            },
            {
                question: "What’s your approach to YouTube SEO?",
                answer: "We optimize video titles, descriptions, tags, and thumbnails for searchability. We also leverage trending keywords and audience retention analytics",
                image: null
            },
            {
                question: "How do you measure the success of social media campaigns?",
                answer: "We track metrics like engagement rate, follower growth, click-through rates (CTR), and conversions, aligning results with your business goals.",
                image: null
            }
        ];

        const faqContainer = document.getElementById('faqContainer');

        faqs.forEach((faq, index) => {
            const faqItem = document.createElement('div');
            faqItem.className =
                'faq-item bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 hover-scale';

            const content = `
                <button class="w-full px-8 py-6 flex items-start justify-between focus:outline-none group" onclick="toggleFAQ(${index})">
                    <span class="text-xl font-semibold text-gray-800 text-left group-hover:text-teal-600 transition-colors">${faq.question}</span>
                    <span class="rotate-icon text-teal-500 text-3xl flex-shrink-0 ml-4">+</span>
                </button>
                <div class="faq-content">
                    <div>
                        <div class="px-8 pb-6">
                            <p class="text-gray-600 text-lg leading-relaxed mb-6">${faq.answer}</p>
                            ${faq.image ? `
                                                <div class="relative overflow-hidden rounded-lg  w-full ">
                                                    <img loading="lazy" src="${faq.image}" alt="FAQ illustration" class="w-full h-96 object-cover object-center">
                                                </div>
                                            ` : ''}
                        </div>
                    </div>
                </div>
            `;

            faqItem.innerHTML = content;
            faqContainer.appendChild(faqItem);
        });

        function toggleFAQ(index) {
            const faqItems = document.querySelectorAll('.faq-item');
            const currentItem = faqItems[index];

            if (!currentItem.classList.contains('active')) {
                // Close all other items
                faqItems.forEach(item => {
                    if (item !== currentItem && item.classList.contains('active')) {
                        item.classList.remove('active');
                    }
                });

                // Open clicked item
                currentItem.classList.add('active');
            } else {
                // Close clicked item
                currentItem.classList.remove('active');
            }
        }
    </script>
    <!-- FAQ ENDS -->

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
@endsection

@push('scripts')
    <!-- scripts below -->

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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const timeline = gsap.timeline({
                defaults: {
                    ease: 'power2.out'
                }
            });

            timeline
                .fromTo('#content-section', {
                    opacity: 0,
                    y: 50
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8
                })
                .fromTo('#vector-section', {
                        opacity: 0,
                        scale: 0.8
                    }, {
                        opacity: 1,
                        scale: 1,
                        duration: 0.6
                    },
                    "-=0.4"
                );
        });
    </script>

    <script>
        // GSAP ScrollTrigger Animation
        gsap.registerPlugin(ScrollTrigger);

        // Staggered Services Cards Animation
        gsap.from('.service-card', {
            scrollTrigger: {
                trigger: '#services-grid',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            },
            y: 50,
            opacity: 0,
            stagger: 0.1,
            duration: 0.6,
            ease: 'power2.out'
        });

        // Hover Interactions
        document.querySelectorAll('.service-card').forEach(card => {
            const icon = card.querySelector('svg');
            const tag = card.querySelector('span');
            const learnMore = card.querySelector('a');

            card.addEventListener('mouseenter', () => {
                gsap.to(icon, {
                    rotation: 360,
                    scale: 1.1,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.3)'
                });

                gsap.fromTo(tag, {
                    opacity: 0,
                    y: 20
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.3
                });

                gsap.to(learnMore, {
                    x: 5,
                    duration: 0.3,
                    ease: 'power1.inOut'
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(icon, {
                    rotation: 0,
                    scale: 1,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.3)'
                });

                gsap.to(tag, {
                    opacity: 0,
                    y: 20,
                    duration: 0.3
                });

                gsap.to(learnMore, {
                    x: 0,
                    duration: 0.3,
                    ease: 'power1.inOut'
                });
            });
        });
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
@endpush
