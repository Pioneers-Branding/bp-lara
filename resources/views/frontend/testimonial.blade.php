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
        lite-youtube {
            background-color: #000;
            position: relative;
            display: block;
            contain: content;
            background-position: center center;
            background-size: cover;
            cursor: pointer;
            max-width: 100%;
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
            padding-bottom: calc(100% * (9/16));
        }

        lite-youtube>iframe {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border: 0;
        }

        lite-youtube>.lty-playbtn {
            width: 70px;
            height: 46px;
            background-color: #212121;
            z-index: 1;
            opacity: 0.8;
            border-radius: 14%;
            transition: all 0.2s cubic-bezier(0, 0, 0.2, 1);
            border: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        lite-youtube:hover>.lty-playbtn {
            background-color: #f00;
            opacity: 1;
        }

        lite-youtube>.lty-playbtn:before {
            content: '';
            border-style: solid;
            border-width: 11px 0 11px 19px;
            border-color: transparent transparent transparent #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <style>
        .bento-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            max-width: 100%;
        }

        .bento-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            background: rgba(15, 23, 42, 0.8);
            /* border: 1px solid rgba(255, 255, 255, 0.1); */
            transition: all 0.3s ease;
            flex: 1 1 calc(33.333% - 1rem);
            min-width: 300px;
            /* Use aspect ratio for proper video dimensions */
            aspect-ratio: 16 / 9;
        }

        .bento-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);
            border-color: rgba(59, 130, 246, 0.5);
        }

        .video-container {
            height: 100%;
            width: 100%;
        }

        lite-youtube {
            background-color: #0F172A;
            position: relative;
            display: block;
            contain: content;
            background-position: center;
            background-size: cover;
            cursor: pointer;
            height: 100%;
            width: 100%;
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background-color: rgba(0, 134, 125, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
            transition: all 0.3s ease;
        }

        .testimonial-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .bento-item:hover .testimonial-info {
            transform: translateY(0);
        }

        @media (max-width: 1024px) {
            .bento-item {
                flex: 1 1 calc(50% - 1rem);
            }
        }

        @media (max-width: 640px) {
            .bento-item {
                flex: 1 1 100%;
            }
        }
    </style>
    <style>
        /* Custom styles to enhance the bento grid */
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-auto-rows: minmax(auto, auto);
            gap: 1rem;
        }

        .testimonial-item {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
            transition: all 0.3s ease-in-out;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .testimonial-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .testimonial-item:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3B82F6, #8B5CF6);
            z-index: 10;
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }

        lite-youtube {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            cursor: pointer;
        }

        /* Responsive patterns for the grid items */
        @media (max-width: 768px) {
            .testimonial-grid {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        @media (max-width: 640px) {
            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-item {
                grid-column: span 1 !important;
            }
        }
    </style>


    <div class="max-w-7xl mx-auto px-4 sm:px-2 md-px-0  pt-24">
        <div class="relative mb-16 overflow-hidden rounded-3xl bg-gray-900 p-8 lg:p-12">
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,#4fd1c5_0%,transparent_50%)]">
                </div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_60%,#2dd4bf_0%,transparent_50%)]">
                </div>
            </div>
            <div class="relative">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4">Our <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-teal-200">Testimonials</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl max-w-2xl" id="typingText">Your vision, our expertise -
                    together we'll transform the digital landscape.</p>
            </div>
        </div>
    </div>

    <!-- Awards Section -->
    <section
        class="awards-showcase-section container max-w-7xl rounded-3xl relative py-16 bg-gradient-to-br from-black to-gray-900 overflow-hidden">
        <!-- Main Content Container -->
        <div class="awards-content-container relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Decorative SVG Elements -->
            <div class="awards-decorative-elements absolute inset-0 z-0 opacity-30">
                <svg class="awards-deco-1 absolute top-0 left-0" width="300" height="300" viewBox="0 0 100 100"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="45" stroke="#0d9488" stroke-width="0.5" />
                    <circle cx="50" cy="50" r="35" stroke="#0d9488" stroke-width="0.5" />
                    <circle cx="50" cy="50" r="25" stroke="#0d9488" stroke-width="0.5" />
                </svg>

                <svg class="awards-deco-2 absolute bottom-0 right-0" width="400" height="400" viewBox="0 0 100 100"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10,10 L90,10 L90,90 L10,90 Z" stroke="#d4a12a" stroke-width="0.5" fill="none" />
                    <path d="M20,20 L80,20 L80,80 L20,80 Z" stroke="#d4a12a" stroke-width="0.5" fill="none" />
                    <path d="M30,30 L70,30 L70,70 L30,70 Z" stroke="#d4a12a" stroke-width="0.5" fill="none" />
                </svg>

                <svg class="awards-deco-3 absolute top-1/4 right-1/4" width="200" height="200" viewBox="0 0 100 100"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="50,10 90,30 90,70 50,90 10,70 10,30" stroke="#0d9488" stroke-width="0.5"
                        fill="none" />
                    <polygon points="50,20 80,35 80,65 50,80 20,65 20,35" stroke="#0d9488" stroke-width="0.5"
                        fill="none" />
                </svg>
            </div>

            <!-- Section Header -->
            <div class="awards-header-block text-center mb-16">
                <h2 class="awards-main-title text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">
                    Our <span class="text-amber-400">Prestigious</span> Awards
                </h2>
                <div class="awards-separator flex justify-center items-center my-6">
                    <div class="awards-line-left h-px w-16 bg-teal-500"></div>
                    <svg class="awards-star-icon mx-4" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                            fill="#d4a12a" />
                    </svg>
                    <div class="awards-line-right h-px w-16 bg-teal-500"></div>
                </div>
                <p class="awards-subtitle text-gray-300 max-w-3xl mx-auto text-lg">
                    Recognition of excellence in innovation, design, and industry leadership
                </p>
            </div>

            <!-- Awards Grid -->
            <div class="awards-items-grid grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Award Item 1 -->
                <div
                    class="awards-item-card group relative bg-gradient-to-br from-gray-900 to-black rounded-xl p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-800 hover:border-teal-500/30 overflow-hidden">
                    <div class="awards-item-count absolute top-6 right-6">
                        <span class="awards-count-value text-5xl font-bold text-amber-400">12</span>
                    </div>

                    <div class="awards-item-icon mb-6">
                        <img src="/api/placeholder/80/80" alt="Innovation Award"
                            class="awards-icon-image h-20 w-20 object-contain" />
                    </div>

                    <h3 class="awards-item-title text-xl font-bold text-white mb-3">Innovation Excellence</h3>

                    <p class="awards-item-description text-gray-400 mb-6">
                        Recognized for breakthrough technological innovations transforming the industry
                    </p>

                    <div class="awards-item-years text-sm font-medium text-teal-400/80">
                        2020 • 2021 • 2022 • 2024
                    </div>

                    <div
                        class="awards-item-decoration absolute -bottom-2 -right-2 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="60" cy="60" r="60" fill="#0d9488" />
                        </svg>
                    </div>
                </div>

                <!-- Award Item 2 -->
                <div
                    class="awards-item-card group relative bg-gradient-to-br from-gray-900 to-black rounded-xl p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-800 hover:border-teal-500/30 overflow-hidden">
                    <div class="awards-item-count absolute top-6 right-6">
                        <span class="awards-count-value text-5xl font-bold text-amber-400">8</span>
                    </div>

                    <div class="awards-item-icon mb-6">
                        <img src="/api/placeholder/80/80" alt="Design Award"
                            class="awards-icon-image h-20 w-20 object-contain" />
                    </div>

                    <h3 class="awards-item-title text-xl font-bold text-white mb-3">Design Mastery</h3>

                    <p class="awards-item-description text-gray-400 mb-6">
                        Excellence in product design, user experience, and aesthetic innovation
                    </p>

                    <div class="awards-item-years text-sm font-medium text-teal-400/80">
                        2019 • 2021 • 2023 • 2024
                    </div>

                    <div
                        class="awards-item-decoration absolute -bottom-2 -right-2 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="120" height="120" fill="#d4a12a" />
                        </svg>
                    </div>
                </div>

                <!-- Award Item 3 -->
                <div
                    class="awards-item-card group relative bg-gradient-to-br from-gray-900 to-black rounded-xl p-8 transform transition-all duration-300 hover:scale-105 hover:shadow-2xl border border-gray-800 hover:border-teal-500/30 overflow-hidden">
                    <div class="awards-item-count absolute top-6 right-6">
                        <span class="awards-count-value text-5xl font-bold text-amber-400">15</span>
                    </div>

                    <div class="awards-item-icon mb-6">
                        <img src="/api/placeholder/80/80" alt="Leadership Award"
                            class="awards-icon-image h-20 w-20 object-contain" />
                    </div>

                    <h3 class="awards-item-title text-xl font-bold text-white mb-3">Industry Leadership</h3>

                    <p class="awards-item-description text-gray-400 mb-6">
                        Recognized for pioneering strategies and market-defining products
                    </p>

                    <div class="awards-item-years text-sm font-medium text-teal-400/80">
                        2018 • 2019 • 2022 • 2023 • 2024
                    </div>

                    <div
                        class="awards-item-decoration absolute -bottom-2 -right-2 opacity-10 group-hover:opacity-20 transition-opacity">
                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <polygon points="60,0 120,30 120,90 60,120 0,90 0,30" fill="#0d9488" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Highlight Award -->
            <div class="awards-highlight-container mt-16">
                <div
                    class="awards-highlight-card relative bg-gradient-to-r from-teal-900/30 to-gray-900 rounded-xl overflow-hidden">
                    <div class="awards-highlight-inner-wrapper grid md:grid-cols-2 gap-6">
                        <!-- Image Side -->
                        <div class="awards-highlight-image-wrapper relative min-h-[300px]">
                            <img src="/api/placeholder/600/400" alt="Best Company Award"
                                class="awards-highlight-image absolute inset-0 w-full h-full object-cover" />
                            <div class="awards-highlight-overlay absolute inset-0 bg-black bg-opacity-30"></div>
                            <div
                                class="awards-highlight-badge absolute top-6 left-6 bg-amber-400 text-gray-900 rounded-full py-1 px-4 font-bold text-sm">
                                FEATURED
                            </div>
                        </div>

                        <!-- Content Side -->
                        <div class="awards-highlight-content p-8 flex flex-col justify-center">
                            <div class="awards-highlight-trophy mb-4">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8,21V19H16V21H8M8,17V15H16V17H8M8,20H16V18H8V20M8,16H16V14H8V16M12,3L4,5V11C4,13.8 7,16.2 12,18C17,16.2 20,13.8 20,11V5L12,3Z"
                                        fill="#d4a12a" />
                                </svg>
                            </div>

                            <h3 class="awards-highlight-title text-2xl md:text-3xl font-bold text-white mb-3">
                                Company of the Year 2024
                            </h3>

                            <p class="awards-highlight-organization text-teal-400 text-lg mb-4">
                                Global Business Excellence Awards
                            </p>

                            <p class="awards-highlight-description text-gray-300 mb-6">
                                The highest honor recognizing our commitment to excellence, innovation, and industry
                                leadership. This prestigious award celebrates our transformative impact across markets.
                            </p>

                            <div class="awards-highlight-date text-sm text-gray-400">
                                Awarded on March 15, 2024 • New York City
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Awards Counter Section -->
            <div class="awards-counter-container mt-16">
                <div class="awards-counter-wrapper grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <!-- Counter 1 -->
                    <div class="awards-counter-item bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                        <div class="awards-counter-value text-4xl md:text-5xl font-extrabold text-amber-400 mb-2">
                            35+
                        </div>
                        <div class="awards-counter-label text-teal-300 font-medium">
                            Total Awards
                        </div>
                    </div>

                    <!-- Counter 2 -->
                    <div class="awards-counter-item bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                        <div class="awards-counter-value text-4xl md:text-5xl font-extrabold text-amber-400 mb-2">
                            12
                        </div>
                        <div class="awards-counter-label text-teal-300 font-medium">
                            International
                        </div>
                    </div>

                    <!-- Counter 3 -->
                    <div class="awards-counter-item bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                        <div class="awards-counter-value text-4xl md:text-5xl font-extrabold text-amber-400 mb-2">
                            8
                        </div>
                        <div class="awards-counter-label text-teal-300 font-medium">
                            Industry Firsts
                        </div>
                    </div>

                    <!-- Counter 4 -->
                    <div class="awards-counter-item bg-gray-900/50 rounded-xl p-6 border border-gray-800">
                        <div class="awards-counter-value text-4xl md:text-5xl font-extrabold text-amber-400 mb-2">
                            5
                        </div>
                        <div class="awards-counter-label text-teal-300 font-medium">
                            Years Running
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-16">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="text-teal-500 text-sm font-semibold uppercase tracking-wider">Client Success Stories</span>
                <h2 class="text-4xl font-bold mt-2 mb-4">Real People, Real Results</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">See how our solutions transform businesses through these
                    authentic testimonials.</p>
            </div>

            <!-- Bento Grid Gallery -->
            <div class="bento-grid">
                <!-- Featured testimonial - now uniformly sized -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="lJIrF4YjHfQ" playlabel="Play: Featured Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/lJIrF4YjHfQ/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="30" height="30">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Sarah Johnson</h3>
                        <p class="text-sm text-blue-100">CEO, TechInnovate</p>
                    </div>
                </div>

                <!-- Secondary testimonial -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="jNQXAC9IVRw" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/jNQXAC9IVRw/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Michael Chen</h3>
                        <p class="text-xs text-blue-100">Marketing Director, GrowthHub</p>
                    </div>
                </div>

                <!-- Tall testimonial - now uniformly sized -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="dQw4w9WgXcQ" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Emma Rodriguez</h3>
                        <p class="text-xs text-blue-100">Product Manager, InnovateCorp</p>
                    </div>
                </div>

                <!-- Wide testimonial - now uniformly sized -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="C0DPdy98e4c" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/C0DPdy98e4c/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">David Williams</h3>
                        <p class="text-xs text-blue-100">CTO, FutureTech Solutions</p>
                    </div>
                </div>

                <!-- Small testimonial 1 -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="M7lc1UVf-VE" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Lisa Thompson</h3>
                        <p class="text-xs text-blue-100">Designer, CreativeStudio</p>
                    </div>
                </div>

                <!-- Small testimonial 2 -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="8tPnX7OPo0Q" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/8tPnX7OPo0Q/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Robert Kim</h3>
                        <p class="text-xs text-blue-100">Founder, StartupGenius</p>
                    </div>
                </div>

                <!-- Featured testimonial - now uniformly sized -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="lJIrF4YjHfQ" playlabel="Play: Featured Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/lJIrF4YjHfQ/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="30" height="30">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Sarah Johnson</h3>
                        <p class="text-sm text-blue-100">CEO, TechInnovate</p>
                    </div>
                </div>

                <!-- Secondary testimonial -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="jNQXAC9IVRw" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/jNQXAC9IVRw/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Michael Chen</h3>
                        <p class="text-xs text-blue-100">Marketing Director, GrowthHub</p>
                    </div>
                </div>

                <!-- Tall testimonial - now uniformly sized -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="dQw4w9WgXcQ" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Emma Rodriguez</h3>
                        <p class="text-xs text-blue-100">Product Manager, InnovateCorp</p>
                    </div>
                </div>

                <!-- Wide testimonial - now uniformly sized -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="C0DPdy98e4c" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/C0DPdy98e4c/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">David Williams</h3>
                        <p class="text-xs text-blue-100">CTO, FutureTech Solutions</p>
                    </div>
                </div>

                <!-- Small testimonial 1 -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="M7lc1UVf-VE" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/M7lc1UVf-VE/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Lisa Thompson</h3>
                        <p class="text-xs text-blue-100">Designer, CreativeStudio</p>
                    </div>
                </div>

                <!-- Small testimonial 2 -->
                <div class="bento-item">
                    <div class="video-container">
                        <lite-youtube videoid="8tPnX7OPo0Q" playlabel="Play: Client Testimonial"
                            style="background-image: url('https://i.ytimg.com/vi/8tPnX7OPo0Q/maxresdefault.jpg');">
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                                    width="24" height="24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </div>
                        </lite-youtube>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="font-bold text-white text-lg">Robert Kim</h3>
                        <p class="text-xs text-blue-100">Founder, StartupGenius</p>
                    </div>
                </div>
            </div>


        </div>
    </div>



    {{-- <section class="max-w-7xl mx-auto px-4 pb-16">
        <!-- Header Section -->
        <div class="px-8 mb-16 opacity-0" id="header">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Client Success Story</h2>
            <p class="text-lg text-gray-600 max-w-3xl ">
                Over the years, we've had the privilege of partnering with diverse brands, companies, and sectors,
                delivering innovative digital solutions that drive growth and success.
            </p>
        </div>

        <!-- Statistics Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16" id="stats-container">
            <div class="text-center opacity-0 stat-item">
                <div class="text-3xl font-bold text-gray-800 mb-2" data-target="500">0</div>
                <div class="text-sm text-gray-600">Clients Served</div>
            </div>
            <div class="text-center opacity-0 stat-item">
                <div class="text-3xl font-bold text-gray-800 mb-2" data-target="1000">0</div>
                <div class="text-sm text-gray-600">Websites Developed</div>
            </div>
            <div class="text-center opacity-0 stat-item">
                <div class="text-3xl font-bold text-gray-800 mb-2" data-target="50">0</div>
                <div class="text-sm text-gray-600">Services Offered</div>
            </div>
            <div class="text-center opacity-0 stat-item">
                <div class="text-3xl font-bold text-gray-800 mb-2" data-target="95">0</div>
                <div class="text-sm text-gray-600">Client Satisfaction Rate</div>
            </div>
        </div>

        <!-- Tech Companies -->
        <div class="mb-16 client-section opacity-0">
            <h3 class="text-xl font-semibold mb-8 text-gray-700">Technology Partners</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-0 border border-gray-100">
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idawOgYOsG/theme/dark/symbol.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Tech Logo 1" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idawOgYOsG/theme/dark/symbol.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Tech Logo 2" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idawOgYOsG/theme/dark/symbol.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Tech Logo 3" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idawOgYOsG/theme/dark/symbol.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Tech Logo 4" class="w-24 h-24 object-contain">
                </div>
            </div>
        </div>

        <!-- Finance Companies -->
        <div class="mb-16 client-section opacity-0">
            <h3 class="text-xl font-semibold mb-8 text-gray-700">Financial Institutions</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-0 border border-gray-100">
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idnrCPuv87/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Finance Logo 1" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idnrCPuv87/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Finance Logo 2" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idnrCPuv87/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Finance Logo 3" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/idnrCPuv87/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Finance Logo 4" class="w-24 h-24 object-contain">
                </div>
            </div>
        </div>

        <!-- Healthcare Companies -->
        <div class="client-section opacity-0">
            <h3 class="text-xl font-semibold mb-8 text-gray-700">Healthcare Partners</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-0 border border-gray-100">
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/id5dnLW98Y/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Healthcare Logo 1" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/id5dnLW98Y/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Healthcare Logo 2" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/id5dnLW98Y/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Healthcare Logo 3" class="w-24 h-24 object-contain">
                </div>
                <div class="flex items-center justify-center p-6 border border-gray-100 logo-item">
                    <img src="https://cdn.brandfetch.io/id5dnLW98Y/theme/dark/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Healthcare Logo 4" class="w-24 h-24 object-contain">
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@push('scripts')
    <script>
        const text = document.getElementById('typingText');
        const originalText = text.textContent;
        text.textContent = '';

        let charIndex = 0;

        function typeText() {
            if (charIndex < originalText.length) {
                text.textContent += originalText.charAt(charIndex);
                charIndex++;
                setTimeout(typeText, 50);
            }
        }


        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    typeText();
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        observer.observe(text);


        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });


        gsap.from(".rounded-3xl", {
            duration: 1,
            y: 60,
            opacity: 0,
            stagger: 0.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".rounded-3xl",
                start: "top bottom",
                toggleActions: "play none none reverse"
            }
        });
    </script>
    <script>
        // Simple implementation of lite-youtube custom element
        class LiteYoutube extends HTMLElement {
            connectedCallback() {
                this.addEventListener('click', () => {
                    const videoId = this.getAttribute('videoid');
                    if (videoId) {
                        const iframe = document.createElement('iframe');
                        iframe.width = '100%';
                        iframe.height = '100%';
                        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                        iframe.title = this.getAttribute('playlabel') || 'YouTube video player';
                        iframe.frameBorder = '0';
                        iframe.allow =
                            'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                        iframe.allowFullscreen = true;

                        // Clear the element and append the iframe
                        this.innerHTML = '';
                        this.appendChild(iframe);
                    }
                });
            }
        }

        // Register the custom element
        customElements.define('lite-youtube', LiteYoutube);
    </script>
    <script>
        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

        // Header Animation
        gsap.to("#header", {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: "#header",
                start: "top 80%",
            }
        });

        // Stats Counter Animation
        const statsSection = document.querySelector("#stats-container");
        const statItems = document.querySelectorAll(".stat-item");

        // Animate stats container
        gsap.to(statItems, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: statsSection,
                start: "top 80%",
            },
            onComplete: animateNumbers
        });

        function animateNumbers() {
            document.querySelectorAll('[data-target]').forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));

                gsap.to(counter, {
                    innerHTML: target,
                    duration: 2,
                    snap: {
                        innerHTML: 1
                    },
                    ease: "power2.out"
                });
            });
        }

        // Client Sections Animation
        document.querySelectorAll('.client-section').forEach((section, index) => {
            const logos = section.querySelectorAll('.logo-item');

            gsap.set(logos, {
                opacity: 0,
                y: 20
            });

            // Animate section
            gsap.to(section, {
                opacity: 1,
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                },
                onComplete: () => {
                    // Animate logos within section
                    gsap.to(logos, {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        stagger: 0.1,
                        ease: "power2.out"
                    });
                }
            });
        });
    </script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Animate story cards on scroll
        gsap.utils.toArray('.story-card').forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 30,
                duration: 0.8,
                delay: i * 0.1,
                ease: 'power2.out'
            });
        });

        // Header animations
        gsap.from('.story-header', {
            scrollTrigger: {
                trigger: '.story-header',
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            scale: 0.95,
            duration: 1,
            ease: 'power2.out'
        });
    </script>
@endpush
