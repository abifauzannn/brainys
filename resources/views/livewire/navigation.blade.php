<div class="header-nav fixed top-0 w-full z-50 py-3">
    <nav class="navbar container mx-auto">
        <!-- logo -->
        <div class="order-0">
            <a wire:navigate href="/">
                <img src="assets/images/logo.png" height="30" width="147" alt="logo" loading="lazy" />
            </a>
        </div>
        <!-- navbar toggler -->
        <input id="nav-toggle" type="checkbox" class="hidden" />
        <label id="show-button" for="nav-toggle" class="order-1 flex cursor-pointer items-center lg:order-1 lg:hidden">
            <svg class="h-6 fill-current" viewBox="0 0 20 20">
                <title>Menu Open</title>
                <path d="M0 3h20v2H0V3z m0 6h20v2H0V9z m0 6h20v2H0V0z"></path>
            </svg>
        </label>
        <label id="hide-button" for="nav-toggle" class="order-2 hidden cursor-pointer items-center lg:order-1">
            <svg class="h-6 fill-current" viewBox="0 0 20 20">
                <title>Menu Close</title>
                <polygon points="11 9 22 9 22 11 11 11 11 22 9 22 9 11 -2 11 -2 9 9 9 9 -2 11 -2"
                    transform="rotate(45 10 10)"></polygon>
            </svg>
        </label>
        <!-- /navbar toggler -->
        <ul id="nav-menu"
            class="navbar-nav order-2 hidden w-full flex-[0_0_100%] lg:order-1 lg:flex lg:w-auto lg:flex-auto lg:justify-center lg:space-x-5">
            <li class="nav-item">
                <a href="#banner-section" class="nav-link" data-link="banner-section">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="#key-feature-section" class="nav-link" data-link="key-feature-section">Templat</a>
            </li>
            <li class="nav-item">
                <a href="#service-section" class="nav-link" data-link="service-section">Cara Kerja</a>
            </li>
            <li class="nav-item">
                <a href="#review-section" class="nav-link" data-link="review-section">Feedback</a>
            </li>
            <li class="nav-item">
                <a href="#action-section" class="nav-link" data-link="action-section">Kontak</a>
            </li>
            <!-- Mobile View Only -->
            <li class="nav-item mt-3.5 lg:hidden flex flex-row items-center gap-4 justify-center items-center">
                <div class="flex items-center text-blue-500 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <a href="https://brainys.oasys.id/">Masuk</a>
                </div>
                <a class="btn btn-white btn-sm border border-blue-500" href="https://brainys.oasys.id/register">Sign Up
                    Now</a>
            </li>
        </ul>



        <div class="order-1 ml-auto hidden items-center md:order-2 md:ml-0 lg:flex gap-5">
            <div class="flex flex-row text-blue-500 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6Zm-5.03 4.72a.75.75 0 0 0 0 1.06l1.72 1.72H2.25a.75.75 0 0 0 0 1.5h10.94l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 0 0-1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
                <a href="https://brainys.oasys.id" target="_blank">Masuk</a>
            </div>


            <a class="btn bg-blue-500 text-white rounded-full shadow-md" href="https://brainys.oasys.id/register"
                target="_blank">Registrasi Sekarang</a>
        </div>
    </nav>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = Array.from(navLinks).map(link => document.querySelector(
            `#${link.getAttribute('data-link')}`));
        const headerHeight = document.querySelector('.header-nav').offsetHeight;
        const navToggle = document.getElementById('nav-toggle');

        const setActiveLink = () => {
            let scrollPos = window.scrollY + window.innerHeight / 2 - headerHeight;
            sections.forEach((section, index) => {
                if (section.offsetTop <= scrollPos && section.offsetTop + section.offsetHeight >
                    scrollPos) {
                    navLinks[index].classList.add('active');
                } else {
                    navLinks[index].classList.remove('active');
                }
            });
        };

        // Add smooth scrolling, mt-8 to the target section, and close the mobile menu
        navLinks.forEach((link, index) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                sections.forEach(section => section.classList.remove(
                    'mt-8')); // Remove mt-8 from all sections

                const targetSection = sections[index];
                targetSection.classList.add('mt-8'); // Add mt-8 to the target section

                // Scroll to the section
                window.scrollTo({
                    top: targetSection.offsetTop - headerHeight,
                    behavior: 'smooth'
                });

                // Close the mobile menu if open
                if (navToggle.checked) {
                    navToggle.checked = false;
                }
            });
        });

        // Check initial scroll position on page load
        setActiveLink();

        window.addEventListener('scroll', setActiveLink);
    });
</script>
