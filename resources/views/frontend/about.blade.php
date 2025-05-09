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

<div class="h-16"></div>

<div class="max-w-7xl mx-auto  mt-12">
    <div class="relative mb-16 overflow-hidden rounded-3xl bg-gray-900 p-8 lg:p-12">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,#4fd1c5_0%,transparent_50%)]">
            </div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_60%,#2dd4bf_0%,transparent_50%)]">
            </div>
        </div>
        <div class="relative">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4">We are <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-teal-200">Branding
                    Pioneers</span>
            </h1>
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl" id="typingText">Your vision, our expertise -
                together we'll transform the digital landscape.</p>
        </div>
    </div>
</div>

<section class="max-w-7xl px-4 md:px-0 pb-16 mx-auto">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Meet Our Leadership</h2>
            <div class="h-1 w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full mx-auto"></div>
        </div>

        <!-- Directors Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20" id="directors-container">
            <!-- Director 1 -->
            <div class="director-card group relative h-[28rem] overflow-hidden rounded-2xl bg-white shadow-xl">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/80 to-gray-900/90 opacity-0 transition-opacity duration-500 group-hover:opacity-100 z-10">
                </div>

                <img src="https://brandingpioneers.com/images/about/arush.webp" alt="Sarah Chen"
                    class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" />

                <!-- Content Overlay -->
                <div
                    class="absolute inset-0 z-20 p-8 flex flex-col justify-end transform transition-transform duration-500">
                    <div
                        class="card-content transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="text-3xl font-bold text-white drop-shadow-md mb-2">Arush Thapar</h3>
                        <p class="text-white hover:text-teal-300 drop-shadow-md text-lg font-medium mb-4">Managing
                            Partner</p>
                        <div class="max-w-md">
                            <p
                                class="text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                Branding Pioneers was born out of a vision to redefine what it means to create
                                impactful connections between brands and their audiences. I’m Arush Thapar, and as
                                one of the founders, I’ve always believed that a brand isn’t just about its product
                                but the story it tells and the trust it builds. With a team of innovators, we design
                                strategies that don’t just follow trends but set them — ensuring every brand we work
                                with becomes a pioneer in its industry.
                            </p>
                        </div>
                        <div
                            class="flex space-x-4 mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">
                            <a href="#" class="text-white hover:text-teal-300 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-teal-300 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Director 2 -->
            <div class="director-card group relative h-[28rem] overflow-hidden rounded-2xl bg-white shadow-xl">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-teal-500/80 to-gray-900/90 opacity-0 transition-opacity duration-500 group-hover:opacity-100 z-10">
                </div>

                <img src="https://brandingpioneers.com/images/about/nishu.webp" alt="Michael Rodriguez"
                    class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" />

                <!-- Content Overlay -->
                <div
                    class="absolute inset-0 z-20 p-8 flex flex-col justify-end transform transition-transform duration-500">
                    <div
                        class="card-content transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="text-3xl font-bold text-white drop-shadow-md mb-2">Nishu Sharma</h3>
                        <p class="text-white hover:text-teal-300 drop-shadow-md text-lg font-medium mb-4">Managing
                            Partner</p>
                        <div class="max-w-md">
                            <p
                                class="text-gray-200 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                The name Branding Pioneers reflects our belief in leading from the front—breaking
                                barriers and setting benchmarks in the digital marketing space. I’m Nishu Sharma,
                                and I’m proud to lead a team driven by creativity, technology, and purpose. Whether
                                it’s SEO, digital campaigns, or influencer collaborations, we’re here to transform
                                ideas into milestones, making your brand not just visible but unforgettable.
                            </p>
                        </div>
                        <div
                            class="flex space-x-4 mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">
                            <a href="#" class="text-white hover:text-teal-300 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" class="text-white hover:text-teal-300 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Banner -->
        <div class="relative rounded-3xl overflow-hidden shadow-2xl" id="">
            <div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-gray-900/20 z-10"></div>
            <img src="https://img.freepik.com/free-photo/group-people-working-out-business-plan-office_1303-15872.jpg?t=st=1736164047~exp=1736167647~hmac=596c99ad131f50cbb592c1d4c2959946eff4c0a6b5a733dcfe36a9341adbe360&w=1800"
                alt="Our Team" class="w-full h-[400px] lg:h-[500px] object-cover" />
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/90 to-transparent p-8 z-20">
                <div class="max-w-3xl">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Our Amazing Team</h3>

                    <h2 class="text-2xl md:text-3xl font-bold text-teal-400 mb-2">Creativity Connects Us, Innovation
                        Propels Us.</h2>


                    <p class="text-gray-200">Discover the dynamic individuals behind our success—each one passionate
                        about transforming the digital landscape and crafting unforgettable brand experiences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" md:pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Vision Container -->
        <div class="relative">
            <!-- Vision Header -->
            <div class="relative text-center mb-8 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Vision</h2>
                <div class="h-1 w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full mx-auto"></div>
            </div>

            <!-- Vision Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Left Column - Vision Statement -->
                <div class="h-full">
                    <div class="bg-white rounded-2xl p-6 md:p-8 shadow-xl h-full flex flex-col">
                        <div class="mb-6 md:mb-8">
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Leading the Way in Digital
                                Excellence
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                We dream of a world where every business, big or small, fully embraces the power of
                                digital innovation. Our goal is to seamlessly integrate traditional marketing with
                                the latest digital strategies, making cutting-edge solutions accessible to all.
                            </p>
                            <div class="h-px w-full bg-gradient-to-r from-teal-400/40 to-transparent"></div>
                        </div>

                        <!-- Vision Points -->
                        <div class="space-y-6 flex-grow">
                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-br from-teal-400 to-teal-600 p-2.5 md:p-3 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-full h-full text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base md:text-lg font-semibold text-gray-900 mb-2">Innovation at
                                        the Core
                                    </h4>
                                    <p class="text-sm md:text-base text-gray-600">We’re committed to constantly
                                        exploring new frontiers, using innovative strategies and creative solutions
                                        to stay ahead of the curve.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-br from-teal-400 to-teal-600 p-2.5 md:p-3 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-full h-full text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base md:text-lg font-semibold text-gray-900 mb-2">Focused on
                                        Client Success
                                    </h4>
                                    <p class="text-sm md:text-base text-gray-600">Our dedication lies in achieving
                                        tangible results and excellent ROI for each client, ensuring every
                                        partnership is a success.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 group">
                                <div
                                    class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-br from-teal-400 to-teal-600 p-2.5 md:p-3 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-full h-full text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base md:text-lg font-semibold text-gray-900 mb-2">Driven by Data
                                    </h4>
                                    <p class="text-sm md:text-base text-gray-600">We harness the power of advanced
                                        analytics to develop strategies that are not just effective but truly
                                        transformative.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Stats & Achievements -->
                <div class="h-full">
                    <div
                        class="relative bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl p-6 md:p-8 text-white shadow-xl overflow-hidden h-full flex flex-col">
                        <!-- Decorative overlay -->
                        <div class="absolute inset-0">
                            <div
                                class="absolute inset-0 bg-grid-white/[0.05] bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:14px_24px]">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent"></div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col h-full">
                            <h3 class="text-xl md:text-2xl font-bold mb-6 md:mb-8">Our Impact By Numbers</h3>

                            <div class="grid grid-cols-2 gap-4 md:gap-8">
                                <div class="text-center p-3 md:p-4 rounded-xl bg-white/5 backdrop-blur-sm">
                                    <div class="text-2xl md:text-4xl font-bold text-teal-400 mb-1 md:mb-2">500+
                                    </div>
                                    <div class="text-xs md:text-sm text-gray-300">Successful Projects</div>
                                </div>
                                <div class="text-center p-3 md:p-4 rounded-xl bg-white/5 backdrop-blur-sm">
                                    <div class="text-2xl md:text-4xl font-bold text-teal-400 mb-1 md:mb-2">98%</div>
                                    <div class="text-xs md:text-sm text-gray-300">Client Satisfaction</div>
                                </div>
                                <div class="text-center p-3 md:p-4 rounded-xl bg-white/5 backdrop-blur-sm">
                                    <div class="text-2xl md:text-4xl font-bold text-teal-400 mb-1 md:mb-2">15+</div>
                                    <div class="text-xs md:text-sm text-gray-300">Industry Awards</div>
                                </div>
                                <div class="text-center p-3 md:p-4 rounded-xl bg-white/5 backdrop-blur-sm">
                                    <div class="text-2xl md:text-4xl font-bold text-teal-400 mb-1 md:mb-2">24/7
                                    </div>
                                    <div class="text-xs md:text-sm text-gray-300">Support Available</div>
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="mt-auto pt-6 md:pt-8">
                                <div class="p-4 md:p-6 rounded-xl bg-white/5 backdrop-blur-sm">
                                    <blockquote class="relative">
                                        <svg class="absolute -top-2 -left-2 h-6 w-6 md:h-8 md:w-8 text-teal-400/20"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                        </svg>
                                        <p class="text-gray-300 italic text-sm md:text-base ml-4 md:ml-6">
                                            "Our commitment to digital excellence drives everything we do, from
                                            strategy
                                            to execution."
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main container with radial gradient background -->
<div class="about-section relative max-w-7xl mx-auto w-full">
    <!-- Custom radial gradient background -->
    <div class="absolute inset-0 opacity-20">
        <div class="w-full h-full bg-teal-400 rounded-3xl" style="background: radial-gradient(circle at 30% 20%, #4fd1c5 0%, transparent 50%),
                        radial-gradient(circle at 70% 60%, #0d9488 10%, transparent 70%),
                        radial-gradient(circle at 40% 80%, #0f766e 10%, transparent 70%)">
        </div>
    </div>

    <!-- Content container -->
    <div class="relative grid md:grid-cols-2 max-w-7xl mb-10 gap-8 p-6 md:p-12 rounded-3xl">
        <!-- Content section -->
        <div class="about-content space-y-6 order-2 md:order-1">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-teal-900">
                Branding Pioneers
            </h1>

            <p class="text-teal-600 text-lg md:text-xl font-light italic">
                Shaping Tomorrow’s Technology, Today
            </p>

            <p class="text-gray-500 text-md md:text-base leading-relaxed">
                Branding Pioneers started with a bold idea: to bridge the gap between technology and creativity,
                empowering businesses to thrive in a digital-first world. Over the past decade, we’ve transformed
                this vision into reality, building innovative solutions that redefine industry standards and help
                our clients succeed. What began as a small team of dreamers has grown into a trusted global partner
                for enterprises and startups alike.
            </p>

            <p class="text-gray-500 text-md md:text-base leading-relaxed">
                At our core, we believe in the power of human-centered design and sustainable technology. Every
                product we create is tailored to solve real-world challenges while delivering lasting value. From
                redefining digital strategies to crafting groundbreaking solutions, our journey is driven by a
                passion to shape the future and make technology accessible, impactful, and inclusive.
            </p>
            <p class="text-gray-500 text-md md:text-base leading-relaxed">
                Join us in transforming ideas into realities, and together, let’s create a future where innovation
                knows no bounds.
            </p>
        </div>

        <!-- Image section -->
        <div class="company-image relative order-1 md:order-2">
            <div class="aspect-square rounded-2xl overflow-hidden">
                <img src="https://img.freepik.com/free-photo/low-angle-view-skyscrapers_1359-1136.jpg?t=st=1736315803~exp=1736319403~hmac=bfb9966b27c0d94c09b562bc7bb197a57f0258f1288459f76fb1e00b3ca398e7&w=1800"
                    alt="Company Innovation" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</div>

<section class="py-16 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <!-- Background with optimized grid -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-gray-100"></div>

    <!-- Optimized Grid Pattern using CSS -->
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#e5e7eb_1px,transparent_1px),linear-gradient(to_bottom,#e5e7eb_1px,transparent_1px)] bg-[size:4rem_4rem] opacity-50 [mask-image:radial-gradient(ellipse_80%_50%_at_50%_50%,black,transparent)]">
    </div>

    <!-- Optimized Particle Container -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none" id="particles-container"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Story: From Vision to
                Global Leadership</h2>
            <h2 class="text-2xl md:text-2xl lg:text-2xl font-bold text-teal-500 mb-4">The Birth of Branding Pioneers
            </h2>



            <div class="h-1 w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full mx-auto"></div>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-sm md:text-base">
                In 2018, Branding Pioneers was born with a bold vision to redefine digital marketing and web design.
                Armed with big dreams and relentless passion, we set new standards in creativity and innovation,
                laying the foundation for a company that would revolutionize the industry.
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="relative">
            <!-- Vertical Line -->
            <div
                class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-teal-400 via-teal-500 to-teal-600 transform -translate-x-1/2">
            </div>

            <!-- Timeline Items -->
            <div class="space-y-12">
                <!-- 2018 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="flex md:w-1/2 md:justify-end mb-4 md:mb-0">
                        <div class="md:text-right md:pr-12 w-full md:w-auto pl-12 md:pl-0">
                            <div class="inline-block">
                                <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Building the
                                    Foundation: 2018</span>
                                <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">A New Workspace
                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">Our commitment and swift expansion
                                    resulted in us being able to set up our first office. A co-working space
                                    designed to promote imagination and creativity. With this new office, we were
                                    also able to enter into foreign markets and provide high quality digital
                                    services across the globe, thus further facilitating expansion.</p>

                            </div>
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2018 Office"
                                class="w-full h-48 object-cover" />
                        </div>
                    </div>
                </div>

                <!-- 2019 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="hidden md:block md:w-1/2 md:pr-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2019 Team" class="w-full h-48 object-cover" />
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 w-full pl-12">
                        <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Growing Stronger:
                            2019</span>
                        <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">100+ and Growing</h3>
                        <p class="text-gray-600 text-sm md:text-base">Our team doubled as talented individuals
                            joined the Branding Pioneers family, bringing diverse skills and perspectives that
                            fueled our mission to innovate and excel.</p>
                    </div>
                </div>

                <!-- 2020 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="flex md:w-1/2 md:justify-end mb-4 md:mb-0">
                        <div class="md:text-right md:pr-12 w-full md:w-auto pl-12 md:pl-0">
                            <div class="inline-block">
                                <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Client-Centered
                                    Success: 2020</span>
                                <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">400+ Happy Clients

                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">We achieved a major milestone,
                                    delighting over 400 clients with tailored digital marketing solutions. This
                                    reflected our unwavering commitment to client satisfaction and results.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2020 Platform"
                                class="w-full h-48 object-cover" />
                        </div>
                    </div>
                </div>

                <!-- 2021 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="hidden md:block md:w-1/2 md:pr-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2021 Awards"
                                class="w-full h-48 object-cover" />
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 w-full pl-12">
                        <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Recognition and Growth:
                            2021</span>
                        <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">Award-Winning Excellence
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base">Our innovative approach earned us prestigious
                            industry awards, cementing our reputation as a leader in digital marketing and design.
                        </p>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="flex md:w-1/2 md:justify-end mb-4 md:mb-0">
                        <div class="md:text-right md:pr-12 w-full md:w-auto pl-12 md:pl-0">
                            <div class="inline-block">
                                <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Scaling New
                                    Heights: 2022</span>
                                <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">1,000 Clients
                                    Served
                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">Crossing the 1,000-client mark
                                    globally was a proud moment, showcasing our resilience and dedication to
                                    delivering impactful solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2022 Global"
                                class="w-full h-48 object-cover" />
                        </div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="hidden md:block md:w-1/2 md:pr-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2023 Future"
                                class="w-full h-48 object-cover" />
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 w-full pl-12">
                        <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Thriving Together: 2023
                        </span>
                        <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">2,000 Happy Clients</h3>
                        <p class="text-gray-600 text-sm md:text-base">We celebrated a record-breaking milestone with
                            2,000 satisfied clients. This achievement fueled our drive to keep innovating and
                            prioritizing client success.</p>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="timeline-item relative flex flex-col md:flex-row items-center md:items-start group">
                    <div class="flex md:w-1/2 md:justify-end mb-4 md:mb-0">
                        <div class="md:text-right md:pr-12 w-full md:w-auto pl-12 md:pl-0">
                            <div class="inline-block">
                                <span class="text-teal-600 font-bold text-lg md:text-xl mb-1 block">Reaching New
                                    Milestones: 2024</span>
                                <h3 class="mt-5 text-xl md:text-2xl font-bold text-gray-900 mb-2">2,500 Clients and
                                    Counting
                                </h3>
                                <p class="text-gray-600 text-sm md:text-base">Crossing the 2,500-client mark
                                    globally is a testament to our relentless commitment to innovation, client
                                    satisfaction, and delivering solutions that drive real growth.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute left-0 md:left-1/2 top-0 flex items-center justify-center">
                        <div
                            class="w-8 h-8 rounded-full border-4 border-teal-500 bg-white transform -translate-x-1/2 timeline-dot">
                        </div>
                    </div>
                    <div class="hidden md:block md:w-1/2 md:pl-12">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden timeline-image opacity-0">
                            <img src="/api/placeholder/600/400" alt="2022 Global"
                                class="w-full h-48 object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        // Optimized particle creation and animation
        class ParticleSystem {
            constructor(containerId, options = {}) {
                this.container = document.getElementById(containerId);
                this.options = {
                    particleCount: 15, // Reduced from 30
                    minSize: 4,
                    maxSize: 8,
                    colors: ['#0d9488', '#14b8a6'],
                    ...options
                };
                this.particles = [];
                this.active = true;
                this.init();
            }

            init() {
                // Create particle elements
                for (let i = 0; i < this.options.particleCount; i++) {
                    this.createParticle();
                }

                // Start animation loop
                this.animate();

                // Performance optimization: Pause animations when not in viewport
                this.observeVisibility();
            }

            createParticle() {
                const particle = document.createElement('div');
                const size = Math.random() * (this.options.maxSize - this.options.minSize) + this.options.minSize;

                // Use transforms instead of top/left for better performance
                particle.style.cssText = `
                            position: absolute;
                            width: ${size}px;
                            height: ${size}px;
                            background: ${this.options.colors[Math.floor(Math.random() * this.options.colors.length)]};
                            border-radius: 50%;
                            opacity: ${Math.random() * 0.3 + 0.1};
                            will-change: transform;
                            transform: translate(${Math.random() * 100}vw, ${Math.random() * 100}vh);
                        `;

                this.container.appendChild(particle);

                // Store particle properties for animation
                this.particles.push({
                    element: particle,
                    x: Math.random() * window.innerWidth,
                    y: Math.random() * window.innerHeight,
                    speedY: (Math.random() * 0.5 + 0.2) * -1,
                    speedX: Math.sin(Math.random() * Math.PI * 2) * 0.2,
                    opacity: Math.random() * 0.3 + 0.1
                });
            }

            animate() {
                if (!this.active) return;

                this.particles.forEach(particle => {
                    // Update position
                    particle.y += particle.speedY;
                    particle.x += particle.speedX;

                    // Reset position if out of bounds
                    if (particle.y < -20) {
                        particle.y = window.innerHeight + 20;
                        particle.x = Math.random() * window.innerWidth;
                    }

                    // Use transform for better performance
                    particle.element.style.transform = `translate(${particle.x}px, ${particle.y}px)`;
                });

                // Use requestAnimationFrame for smooth animation
                requestAnimationFrame(() => this.animate());
            }

            observeVisibility() {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        this.active = entry.isIntersecting;
                        if (this.active) this.animate();
                    });
                }, { threshold: 0 });

                observer.observe(this.container);
            }

            // Clean up method
            destroy() {
                this.active = false;
                this.particles.forEach(particle => particle.element.remove());
                this.particles = [];
            }
        }

        // Initialize with performance optimizations
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize particle system with reduced particle count
            const particleSystem = new ParticleSystem('particles-container', {
                particleCount: 15, // Reduced count for better performance
                minSize: 4,
                maxSize: 8,
                colors: ['#0d9488', '#14b8a6']
            });

            // Optimize GSAP animations
            gsap.registerPlugin(ScrollTrigger);

            // Batch timeline animations for better performance
            const timelineItems = gsap.utils.toArray('.timeline-item');
            const timelineDots = gsap.utils.toArray('.timeline-dot');

            // Create a single timeline for all animations
            const masterTimeline = gsap.timeline({
                scrollTrigger: {
                    trigger: '.timeline-container',
                    start: 'top center',
                    toggleActions: 'play none none reverse'
                }
            });

            // Batch process dots
            timelineDots.forEach(dot => {
                masterTimeline.from(dot, {
                    scale: 0,
                    duration: 0.3,
                    ease: 'back.out(1.7)'
                }, '-=0.2');
            });

            // Batch process items
            timelineItems.forEach((item, index) => {
                const direction = index % 2 === 0 ? -1 : 1;
                const image = item.querySelector('.timeline-image');

                masterTimeline.from(item, {
                    opacity: 0,
                    x: 30 * direction,
                    duration: 0.5
                }, '-=0.3');

                if (image) {
                    masterTimeline.from(image, {
                        opacity: 0,
                        scale: 0.8,
                        duration: 0.4
                    }, '-=0.2');
                }
            });

            // Clean up on page leave
            window.addEventListener('unload', () => {
                particleSystem.destroy();
                ScrollTrigger.getAll().forEach(t => t.kill());
            });
        });
    </script>

    <style>
        /* Add smooth transition for particle opacity */
        #particles-container div {
            transition: opacity 0.5s ease;
        }

        /* Optional: Add a subtle glow effect to particles on hover */
        #particles-container div:hover {
            opacity: 0.5;
            filter: blur(1px);
        }

        /* Ensure grid pattern has proper z-index */
        .grid-pattern {
            z-index: 0;
        }
    </style>
</section>

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
                        From our beginnings as pioneers in digital innovation, we’ve made it our mission to help
                        brands not just exist online but thrive. With strategies rooted in creativity and
                        results-driven solutions, we’ll work together to craft an extraordinary online presence that
                        captivates, engages, and drives growth.
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
                    <img src="assets/cta-img.png" alt="Digital Marketing"
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
    }, { threshold: 0.1 });

    observer.observe(text);


    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
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
    gsap.registerPlugin(ScrollTrigger);

    // Animation for director cards
    const directors = document.querySelectorAll('.director-card');
    directors.forEach((card, index) => {
        gsap.from(card, {
            duration: 1,
            opacity: 0,
            y: 50,
            rotation: 2,
            delay: index * 0.2,
            scrollTrigger: {
                trigger: card,
                start: "top bottom-=100",
                end: "top center",
                toggleActions: "play none none reverse"
            }
        });
    });

    // Animation for team banner
    gsap.from("#team-banner", {
        duration: 1.2,
        opacity: 0,
        y: 100,
        scale: 0.95,
        scrollTrigger: {
            trigger: "#team-banner",
            start: "top bottom-=50",
            end: "top center",
            toggleActions: "play none none reverse"
        }
    });

    // Hover animations for director cards
    directors.forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card.querySelector('img'), {
                duration: 0.5,
                scale: 1.1,
                ease: "power2.out"
            });
            gsap.to(card.querySelector('.card-content'), {
                duration: 0.5,
                y: 0,
                opacity: 1,
                ease: "power2.out"
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card.querySelector('img'), {
                duration: 0.5,
                scale: 1,
                ease: "power2.out"
            });
            gsap.to(card.querySelector('.card-content'), {
                duration: 0.5,
                y: 30,
                ease: "power2.out"
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // Subtle fade-in animations
        gsap.from('.about-content', {
            opacity: 0,
            y: 30,
            duration: 1,
            scrollTrigger: {
                trigger: '.about-section',
                start: 'top center',
                toggleActions: 'play none none reverse'
            }
        });

        gsap.from('.company-image', {
            opacity: 0,
            x: 30,
            duration: 1.2,
            delay: 0.3,
            scrollTrigger: {
                trigger: '.about-section',
                start: 'top center',
                toggleActions: 'play none none reverse'
            }
        });
    });
</script>

@endpush