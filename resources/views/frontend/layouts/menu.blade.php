<style>
    /* Base Styles */
    .mega-menu {
        display: none;
        position: absolute;
        left: 0;
        right: 0;
        background-color: white;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        z-index: 40;
        padding: 2rem 0;
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        transform: translateY(-10px);
        opacity: 0;
    }

    .has-mega-menu:hover .mega-menu {
        display: block;
        transform: translateY(0);
        opacity: 1;
    }

    .nav-highlight {
        position: relative;
    }



    .nav-highlight:hover::after {
        width: 80%;
    }

    /* Accessibility */
    .accessibility-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #0D9488;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 50;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
</style>

<!-- Navbar -->
<nav class="bg-white shadow-sm fixed z-50 w-full">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-2">
                <img src="frontend/images/logo.png" alt="Company logo" class="h-10 w-auto" />
                <span class="text-lg md:text-xl font-bold text-gray-800">
                    Branding Pioneers
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class=" lg:!flex items-center space-x-1 xl:space-x-4 h-full">
                <!-- Services Menu (with Mega Menu) -->
                <div class="has-mega-menu relative h-full flex items-center">
                    <button class="nav-highlight relative px-3 py-2 text-gray-600 hover:text-teal-600 font-medium">
                        Services
                    </button>
                    <div class="mega-menu top-[62px]">
                        <div class="container mx-auto px-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Left Column -->
                                <div class="col-span-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-4">Digital Marketing Services</h3>
                                    <p class="text-sm text-gray-600 mb-6">Boost your online presence and grow your
                                        business with our comprehensive digital marketing solutions tailored to your
                                        specific needs and goals.</p>
                                    <a href="#" class="inline-flex items-center text-teal-600 font-medium">
                                        Explore All Services
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>

                                <!-- Right Column - Menu Items -->
                                <div class="col-span-2">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                                        <!-- Menu Item 1 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-graph-up text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">SEO
                                                    & Content Marketing</span>
                                                <span class="text-xs text-gray-500">Rank higher on search engines</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 2 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-megaphone text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Paid
                                                    Advertising</span>
                                                <span class="text-xs text-gray-500">PPC, Google Ads, Meta Ads</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 3 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-people text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Social
                                                    Media Marketing</span>
                                                <span class="text-xs text-gray-500">Engage with your audience</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 4 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-envelope text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Email
                                                    Marketing</span>
                                                <span class="text-xs text-gray-500">Nurture leads and conversions</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 5 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-code-square text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Web
                                                    Development</span>
                                                <span class="text-xs text-gray-500">High-converting websites</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 6 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-bar-chart text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Analytics
                                                    & Reporting</span>
                                                <span class="text-xs text-gray-500">Data-driven decision making</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industries Menu -->
                <div class="has-mega-menu relative h-full flex items-center">
                    <button class="nav-highlight relative px-3 py-2 text-gray-600 hover:text-teal-600 font-medium">
                        Industries
                    </button>
                    <div class="mega-menu top-[64px]">
                        <div class="container mx-auto px-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Left Column -->
                                <div class="col-span-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-4">Industries We Serve</h3>
                                    <p class="text-sm text-gray-600 mb-6">We've helped businesses across various
                                        industries achieve remarkable growth through strategic digital marketing
                                        campaigns tailored to their specific market needs.</p>
                                    <a href="#" class="inline-flex items-center text-teal-600 font-medium">
                                        View All Industries
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>

                                <!-- Right Column - Menu Items -->
                                <div class="col-span-2">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4">
                                        <!-- Menu Item 1 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-shop text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">E-Commerce</span>
                                                <span class="text-xs text-gray-500">Drive sales and conversions</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 2 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-bank text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Finance
                                                    & Banking</span>
                                                <span class="text-xs text-gray-500">Secure and trustworthy
                                                    marketing</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 3 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-house-door text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Real
                                                    Estate</span>
                                                <span class="text-xs text-gray-500">Property marketing expertise</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 4 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-globe text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Travel
                                                    & Hospitality</span>
                                                <span class="text-xs text-gray-500">Boost bookings and
                                                    engagement</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 5 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-heart-pulse text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">Healthcare</span>
                                                <span class="text-xs text-gray-500">Compliant medical marketing</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>

                                        <!-- Menu Item 6 -->
                                        <a href="#"
                                            class="group flex items-center space-x-3 text-gray-700 hover:text-teal-600">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-building text-xl text-teal-600"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span
                                                    class="font-medium group-hover:text-teal-600 transition-colors">B2B
                                                    Services</span>
                                                <span class="text-xs text-gray-500">Lead generation strategies</span>
                                            </div>
                                            <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity">
                                                <i class="bi bi-arrow-right text-teal-600"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Studies Menu -->
                <div class="has-mega-menu relative h-full flex items-center">
                    <button class="nav-highlight relative px-3 py-2 text-gray-600 hover:text-teal-600 font-medium">
                        Case Studies
                    </button>
                    <div class="mega-menu top-[64px]">
                        <div class="container mx-auto px-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Left Column -->
                                <div class="col-span-1">
                                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Success Stories</h3>
                                    <p class="text-sm text-gray-600 mb-6">Discover how we've helped our clients achieve
                                        remarkable growth and success through strategic digital marketing campaigns and
                                        customized solutions.</p>
                                    <a href="#" class="inline-flex items-center text-teal-600 font-medium">
                                        View All Case Studies
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>

                                <!-- Right Column - Menu Items -->
                                <div class="col-span-2">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Featured Case Study 1 -->
                                        <a href="#"
                                            class="group block bg-gray-50 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h4 class="font-semibold text-gray-800 group-hover:text-teal-600">
                                                        TechEdge Solutions</h4>
                                                    <span
                                                        class="text-xs text-white bg-teal-600 px-2 py-1 rounded">SaaS</span>
                                                </div>
                                                <p class="text-xs text-gray-600 mb-3">300% increase in qualified leads
                                                    through targeted SEO and PPC campaigns.</p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-xs text-gray-500">ROI: 450%</span>
                                                    <span class="text-teal-600 text-sm group-hover:underline">Read
                                                        more</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Featured Case Study 2 -->
                                        <a href="#"
                                            class="group block bg-gray-50 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h4 class="font-semibold text-gray-800 group-hover:text-teal-600">
                                                        LuxHome Realty</h4>
                                                    <span class="text-xs text-white bg-teal-600 px-2 py-1 rounded">Real
                                                        Estate</span>
                                                </div>
                                                <p class="text-xs text-gray-600 mb-3">200% increase in property
                                                    inquiries through targeted social media campaigns.</p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-xs text-gray-500">ROI: 320%</span>
                                                    <span class="text-teal-600 text-sm group-hover:underline">Read
                                                        more</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Featured Case Study 3 -->
                                        <a href="#"
                                            class="group block bg-gray-50 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h4 class="font-semibold text-gray-800 group-hover:text-teal-600">
                                                        EcoFresh Groceries</h4>
                                                    <span
                                                        class="text-xs text-white bg-teal-600 px-2 py-1 rounded">E-Commerce</span>
                                                </div>
                                                <p class="text-xs text-gray-600 mb-3">150% growth in online sales
                                                    through comprehensive e-commerce strategy.</p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-xs text-gray-500">ROI: 280%</span>
                                                    <span class="text-teal-600 text-sm group-hover:underline">Read
                                                        more</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- Featured Case Study 4 -->
                                        <a href="#"
                                            class="group block bg-gray-50 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                            <div class="p-4">
                                                <div class="flex items-center justify-between mb-2">
                                                    <h4 class="font-semibold text-gray-800 group-hover:text-teal-600">
                                                        WellnessMD Clinic</h4>
                                                    <span
                                                        class="text-xs text-white bg-teal-600 px-2 py-1 rounded">Healthcare</span>
                                                </div>
                                                <p class="text-xs text-gray-600 mb-3">250% increase in appointment
                                                    bookings through local SEO and Google Ads.</p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-xs text-gray-500">ROI: 380%</span>
                                                    <span class="text-teal-600 text-sm group-hover:underline">Read
                                                        more</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other Menu Items -->
                <a href="#"
                    class="nav-highlight relative px-3 py-2 text-gray-600 hover:text-teal-600 font-medium">
                    Our Team
                </a>
                <a href="#"
                    class="nav-highlight relative px-3 py-2 text-gray-600 hover:text-teal-600 font-medium">
                    About Us
                </a>

                <!-- CTA Button -->
                <a href="#"
                    class="ml-2 px-4 py-2 bg-teal-600 text-white rounded-md hover:bg-teal-700 transition-colors">
                    Know More
                </a>

                <!-- Search Button -->
                <button class="p-2 text-gray-600 hover:text-teal-600">
                    <i class="bi bi-search text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden p-2 text-gray-600">
                <i class="bi bi-list text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-md">
        <div class="px-4 py-3 space-y-1">
            <!-- Mobile Accordion Menu -->
            <div class="mobile-accordion">
                <button
                    class="mobile-accordion-button w-full text-left px-3 py-2 text-gray-600 flex justify-between items-center">
                    <span>Case Studies</span>
                    <i class="bi bi-plus text-teal-600"></i>
                </button>
                <div class="mobile-accordion-content hidden px-3 py-2">
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">TechEdge Solutions (SaaS)</a>
                        </li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">LuxHome Realty (Real
                                Estate)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">EcoFresh Groceries
                                (E-Commerce)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">WellnessMD Clinic
                                (Healthcare)</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-teal-600">View All Case Studies</a></li>
                    </ul>
                </div>
            </div>

            <!-- Other Mobile Menu Items -->
            <a href="#" class="block px-3 py-2 text-gray-600 hover:text-teal-600">
                Our Team
            </a>
            <a href="#" class="block px-3 py-2 text-gray-600 hover:text-teal-600">
                About Us
            </a>

            <!-- CTA in Mobile Menu -->
            <div class="mt-3 px-3">
                <a href="#"
                    class="block w-full py-2 text-center bg-teal-600 text-white rounded-md hover:bg-teal-700 transition-colors">
                    Know More
                </a>
            </div>

            <!-- Search in Mobile -->
            <div class="mt-4 px-3">
                <div class="relative">
                    <input type="text" placeholder="Search..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <button
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-teal-600">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript -->
<script>
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Mobile Accordion Menu
    const accordionButtons = document.querySelectorAll('.mobile-accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');

            // Toggle content
            content.classList.toggle('hidden');

            // Toggle icon
            if (content.classList.contains('hidden')) {
                icon.classList.remove('bi-dash');
                icon.classList.add('bi-plus');
            } else {
                icon.classList.remove('bi-plus');
                icon.classList.add('bi-dash');
            }
        });
    });

    // Fix for desktop menu visibility on large screens
    const desktopMenu = document.querySelector('nav .hidden.lg\\:!flex');

    function adjustMenuVisibility() {
        if (window.innerWidth >= 1024 && desktopMenu) {
            desktopMenu.style.display = 'flex';
        }
    }

    // Run on load and resize
    window.addEventListener('load', adjustMenuVisibility);
    window.addEventListener('resize', adjustMenuVisibility);

    // Mega Menu Animation
    const megaMenus = document.querySelectorAll('.mega-menu');
    megaMenus.forEach(menu => {
        const parentItem = menu.closest('.has-mega-menu');

        // Add a slight delay on mouseout to make the menu feel more responsive
        let timeout;

        parentItem.addEventListener('mouseenter', () => {
            clearTimeout(timeout);
            menu.style.display = 'block';
            setTimeout(() => {
                menu.style.opacity = '1';
                menu.style.transform = 'translateY(0)';
            }, 50);
        });

        parentItem.addEventListener('mouseleave', () => {
            timeout = setTimeout(() => {
                menu.style.opacity = '0';
                menu.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    menu.style.display = 'none';
                }, 300);
            }, 100);
        });
    });
</script>
