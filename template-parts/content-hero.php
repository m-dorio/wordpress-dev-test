<?php
// Headline with proper fallback
$headline = 'Your Trusted Family-Owned Crane Service';
if (function_exists('get_field') && ($acf_headline = get_field('hero_heading')) && !empty($acf_headline)) {
    $headline = $acf_headline;
}

// Subheading
$sub = 'Melbourne & Regional Victoria';
if (function_exists('get_field') && ($acf_sub = get_field('hero_subheading')) && !empty($acf_sub)) {
    $sub = $acf_sub;
}

// CTA Text
$cta_text = 'Get Quote';
if (function_exists('get_field') && ($acf_cta = get_field('hero_cta_text')) && !empty($acf_cta)) {
    $cta_text = $acf_cta;
}

// CTA URL
$cta_url = '/contact';
if (function_exists('get_field') && ($acf_url = get_field('hero_cta_link')) && !empty($acf_url)) {
    $cta_url = $acf_url;
}

// Image (special handling)
$image = get_stylesheet_directory_uri() . '/assets/img/hero-bg.jpg';
if (function_exists('get_field')) {
    $acf_image = get_field('hero_image');
    if (is_array($acf_image) && !empty($acf_image['url'])) {
        $image = $acf_image['url'];
    } elseif (is_string($acf_image) && !empty($acf_image)) {
        $image = $acf_image;
    }
}
?>

<!-- Hero Section -->
<?php
// Get all carousel slides
$carousel_slides = array();
for ($i = 1; $i <= 3; $i++) {
    $image = get_field('cta' . $i . '_image');
    $badge = get_field('cta' . $i . '_badge');
    $text = get_field('cta' . $i . '_text');
    $sub = get_field('cta' . $i . '_sub');
    $url = get_field('cta' . $i . '_url');
    $btn = get_field('cta' . $i . '_btn') ?: 'Contact';

    if ($image || $text) {
        $carousel_slides[] = array(
            'image' => $image,
            'badge' => $badge,
            'text' => $text,
            'sub' => $sub,
            'url' => $url,
            'btn' => $btn
        );
    }
}

if (!empty($carousel_slides)): ?>
    <section id="home" class="hero">
        <div class="hero-content">
            <?php foreach ($carousel_slides as $index => $slide): ?>
                <div class="slide fade <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>">

                    <div class="hero-content-carousel">
                        <div class="carousel-content">
                            <?php if ($slide['badge']): ?>
                                <div class="hero-badge"><?php echo esc_html($slide['badge']); ?></div>
                            <?php endif; ?>


                            <?php if ($slide['sub']): ?>
                                <p><?php echo esc_html($slide['sub']); ?></p>
                            <?php endif; ?>

                            <?php if ($slide['text']): ?>
                                <h1><?php echo esc_html($slide['text']); ?></h1>
                            <?php endif; ?>


                            <?php if ($slide['url']): ?>
                                <a href="<?php echo esc_url($slide['url']); ?>" class="btn btn-primary">
                                    <?php echo esc_html($slide['btn']); ?>
                                </a>
                            <?php endif; ?>
                            <!-- <?php if ($slide['image']): ?>
                            <div class="hero-background">
                                <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo esc_attr($slide['text'] ?: 'Carousel slide'); ?>">
                            </div>

                        <?php endif; ?> -->
                        </div>
                        <div class="banner-carousel-image">
                            <img src="/placeholder.svg?height=400&amp;width=600" alt="Banner Image">
                        </div>

                    </div>


                </div>
            <?php endforeach; ?>

            <?php if (count($carousel_slides) > 1): ?>
                <div class="hero-nav">
                    <button class="hero-nav-btn prev" id="hero-prev" aria-label="Previous slide"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="hero-nav-btn next" id="hero-next" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <div class="hero-indicators" id="hero-indicators">
                    <?php foreach ($carousel_slides as $index => $slide): ?>
                        <button class="hero-indicator <?php echo $index === 0 ? 'active' : ''; ?>"
                            data-slide="<?php echo $index; ?>"
                            aria-label="Go to slide <?php echo $index + 1; ?>"></button>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<style>
    /* Hero Carousel Styles */
    .hero {
        position: relative;
        height: 900px;
        min-height: 600px;
        overflow: hidden;
        max-width: 1920px;
        margin: 0 auto;
        background:
            linear-gradient(141deg, #214CA1 0%,
                #214CA1 50%,
                #ffffff 50%,
                #ffffff 90%,
                #ff6b35 16%,
                #ff6b35 10%)
    }

    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }

    .slide.active {
        opacity: 1;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .hero-background img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        padding: 0 20px;
        max-width: 1280px;
        margin: 0 auto;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
    }

    .hero-content-carousel {
        position: relative;
        z-index: 2;
        color: white;
        padding: 0 20px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-content-carousel .banner-carousel-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-content-carousel .carousel-content {
        z-index: 2;
        color: white;
        padding: 0 20px;
        max-width: 660px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
    }



    .hero-content-carousel a {
        text-transform: uppercase;
    }

    .hero-badge {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 8px 20px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .hero-content-carousel h1 {
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        text-align: start;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content-carousel p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        max-width: 600px;
    }

    /* Navigation buttons */
    .hero-nav {
        position: absolute;
        bottom: 0%;
        right: 20px;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        z-index: 2;
    }

    .hero-nav-btn {
        border: none;
        color: white;
        font-size: 2rem;
        padding: 15px;
        cursor: pointer;
        z-index: 3;
        transition: background 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .hero-nav-btn:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .hero-nav-btn.prev {}

    .hero-nav-btn.next {}

    /* Indicators */
    .hero-indicators {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 3;
    }

    .hero-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        border: 2px solid white;
        background: #333333;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .hero-indicator.active {
        background: #ff6600;
    }

    /* Responsive */
    @media (max-width: 768px) {

        .hero-content-carousel p {
            font-size: 1.1rem;
        }

        .hero-nav-btn {
            padding: 10px;
            font-size: 1.5rem;
        }

        .hero-content-carousel {
            display: flex;
            flex-direction: column-reverse;
        }

        .hero-content-carousel .banner-carousel-image{
            height: 100%;
        }
    }
</style>

<script>
    // Add this to your existing carousel JS or create new file
    document.addEventListener('DOMContentLoaded', function() {
        const hero = document.getElementById('home');
        if (!hero) return;

        const slides = hero.querySelectorAll('.slide');
        const indicators = hero.querySelectorAll('.hero-indicator');
        const prevBtn = document.getElementById('hero-prev');
        const nextBtn = document.getElementById('hero-next');

        if (slides.length <= 1) return; // No need for carousel if only one slide

        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            // Remove active class from all slides and indicators
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));

            // Add active class to current slide and indicator
            slides[index].classList.add('active');
            if (indicators[index]) {
                indicators[index].classList.add('active');
            }

            currentSlide = index;
        }

        function nextSlide() {
            showSlide((currentSlide + 1) % slides.length);
        }

        function prevSlide() {
            showSlide((currentSlide - 1 + slides.length) % slides.length);
        }

        // Auto-rotate slides
        function startSlider() {
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }

        function stopSlider() {
            clearInterval(slideInterval);
        }

        // Event listeners
        if (nextBtn) nextBtn.addEventListener('click', () => {
            stopSlider();
            nextSlide();
            startSlider();
        });

        if (prevBtn) prevBtn.addEventListener('click', () => {
            stopSlider();
            prevSlide();
            startSlider();
        });

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                stopSlider();
                showSlide(index);
                startSlider();
            });
        });

        // Pause on hover
        hero.addEventListener('mouseenter', stopSlider);
        hero.addEventListener('mouseleave', startSlider);

        // Start the slider
        startSlider();
    });
</script>