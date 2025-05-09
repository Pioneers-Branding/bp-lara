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
    .carousel-container {
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .team-card {
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-8px);
    }

    .info-box {
        transition: all 0.3s ease;
    }

    .team-card:hover .info-box {
        background: rgba(255, 255, 255, 0.95);
    }
</style>
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out;
    }
</style>

<div class="h-20"></div>

    <section class="relative h-fit bg-white overflow-hidden">
        <!-- Grid background pattern -->
        <div class="absolute inset-0 z-0 grid grid-cols-12 gap-4 transform -skew-y-3 opacity-10">
            <div class="col-span-1 bg-teal-400 h-full"></div>
            <div class="col-span-1 bg-gray-300 h-full"></div>
            <div class="col-span-1 bg-teal-400 h-full"></div>
            <div class="col-span-1 bg-gray-300 h-full"></div>
            <div class="col-span-1 bg-teal-400 h-full"></div>
            <div class="col-span-1 bg-gray-300 h-full"></div>
            <div class="col-span-1 bg-teal-400 h-full"></div>
            <div class="col-span-1 bg-gray-300 h-full"></div>
            <div class="col-span-1 bg-teal-400 h-full"></div>
            <div class="col-span-1 bg-gray-300 h-full"></div>
            <div class="col-span-1 bg-teal-400 h-full"></div>
            <div class="col-span-1 bg-gray-300 h-full"></div>
        </div>

        <div class="container relative z-10 mx-auto px-4 h-full flex items-center">
            <div class="max-w-2xl mx-auto lg:max-w-4xl pt-20 pb-32">
                <h1 class="text-2xl  text-center md:text-5xl font-extrabold text-gray-700 mb-6 leading-tight">
                    We've got an <span class="relative inline-block">entire</span>
                    <span class="relative inline-block">team</span>
                    dedicated
                    <br class="hidden md:block">
                    to <span class="highlight-squiggle">supporting you</span> and your business
                </h1>

                <p class="text-lg text-center md:text-xl text-gray-400 mb-8">
                    Get help 24/7, with our award-winning support network of payments experts.
                </p>

                <div class="flex justify-center w-full flex-col sm:flex-row gap-4">
                    <a href="#"
                        class="bg-teal-400 text-white px-8 py-2 my-auto rounded-lg font-medium hover:bg-teal-500 transition-colors text-center">
                        Book a call
                    </a>
                    <a href="#"
                        class="border-2 border-gray-900 text-gray-900 px-8 py-2 rounded-lg font-medium hover:bg-gray-900 hover:text-white transition-colors text-center">
                        Get in touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="relative w-full py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="font-bold text-4xl pb-2">Our Team</h1>
            <p class="pb-4">Meet our very talented and expert team</p>
        </div>
        <div class="container mx-auto px-4 relative z-10 pt-6">
            <!-- Carousel container with auto-scroll -->
            <div class="carousel-container overflow-hidden">
                <div class="carousel-track flex space-x-6 pb-8">
                    <!-- Team Member Card 1 -->
                    <div class="team-card flex-none w-72 relative group">
                        <div
                            class="relative overflow-hidden rounded-xl bg-white transform transition-all duration-300 ease-out hover:shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Team member"
                                class="w-full h-80 object-cover object-center transition-transform duration-300 group-hover:scale-105 pb-20 bg-blue-400" />
                            <div
                                class="info-box absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-sm p-4 transform transition-all duration-300">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Emmy Rosum</h3>
                                <p class="text-sm text-gray-600">Customer Success Agent</p>
                                <div
                                    class="social-links mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-gray-600 hover:text-blue-500">LinkedIn</a>
                                        <a href="#" class="text-gray-600 hover:text-blue-500">Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Card 2 -->
                    <div class="team-card flex-none w-72 relative group">
                        <div
                            class="relative overflow-hidden rounded-xl bg-white transform transition-all duration-300 ease-out hover:shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Team member"
                                class="w-full h-80 object-cover object-center transition-transform duration-300 group-hover:scale-105 pb-20 bg-blue-400" />
                            <div
                                class="info-box absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-sm p-4 transform transition-all duration-300">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Sophie Chamberlain</h3>
                                <p class="text-sm text-gray-600">Specialized Support</p>
                                <div
                                    class="social-links mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-gray-600 hover:text-blue-500">LinkedIn</a>
                                        <a href="#" class="text-gray-600 hover:text-blue-500">Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Card 3 -->
                    <div class="team-card flex-none w-72 relative group">
                        <div
                            class="relative overflow-hidden rounded-xl bg-white transform transition-all duration-300 ease-out hover:shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Team member"
                                class="w-full h-80 object-cover object-center transition-transform duration-300 group-hover:scale-105 pb-20 bg-blue-400" />
                            <div
                                class="info-box absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-sm p-4 transform transition-all duration-300">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Lana Steiner</h3>
                                <p class="text-sm text-gray-600">VP of Customer Success</p>
                                <div
                                    class="social-links mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-gray-600 hover:text-blue-500">LinkedIn</a>
                                        <a href="#" class="text-gray-600 hover:text-blue-500">Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Card 4 -->
                    <div class="team-card flex-none w-72 relative group">
                        <div
                            class="relative overflow-hidden rounded-xl bg-white transform transition-all duration-300 ease-out hover:shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Team member"
                                class="w-full h-80 object-cover object-center transition-transform duration-300 group-hover:scale-105 pb-20 bg-blue-400" />
                            <div
                                class="info-box absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-sm p-4 transform transition-all duration-300">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Orlando Diggs</h3>
                                <p class="text-sm text-gray-600">Customer Success Lead</p>
                                <div
                                    class="social-links mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-gray-600 hover:text-blue-500">LinkedIn</a>
                                        <a href="#" class="text-gray-600 hover:text-blue-500">Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member Card 5 -->
                    <div class="team-card flex-none w-72 relative group">
                        <div
                            class="relative overflow-hidden rounded-xl bg-white transform transition-all duration-300 ease-out hover:shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Team member"
                                class="w-full h-80 object-cover object-center transition-transform duration-300 group-hover:scale-105 pb-20 bg-blue-400" />
                            <div
                                class="info-box absolute bottom-0 left-0 right-0 bg-white/90 backdrop-blur-sm p-4 transform transition-all duration-300">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Sasha Kindred</h3>
                                <p class="text-sm text-gray-600">Customer Success Lead</p>
                                <div
                                    class="social-links mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-gray-600 hover:text-blue-500">LinkedIn</a>
                                        <a href="#" class="text-gray-600 hover:text-blue-500">Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden">
        <!-- Background Decorative Elements -->
        <div
            class="absolute w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob -top-10 -left-4">
        </div>
        <div
            class="absolute w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000 top-0 -right-4">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 py-20">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-700 mb-4 tracking-tight">Our Dynamic Teams</h2>
                <p class="text-xl text-gray-600">Where Innovation Meets Excellence</p>
            </div>

            <!-- Teams Grid -->
            <!-- Teams Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Digital Advertising Team -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500 p-0.5 rounded-2xl hover:transform hover:scale-105 transition-all duration-300">
                        <div class="bg-white rounded-2xl p-8 h-full">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Digital Advertising</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-pink-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-red-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                    </div>
                                </div>
                                <img src="path-to-your-ads-icon.png" alt="Digital Advertising Icon"
                                    class="w-12 h-12 object-contain">
                            </div>

                            <p class="text-gray-600 mt-6 mb-6">Crafting data-driven campaigns that convert clicks into
                                customers</p>

                            <div class="relative overflow-hidden rounded-xl mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 opacity-10">
                                </div>
                                <div class="relative bg-gray-50 rounded-xl p-4 border border-pink-100">
                                    <p class="text-gray-700 italic mb-2">"Success is not final, failure is not fatal: it
                                        is
                                        the courage to continue that counts."</p>
                                    <p class="text-gray-500 text-sm text-right">- Winston Churchill</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-pink-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-pink-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-pink-700 font-bold">200%</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-pink-500 to-red-500 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px"
                                                viewBox="0 0 64 64" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M38.2653 15.3929L15.8615 25.0216L24.2661 45.2543L46.2684 35.6506L38.2653 15.3929Z"
                                                    fill="#ffffff" />
                                                <path
                                                    d="M19.7502 52.232L24.1406 43.7788L26.2229 45.3544L26.6996 35.0754L18.3703 41.0027L20.8039 41.9531L16.1375 50.1062L19.7502 52.232Z"
                                                    fill="#ffffff" />
                                                <path
                                                    d="M26.6996 35.0755L26.2229 45.3544L24.1406 43.7788L19.7251 52.232L16.1375 50.1062L20.8039 41.9531L18.3452 41.0027L26.6996 35.0755ZM27.8035 33.0747L26.1226 34.2752L17.7933 40.2024L16.288 41.2778L18.0191 41.9531L19.3739 42.4783L15.2845 49.606L14.8078 50.4563L15.6608 50.9565L19.2484 53.0823L20.1516 53.6325L20.6534 52.6822L24.5169 45.2793L25.6459 46.1297L27.1763 47.2801L27.2766 45.3794L27.7533 35.1005L27.8035 33.0747Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M48.4511 31.8742L40.1469 11.5415L17.7933 21.1702L26.1979 41.4279L48.4511 31.8742Z"
                                                    fill="white" />
                                                <path
                                                    d="M25.7714 42.4033L16.8149 20.77L40.5483 10.5411L49.4295 32.2494L25.7714 42.4033ZM18.7718 21.5703L26.5993 40.4275L47.4727 31.4741L39.7204 12.5419L18.7718 21.5703Z"
                                                    fill="#ffffff" />
                                                <path
                                                    d="M41.9679 16.0395L19.5499 25.4126L20.1325 26.7962L42.5504 17.4231L41.9679 16.0395Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M20.8792 24.1963L22.5601 23.4711L21.9579 22.0455L20.277 22.7458L20.8792 24.1963Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.8145 22.9959L25.4954 22.2957L24.8933 20.8701L23.1873 21.5454L23.8145 22.9959Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M26.6996 21.7955L28.3805 21.0702L27.7784 19.6447L26.0975 20.3449L26.6996 21.7955Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M35.4303 23.9962C35.4303 23.9962 38.4158 22.8457 39.4193 25.2967C40.3727 27.5975 37.4875 28.898 37.4875 28.898C37.2868 27.9477 36.4589 25.1966 35.4303 23.9962Z"
                                                    fill="#A694FE" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M35.3049 23.6961L34.9034 23.8462L35.1794 24.1713C36.1579 25.3467 36.9607 28.0227 37.1865 28.9231L37.2868 29.2982L37.6381 29.1482C38.1649 28.8981 38.6416 28.5479 39.043 28.1478C39.4695 27.7727 39.7455 27.2975 39.8709 26.7473C39.9963 26.2221 39.9462 25.6468 39.7204 25.1467C39.5197 24.6215 39.1684 24.1713 38.6918 23.8462C38.2151 23.521 37.6381 23.371 37.061 23.396C36.4589 23.396 35.8819 23.496 35.3049 23.6961ZM35.9571 24.1463C36.3084 24.0462 36.6847 24.0212 37.061 24.0212C37.5126 23.9962 37.9642 24.1213 38.3405 24.3714C38.7168 24.6215 38.9928 24.9716 39.1434 25.3968C39.319 25.7969 39.3441 26.2221 39.2437 26.6472C39.1433 27.0724 38.9176 27.4475 38.5914 27.7226C38.3405 27.9727 38.0395 28.2228 37.7133 28.3979C37.337 26.8973 36.7349 25.4718 35.9571 24.1463Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M29.5597 31.274C28.1547 30.5487 27.6028 28.773 27.653 27.1224C30.7388 26.122 33.4985 24.6715 35.631 22.1455C37.8388 24.1213 38.767 26.2471 38.8423 29.7734C35.0289 29.2982 32.1437 30.1736 29.5597 31.274Z"
                                                    fill="#32EDBB" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M29.4091 31.5491L29.5346 31.6241L29.6851 31.5741C32.219 30.4737 35.054 29.6233 38.8172 30.0985L39.1935 30.1485V29.7984C39.1183 26.147 38.1649 23.9712 35.8819 21.9454L35.631 21.7203L35.4052 21.9704C33.3229 24.4464 30.6134 25.8719 27.5777 26.8473L27.377 26.9223V27.1224C27.3017 28.8981 27.9289 30.7738 29.4091 31.5491ZM29.5848 30.9238C28.4307 30.2486 27.9791 28.773 27.9791 27.3225C30.9395 26.3221 33.5738 24.9216 35.6561 22.5707C37.5628 24.3463 38.3907 26.3221 38.5162 29.4233C34.8784 29.0231 32.0936 29.8734 29.5848 30.9238Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M27.7784 28.5979C27.7784 28.5979 26.2229 29.1481 26.7247 30.2735C27.2265 31.374 28.7067 30.5987 28.7067 30.5987C28.23 29.9984 27.9289 29.3232 27.7784 28.5979Z"
                                                    fill="#4C5EFD" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M28.0795 28.5229L28.0042 28.1727L27.653 28.2978C27.3519 28.4228 27.0759 28.5729 26.8501 28.773C26.5992 28.948 26.4236 29.1981 26.3484 29.4982C26.2731 29.7983 26.2982 30.0985 26.4236 30.3736C26.524 30.5987 26.6745 30.7987 26.9003 30.9238C27.1261 31.0488 27.3519 31.1239 27.6028 31.1239C28.0293 31.1239 28.4558 31.0238 28.8321 30.8487L29.1582 30.6737L28.9325 30.3736C28.506 29.8484 28.23 29.1981 28.0795 28.5229ZM27.5526 29.0481C27.7031 29.5483 27.9038 29.9984 28.1798 30.4486C28.0544 30.4736 27.954 30.5236 27.8286 30.5236C27.678 30.5736 27.5024 30.5486 27.3519 30.4736C27.2014 30.3986 27.0759 30.2985 27.0007 30.1485C26.9254 29.9984 26.9254 29.8234 26.9756 29.6733C27.0257 29.5232 27.1261 29.3732 27.2515 29.2731C27.3519 29.1731 27.4522 29.1231 27.5526 29.0481Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M31.09 30.6988C31.8678 32.0493 32.3695 33.5499 32.5702 35.1005L35.3048 33.9C34.502 32.6996 33.8497 31.3741 33.3981 29.9985C32.5953 30.1736 31.8176 30.4237 31.09 30.6988Z"
                                                    fill="#A694FE" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M30.9646 30.4236L30.6384 30.5487L30.789 30.8488C31.5416 32.1743 32.0434 33.6248 32.2441 35.1254L32.2943 35.5756L35.8066 34.05L35.6059 33.7499C34.8031 32.5494 34.1759 31.2739 33.7243 29.9234L33.6239 29.6483L33.348 29.6983C32.5451 29.8734 31.7423 30.1235 30.9646 30.4236ZM31.5416 30.8488C32.0935 30.6487 32.6455 30.4736 33.2225 30.3486C33.649 31.549 34.201 32.6745 34.8783 33.7499L32.8462 34.6252C32.5953 33.2997 32.1688 32.0492 31.5416 30.8488Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M28.4307 26.7973C28.4808 28.3479 29.083 29.8234 30.1367 30.9989C30.1868 31.0489 30.2872 31.0989 30.3625 31.0989C30.4377 31.0989 30.5381 31.0739 30.5882 30.9989C30.6384 30.9239 30.6886 30.8738 30.6886 30.7738C30.6886 30.6988 30.6635 30.6237 30.5882 30.5487C29.6349 29.4983 29.108 28.1728 29.0579 26.7973C29.0579 26.7223 29.0328 26.6472 28.9575 26.5722C28.9073 26.5222 28.807 26.4722 28.7317 26.4722C28.6565 26.4722 28.5561 26.4972 28.5059 26.5722C28.4558 26.6472 28.4307 26.7223 28.4307 26.7973Z"
                                                    fill="#ffffff" />
                                                <path
                                                    d="M21.5063 52.232L25.9218 43.7788L27.9791 45.3544L28.4557 35.0754L20.1516 41.0027L22.5851 41.9531L17.9187 50.1062L21.5063 52.232Z"
                                                    fill="#FEC34E" />
                                                <path
                                                    d="M28.4558 35.0755L27.9791 45.3544L25.8968 43.7788L21.4813 52.232L17.9187 50.1062L22.5851 41.9531L20.1265 41.0027L28.4558 35.0755ZM29.5597 33.0747L27.8787 34.2752L19.5495 40.2024L18.0442 41.2778L19.7753 41.9531L21.13 42.4783L17.0406 49.606L16.564 50.4563L17.417 50.9565L21.0046 53.0823L21.9078 53.6325L22.4095 52.6822L26.2731 45.2793L27.4021 46.1297L28.9324 47.2801L29.0328 45.3794L29.5095 35.1005L29.5597 33.0747Z"
                                                    fill="#ffffff" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">ROI Increase</p>
                                </div>
                                <div
                                    class="bg-red-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-red-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-red-700 font-bold">500+</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-red-500 to-yellow-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Campaigns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Web Development Team -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-500 p-0.5 rounded-2xl hover:transform hover:scale-105 transition-all duration-300">
                        <div class="bg-white rounded-2xl p-8 h-full">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Web Development</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-purple-500"></div>
                                    </div>
                                </div>
                                <img src="path-to-your-web-icon.png" alt="Web Development Icon"
                                    class="w-12 h-12 object-contain">
                            </div>

                            <p class="text-gray-600 mt-6 mb-6">Building digital experiences that leave lasting
                                impressions
                            </p>

                            <div class="relative overflow-hidden rounded-xl mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 opacity-10">
                                </div>
                                <div class="relative bg-gray-50 rounded-xl p-4 border border-blue-100">
                                    <p class="text-gray-700 italic mb-2">"Design is not just what it looks like and
                                        feels
                                        like. Design is how it works."</p>
                                    <p class="text-gray-500 text-sm text-right">- Steve Jobs</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-blue-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-blue-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-blue-700 font-bold">100+</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Websites Launched</p>
                                </div>
                                <div
                                    class="bg-indigo-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-indigo-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-indigo-700 font-bold">98%</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Performance Score</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphic Design Team -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-green-500 via-emerald-500 to-teal-500 p-0.5 rounded-2xl hover:transform hover:scale-105 transition-all duration-300 h-full">
                        <div class="bg-white rounded-2xl p-8 h-full">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Graphic Design</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-teal-500"></div>
                                    </div>
                                </div>
                                <img src="path-to-your-design-icon.png" alt="Graphic Design Icon"
                                    class="w-12 h-12 object-contain">
                            </div>

                            <p class="text-gray-600 mt-6 mb-6">Where creativity meets strategy to tell your brand's
                                story
                            </p>

                            <div class="relative overflow-hidden rounded-xl mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500 opacity-10">
                                </div>
                                <div class="relative bg-gray-50 rounded-xl p-4 border border-green-100">
                                    <p class="text-gray-700 italic mb-2">"Simplicity is the ultimate sophistication."
                                    </p>
                                    <p class="text-gray-500 text-sm text-right">- Leonardo da Vinci</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-green-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-green-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-green-700 font-bold">1000+</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Designs Created</p>
                                </div>
                                <div
                                    class="bg-emerald-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-emerald-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-emerald-700 font-bold">95%</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Client Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Team -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-cyan-500 via-blue-500 to-violet-500 p-0.5 rounded-2xl hover:transform hover:scale-105 transition-all duration-300 h-full">
                        <div class="bg-white rounded-2xl p-8 h-full">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Social Media</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-cyan-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-violet-500"></div>
                                    </div>
                                </div>
                                <img src="path-to-your-social-icon.png" alt="Social Media Icon"
                                    class="w-12 h-12 object-contain">
                            </div>

                            <p class="text-gray-600 mt-6 mb-6">Engaging audiences and building communities that matter
                            </p>

                            <div class="relative overflow-hidden rounded-xl mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-cyan-500 via-blue-500 to-violet-500 opacity-10">
                                </div>
                                <div class="relative bg-gray-50 rounded-xl p-4 border border-cyan-100">
                                    <p class="text-gray-700 italic mb-2">"Social media is not a media. The key is to
                                        listen,
                                        engage, and build relationships."</p>
                                    <p class="text-gray-500 text-sm text-right">- David Alston</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-cyan-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-cyan-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-cyan-700 font-bold">150%</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Engagement Growth</p>
                                </div>
                                <div
                                    class="bg-violet-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-violet-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-violet-700 font-bold">1M+</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-violet-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Monthly Reach</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO Team -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-amber-500 via-orange-500 to-red-500 p-0.5 rounded-2xl hover:transform hover:scale-105 transition-all duration-300 h-full">
                        <div class="bg-white rounded-2xl p-8 h-full">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">SEO</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-amber-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-orange-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-red-500"></div>
                                    </div>
                                </div>
                                <img src="path-to-your-seo-icon.png" alt="SEO Icon" class="w-12 h-12 object-contain">
                            </div>

                            <p class="text-gray-600 mt-6 mb-6">Optimizing visibility to help you reach the right
                                audience
                            </p>

                            <div class="relative overflow-hidden rounded-xl mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-amber-500 via-orange-500 to-red-500 opacity-10">
                                </div>
                                <div class="relative bg-gray-50 rounded-xl p-4 border border-amber-100">
                                    <p class="text-gray-700 italic mb-2">"The best place to hide a dead body is page 2
                                        of
                                        Google search results."</p>
                                    <p class="text-gray-500 text-sm text-right">- Anonymous</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-amber-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-amber-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-amber-700 font-bold">50+</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Top Rankings</p>
                                </div>
                                <div
                                    class="bg-orange-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-orange-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-orange-700 font-bold">300%</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-orange-500 to-red-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Traffic Growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Services Team -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-purple-500 via-fuchsia-500 to-pink-500 p-0.5 rounded-2xl hover:transform hover:scale-105 transition-all duration-300 h-full">
                        <div class="bg-white rounded-2xl p-8 h-full">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Client Services</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-purple-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-fuchsia-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-pink-500"></div>
                                    </div>
                                </div>
                                <img src="path-to-your-client-service-icon.png" alt="Client Services Icon"
                                    class="w-12 h-12 object-contain">
                            </div>

                            <p class="text-gray-600 mt-6 mb-6">Your success partners, available 24/7</p>

                            <div class="relative overflow-hidden rounded-xl mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-purple-500 via-fuchsia-500 to-pink-500 opacity-10">
                                </div>
                                <div class="relative bg-gray-50 rounded-xl p-4 border border-purple-100">
                                    <p class="text-gray-700 italic mb-2">"Customer service shouldn't just be a
                                        department,
                                        it should be the entire company."</p>
                                    <p class="text-gray-500 text-sm text-right">- Tony Hsieh</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-purple-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-purple-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-purple-700 font-bold">98%</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-500 to-fuchsia-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Satisfaction Rate</p>
                                </div>
                                <div
                                    class="bg-fuchsia-50 rounded-lg p-4 transform hover:-translate-y-1 transition-transform duration-300 border border-fuchsia-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <p class="text-fuchsia-700 font-bold">24/7</p>
                                        <div
                                            class="w-8 h-8 rounded-full bg-gradient-to-r from-fuchsia-500 to-pink-500 flex items-center justify-center">
                                            <img src="path-to-your-achievement-icon.png" alt="Achievement Icon"
                                                class="w-4 h-4">
                                        </div>
                                    </div>
                                    <p class="text-gray-600 text-sm">Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-16 px-4 sm:px-6 lg:px-8">
                <!-- Main Container -->
                <div class="max-w-7xl mx-auto">
                    <!-- Header with Line Design -->
                    <div class="flex items-center mb-16">
                        <div class="h-1 w-12 bg-indigo-600"></div>
                        <h2 class="text-2xl font-semibold text-slate-800 px-4">Our Collective Impact</h2>
                        <div class="h-1 flex-grow bg-slate-200"></div>
                    </div>

                    <!-- Stats Section with Innovative Layout -->
                    <div class="relative">
                        <!-- Decorative Elements -->
                        <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-50 -z-10"></div>
                        <div class="absolute bottom-0 left-0 w-32 h-32 bg-indigo-100 rounded-full -z-10 blur-2xl"></div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                            <!-- Stat 1 -->
                            <div
                                class="md:col-span-4 bg-white flex items-start p-8 border-l-4 border-2 rounded-2xl border-gray-200 border-l-indigo-600 hover:shadow-lg transition-shadow">
                                <div class="mr-6">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-4xl font-bold text-slate-800 mb-1">500+</span>
                                    <span class="text-sm text-slate-500 uppercase tracking-wider">Happy Clients</span>
                                </div>
                            </div>

                            <!-- Stat 2 -->
                            <div
                                class="md:col-span-4 rounded-2xl bg-indigo-600 text-white flex items-start p-8 hover:shadow-lg transition-shadow">
                                <div class="mr-6">
                                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-4xl font-bold mb-1">1000+</span>
                                    <span class="text-sm uppercase tracking-wider text-indigo-100">Projects
                                        Delivered</span>
                                </div>
                            </div>

                            <!-- Stat 3 -->
                            <div
                                class="md:col-span-4 bg-white flex items-start p-8 border-r-4 border-2 rounded-2xl border-gray-200 border-r-indigo-600 hover:shadow-lg transition-shadow">
                                <div class="mr-6">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-4xl font-bold text-slate-800 mb-1">98%</span>
                                    <span class="text-sm text-slate-500 uppercase tracking-wider">Client
                                        Retention</span>
                                </div>
                            </div>
                        </div>

                        <!-- Mission Statement with Modern Design -->
                        <div class="mt-16 md:mt-24 relative">
                            <div class="w-full rounded-2xl bg-slate-900 text-white p-10 md:p-16">
                                <!-- <div
                                    class="absolute right-0 top-0 w-32 h-32 bg-indigo-600 -z-10 md:translate-x-16 md:-translate-y-8">
                                </div> -->
                                <div class="flex items-center mb-8">
                                    <div class="w-12 h-1 bg-indigo-600"></div>
                                    <span class="text-sm text-indigo-400 ml-4 uppercase tracking-wider">Our
                                        Mission</span>
                                </div>
                                <blockquote class="text-2xl italic text-gray-300 font-semibold leading-relaxed mb-8">
                                    "Innovation distinguishes between a leader and a follower. We choose to lead,
                                    creating digital
                                    solutions that transform businesses and inspire change."
                                </blockquote>
                                <div class="flex items-center">
                                    <span class="text-sm text-slate-400">Our Guiding Philosophy</span>
                                    <div class="h-px w-16 bg-slate-700 ml-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')


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
<!-- Include GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    // Clone cards for infinite scroll
    const track = document.querySelector('.carousel-track');
    const cards = document.querySelectorAll('.team-card');

    // Clone cards and append to track
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });

    // Auto scroll animation
    let scrollAnimation;
    let isPaused = false;

    function startScrolling() {
        const scrollWidth = track.scrollWidth / 2; // Half because we cloned the items

        scrollAnimation = gsap.to(track, {
            x: -scrollWidth,
            duration: 20,
            ease: "none",
            repeat: -1,
            onRepeat: () => {
                gsap.set(track, { x: 0 });
            }
        });
    }

    // Hover effects with GSAP
    document.querySelectorAll('.team-card').forEach(card => {
        const infoBox = card.querySelector('.info-box');

        // Create hover animation
        card.addEventListener('mouseenter', () => {
            if (scrollAnimation) {
                scrollAnimation.pause();
            }
            gsap.to(infoBox, {
                height: "auto",
                duration: 0.2,
                ease: "power1.out"
            });
        });

        card.addEventListener('mouseleave', () => {
            if (scrollAnimation && !isPaused) {
                scrollAnimation.play();
            }
            gsap.to(infoBox, {
                height: "auto",
                duration: 0.2,
                ease: "power1.in"
            });
        });
    });

    // Start auto-scrolling
    startScrolling();

    // Pause on container hover
    const container = document.querySelector('.carousel-container');

    container.addEventListener('mouseenter', () => {
        isPaused = true;
        if (scrollAnimation) {
            scrollAnimation.pause();
        }
    });

    container.addEventListener('mouseleave', () => {
        isPaused = false;
        if (scrollAnimation) {
            scrollAnimation.play();
        }
    });

    // Draggable functionality
    Draggable.create(track, {
        type: "x",
        bounds: { minX: -track.scrollWidth / 2, maxX: 0 },
        edgeResistance: 0.65,
        inertia: true,
        onDragStart: () => {
            if (scrollAnimation) {
                scrollAnimation.pause();
            }
        },
        onDragEnd: () => {
            if (!isPaused) {
                scrollAnimation.play();
            }
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.group');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, {
            threshold: 0.1
        });

        cards.forEach(card => observer.observe(card));
    });
</script>

@endpush