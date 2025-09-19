<?php

/**
 * Template Name: Front Page
 */

get_header(); ?>

<main id="primary" class="site-main">

    <?php get_template_part('template-parts/content', 'hero'); ?>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/section--2-atl-crane-trucks.png?height=400&width=600" alt="ATL Crane Trucks in action">
                </div>
                <div class="about-text">
                    <div class="section-badge">WELCOME TO</div>
                    <h2 class="section-title">ATL Crane Trucks</h2>
                    <p>At ATL Crane Trucks, we've been proudly serving the Melbourne metropolitan area and regional Victoria for over 30 years. We're not just another crane service – we're a family-owned and operated business, and that's what sets us apart. Our dedicated team, combined with our modern fleet of crane trucks, is committed to delivering fast, reliable, and personalised crane services that cater to your unique needs.</p>
                    <a href="#contact" class="btn-primary">CONTACT</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="services-content">
                <div class="services-text">
                    <div class="section-badge">WHAT WE DO</div>
                    <h2 class="section-title">Our Services</h2>
                    <p>Our fleet of state-of-the-art crane trucks is equipped to handle a wide range of lifting needs, helping you get on with the job at hand. From residential projects to large-scale commercial jobs, all of our cranes are 5-tonne to 8-tonne. Whether you require assistance with concrete products, building materials, air conditioning units, swimming pools, or any other heavy lifting task, we have the expertise and equipment to get the job done safely and efficiently. We service both the Melbourne metro area and regional Victoria.</p>
                    <a href="#services" class="btn-primary">SERVICES</a>
                </div>
                <div class="services-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/section--3-our-serices.png?height=400&width=600" alt="Our crane services">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas Section -->
    <section class="service-areas">
        <div class="container">
            <div class="service-areas-content">
                <div class="service-areas-map">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/section--4-service-areas.png?height=400&width=500" alt="Service areas map">
                </div>
                <div class="service-areas-text">
                    <div class="section-badge">WHERE WE SERVE</div>
                    <h2 class="section-title">Service Areas</h2>
                    <p>We provide our crane services all over Melbourne and across regional Victoria. No matter where you're located, and no matter what you need lifted, we're here to help. Contact us today to see if we cover your specific suburb.</p>
                    <a href="#contact" class="btn-primary">CONTACT</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose">
        <!-- <div class="why-choose-background">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/placeholder.svg?height=600&width=1200" alt="Construction site background">
        </div> -->
        <div class="container">
            <div class="why-choose-content">
                <div class="section-badge">REASONS</div>
                <h2 class="section-title">Why Choose Us?</h2>
                <p>With over three decades of experience, we've professional crane services across Melbourne and regional Victoria. We're a family-owned business, which means you'll receive personalised service. Our personal touch, dedication, and commitment to getting the job done right the first time sets us apart from the competition. When you choose ATL Crane Trucks, you're not just hiring a crane service – you're becoming part of our extended family.</p>
                <p>We take you for granted at ATL Crane Trucks. For your lifting needs, we're committed to providing you with the highest level of professionalism. Contact us today for reliable, efficient and cost-effective crane hire services.</p>
                <a href="#about-us" class="btn-primary">ABOUT US</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-image-desktop">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/section--6-get-in-touch.png?height=400&width=600" alt="ATL Crane Trucks contact">
                </div>
                <div class="contact-info">
                    <div class="section-badge">CONTACT</div>
                    <h2 class="section-title">Get In Touch</h2>
                    <div class="contact-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/section--6-get-in-touch.png?height=400&width=600" alt="ATL Crane Trucks contact">
                    </div>

                    <p>ATL Crane Trucks has been operating as a family-owned business that prioritises customer satisfaction. We understand that your time is valuable, which is why we aim to serve our customers efficiently and effectively. Getting a quote or booking our reliable service is just a phone call away.</p>

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

                    <a href="#services" class="btn-primary">SERVICES</a>
                </div>

            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>