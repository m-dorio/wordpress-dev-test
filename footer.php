</main><!-- #main-content -->

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#about">Why ATL</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img//section--7-footer-logo.png?height=60&width=140" alt="ATL Crane Trucks">
                </div>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fa-brands fa-facebook-f" style="color: #fff;"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-twitter" style="color: #fff;"></i></a>
                    <a href="#" class="social-link"><i class="fa-brands fa-instagram" style="color: #fff;"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <div class="contact-custom-details">
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <strong>Adrian Larkin</strong>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon"><i class="fa-solid fa-phone" style="color: #f47a20;"></i></span>
                            <a href="tel:+0402268122"> <span>0402 268 122</span></a>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon"><i class="fa-solid fa-envelope" style="color: #f47a20;"></i></span>
                            <a href="mailto:atlcranetrucks@gmail.com"><span>atlcranetrucks@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div>
                <p>Copyright © 2023 ATL Crane Trucks. All Rights Reserved. | Web Design by <a href="#">Netwizard Design</a></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


<script>
    // Mobile Navigation Toggle
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.querySelector('.nav-menu');

    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        navToggle.classList.toggle('active');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
        });
    });

    // Header scroll effect
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        const nav_menu = document.querySelectorAll('.header [id^="menu-item-"] a');
        const contact_nav_menu = document.querySelector('#nav_contact a');
        if (window.scrollY > 10) {
            header.style.background = '#214CA1';
            header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';

            nav_menu.forEach(link => {
                link.style.color = '#FFF'; // Change color on scroll
            });


        } else {
            header.style.background = 'transparent';
            header.style.boxShadow = 'none';
            nav_menu.forEach(link => {
                link.style.color = '#fff'; // Change color on scroll
            });
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Add fade-in class to sections and observe them
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            section.classList.add('fade-in');
            observer.observe(section);
        });
    });

    // Hero navigation buttons (placeholder functionality)
    const heroPrev = document.getElementById('hero-prev');
    const heroNext = document.getElementById('hero-next');

    heroPrev.addEventListener('click', () => {
        // Add your hero slider previous functionality here
        console.log('Previous slide');
    });

    heroNext.addEventListener('click', () => {
        // Add your hero slider next functionality here
        console.log('Next slide');
    });

    // Contact form handling (if you add a form later)
    function handleContactForm(event) {
        event.preventDefault();
        // Add your form submission logic here
        alert('Thank you for your message! We will get back to you soon.');
    }

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Add active class to current navigation item
    function setActiveNavItem() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', setActiveNavItem);

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', () => {
        setActiveNavItem();
    });
</script>

</body>

</html>