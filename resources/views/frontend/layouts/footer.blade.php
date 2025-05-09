<!-- footer -->
<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 mb-20">

            <!-- Column 1: Branding & Contact -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-8">
                    <div class="w-12 h-12 bg-white/30 rounded-lg flex items-center justify-center">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="branding pioneers logo" class="w-full h-full">
                    </div>
                    <span class="ml-4 text-2xl font-bold text-teal-400">Branding Pioneers</span>
                </div>

                <!-- Contact Info -->
                <div class="space-y-5">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 mt-1 mr-3 text-teal-400 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <p class="font-medium">123 Digital Avenue</p>
                            <p class="text-sm text-gray-400">Tech Valley, CA 94016</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-teal-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <a href="tel:+15551234567" class="hover:text-teal-400 transition">+1 (555) 123-4567</a>
                    </div>

                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-teal-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:hello@digigrowth.com"
                            class="hover:text-teal-400 transition">hello@brandingpioneers.com</a>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-8">
                    <h4 class="text-sm font-semibold text-teal-400 mb-4">CONNECT WITH US</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="p-2 bg-gray-800 rounded-lg hover:bg-teal-500 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-gray-800 rounded-lg hover:bg-teal-500 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z" />
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-gray-800 rounded-lg hover:bg-teal-500 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                            </svg>
                        </a>
                        <a href="#" class="p-2 bg-gray-800 rounded-lg hover:bg-teal-500 transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Column 2: Services -->
            <div>
                <h4 class="text-sm font-semibold text-teal-400 mb-6">SERVICES</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Paid Advertising</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">SEO Optimization</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Web Development</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Social Media Marketing</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Content Strategy</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Email Marketing</a></li>
                </ul>
            </div>

            <!-- Column 3: Industries -->
            <div>
                <h4 class="text-sm font-semibold text-teal-400 mb-6">INDUSTRIES</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">E-commerce</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Healthcare</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">FinTech</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Education</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Manufacturing</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Startups</a></li>
                </ul>
            </div>

            <!-- Column 4: Company -->
            <div>
                <h4 class="text-sm font-semibold text-teal-400 mb-6">COMPANY</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">About Us</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Our Team</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Case Studies</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Testimonials</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Careers</a></li>
                    <li><a href="#" class="text-sm hover:text-teal-400 transition">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Column 5: CTA & Map -->
        <div class="flex md:flex-row flex-col gap-4">
            <!-- CTA Card -->
            <div class="bg-gradient-to-br from-gray-800 to-gray-850 p-6 rounded-xl border border-gray-700">
                <h4 class="text-lg font-bold text-teal-400 mb-4">Start Your Digital Journey</h4>
                <form class="space-y-4">
                    <input type="email" placeholder="Enter your email"
                        class="w-full px-4 py-3 bg-gray-700 rounded-lg placeholder-gray-400 focus:ring-2 focus:ring-teal-400 outline-none border border-gray-600">
                    <button
                        class="w-full bg-teal-600 hover:bg-teal-500 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-[1.02]">
                        Get Free Proposal
                    </button>
                </form>
            </div>

            <!-- Map -->
            <div class="h-64 w-full rounded-xl overflow-hidden border border-gray-700">


                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1625960925207!2d77.08273937536505!3d28.50475538987184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2286cb252607%3A0x5b5af71fbe24d212!2sBranding%20Pioneers!5e0!3m2!1sen!2sin!4v1738583781640!5m2!1sen!2sin"
                    class="w-full h-full filter grayscale hover:grayscale-0 transition duration-500"
                    style="border:0;" allowfullscreen loading="lazy">
                </iframe>

                <!-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201880.51115438552!2d-122.57768437848272!3d37.757617097271385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1717034379190!5m2!1sen!2sus"
                    class="w-full h-full filter grayscale hover:grayscale-0 transition duration-500"
                    style="border:0;" allowfullscreen>
                </iframe> -->
            </div>
        </div>


        <!-- Divider -->
        <div class="border-t border-gray-800 mb-12"></div>

        <!-- Bottom Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <!-- Quote -->
            <div class="text-center md:text-left">
                <p class="text-teal-400 italic">"Digital marketing is not about shouting, it's about meaningful
                    conversations."</p>
                <p class="text-sm text-gray-500 mt-1">- Seth Godin, Marketing Visionary</p>
            </div>

            <!-- Trust Badges -->
            <div class="flex items-center justify-center w-full ">
                <div class="h-10">
                    <img src="https://cdn.brandfetch.io/idWvz5T3V7/theme/light/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Google Partner" class="h-full opacity-90 hover:opacity-100 transition">
                </div>
                <div class="h-10">
                    <img src="https://cdn.brandfetch.io/idWvz5T3V7/theme/light/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Clutch" class="h-full opacity-90 hover:opacity-100 transition">
                </div>
                <div class="h-10">
                    <img src="https://cdn.brandfetch.io/idWvz5T3V7/theme/light/logo.svg?c=1dxbfHSJFAPEGdCLU4o5B"
                        alt="Meta Verified" class="h-full  opacity-90 hover:opacity-100 transition">
                </div>
            </div>

            <!-- Legal Links -->
            <div class="flex flex-wrap justify-center md:justify-end gap-4 text-sm">
                <a href="#" class="hover:text-teal-400 transition">Privacy Policy</a>
                <a href="#" class="hover:text-teal-400 transition">Terms of Service</a>
                <a href="#" class="hover:text-teal-400 transition">Cookie Settings</a>
                <a href="#" class="hover:text-teal-400 transition">Accessibility</a>
                <a href="#" class="hover:text-teal-400 transition">Accessibility</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-8 text-gray-500 text-sm">
            © 2024 DigiGrowth. All rights reserved. Crafted with ❤️ in Silicon Valley
        </div>
    </div>
</footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script src="{{asset('frontend/js/script.js')}}"></script>