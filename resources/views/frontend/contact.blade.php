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



    <div class="h-20"></div>

    <section class="min-h-screen   py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">

            <div class="relative mb-16 overflow-hidden rounded-3xl bg-gray-900 p-8 lg:p-12">
                <div class="absolute inset-0 opacity-20">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,#4fd1c5_0%,transparent_50%)]">
                    </div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_60%,#2dd4bf_0%,transparent_50%)]">
                    </div>
                </div>
                <div class="relative">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4">Let's Create <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-teal-200">Digital
                            Magic</span>
                    </h1>
                    <p class="text-gray-300 text-lg md:text-xl max-w-2xl" id="typingText">Your vision, our expertise -
                        together we'll transform the digital landscape.</p>
                </div>
            </div>


            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div class="bg-white rounded-3xl p-8 shadow-2xl ">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-600 mb-2">Branding Pioneers</h2>
                        <div class="h-1 w-24 bg-gradient-to-r from-teal-400 to-teal-600 rounded-full"></div>
                    </div>

                    <div class="space-y-6">
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Transforming brands through innovative digital solutions and creative excellence.
                        </p>

                        <div class="flex items-center space-x-2 text-gray-700">
                            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <address class="not-italic text-gray-500">
                                Plot No - 750, 3rd Floor, Phase V, Udyog Vihar, Sector 19 <br>
                                Gurugram, Haryana 122016
                            </address>
                        </div>

                        <div class="flex flex-col space-y-4">
                            <a href="tel:+1234567890"
                                class="group relative overflow-hidden rounded-xl bg-gradient-to-r from-teal-500 to-teal-400 px-6 py-3 text-white shadow-lg transition-all duration-300 hover:shadow-2xl">
                                <div
                                    class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity">
                                </div>
                                <div class="flex items-center justify-center space-x-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="font-medium">Schedule a Call</span>
                                </div>
                            </a>

                            <a href="mailto:connect@digitalcraft.studio"
                                class="group relative overflow-hidden rounded-xl border-2 border-teal-500 px-6 py-3 text-teal-500 transition-all duration-300 hover:bg-teal-50">
                                <div class="flex items-center justify-center space-x-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="font-medium">Send Message</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="group relative overflow-hidden rounded-3xl bg-white shadow-xl">
                        <div class="h-full">
                            <img src="https://brandingpioneers.com/images/about/arush.webp" alt="Sarah Chen"
                                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div
                                class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-xl font-bold mb-1">Arush Thapar</h3>
                                <p class="text-teal-300 font-medium mb-2">Managing Partner</p>
                                <p
                                    class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                                    Pioneering creative strategies that define the digital era.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="group relative overflow-hidden rounded-3xl bg-white shadow-xl">
                        <div class="h-full">
                            <img src="https://brandingpioneers.com/images/about/nishu.webp" alt="Michael Rodriguez"
                                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <div
                                class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-xl font-bold mb-1">Nishu Sharma</h3>
                                <p class="text-teal-300 font-medium mb-2">Strategy Director</p>
                                <p
                                    class="text-sm text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                                    Crafting digital strategies that drive measurable results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us section -->
    <section id="contact-form" class="contact-section flex items-center justify-center w-full py-16 px-4">
        <!-- Map Background -->
        <div class="map-background">
            <img src="{{asset('frontend/images/map.png')}}" alt="Office Location Map" class="w-full h-full object-cover">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center text-teal-500 hover:bg-teal-500 hover:text-white transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="currentColor">
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
        // Unique function names with clear prefixes 
        const contactFormValidator = {
            init: function () {
                const form = document.getElementById('contactFormElement');
                const submitButton = document.getElementById('contactSubmitBtn');
                const formStatus = document.getElementById('formStatus');

                // Initialize validation
                this.setupFormListeners(form, submitButton, formStatus);
                this.setupInputListeners();
            },

            setupFormListeners: function (form, submitButton, formStatus) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    // Validate all fields before submission
                    const isNameValid = contactFormValidator.validateName();
                    const isEmailValid = contactFormValidator.validateEmail();
                    const isMessageValid = contactFormValidator.validateMessage();

                    if (isNameValid && isEmailValid && isMessageValid) {
                        // Show loading state
                        submitButton.disabled = true;
                        submitButton.classList.add('opacity-75');
                        submitButton.innerHTML = '<span>Sending...</span><svg class="animate-spin ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';

                        // Simulate form submission (replace with formester connection)
                        setTimeout(function () {
                            submitButton.disabled = false;
                            submitButton.classList.remove('opacity-75');
                            submitButton.innerHTML = '<span>Send Message</span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>';

                            // Show success message
                            formStatus.textContent = "Message sent successfully!";
                            formStatus.className = "text-sm text-teal-500";

                            // Reset form
                            form.reset();
                            document.querySelectorAll('.success-checkmark').forEach(checkmark => {
                                checkmark.style.display = 'none';
                            });

                            // Clear success message after 3 seconds
                            setTimeout(function () {
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

            setupInputListeners: function () {
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
                subjectInput.addEventListener('input', function () {
                    const checkmark = subjectInput.nextElementSibling.nextElementSibling;
                    if (subjectInput.value.trim() !== '') {
                        checkmark.style.display = 'inline';
                    } else {
                        checkmark.style.display = 'none';
                    }
                });
            },

            validateName: function () {
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

            validateEmail: function () {
                const emailInput = document.getElementById('contactEmail');
                const emailError = document.getElementById('emailError');
                const checkmark = emailInput.nextElementSibling.nextElementSibling.nextElementSibling;

                const value = emailInput.value.trim();
                const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

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

            validateMessage: function () {
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

            showError: function (inputId, errorId, message) {
                const input = document.getElementById(inputId);
                const error = document.getElementById(errorId);

                input.classList.add('invalid-input');
                error.textContent = message || error.textContent;
                error.style.display = 'block';

                input.nextElementSibling.nextElementSibling.nextElementSibling.style.display = 'none';
            },

            hideError: function (inputId, errorId) {
                const input = document.getElementById(inputId);
                const error = document.getElementById(errorId);

                input.classList.remove('invalid-input');
                error.style.display = 'none';
            }
        };

        // Initialize the contact form validator
        document.addEventListener('DOMContentLoaded', function () {
            contactFormValidator.init();

            // Smooth scroll function for CTAs
            document.querySelectorAll('a[href="#contact-form"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
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
                setTimeout(function () {
                    formContainer.classList.remove('pulse-animation');
                }, 5000);
            }
        });
    </script>

    @endpush
