<?php
// Prepare carousel slides array from CTA groups
$carousel_slides = [];

for ($i = 1; $i <= 3; $i++) {
    $cta = get_field('cta_block_' . $i); // Get group field

    if (!$cta) continue;

    $image = $cta['image'] ?? '';
    $text = $cta['text'] ?? '';
    $sub = $cta['sub'] ?? '';
    $url = $cta['url'] ?? '';
    $btn = $cta['btn'] ?? 'Contact';
    $badge = $cta['badge'] ?? '';

    if ($image || $text) {
        // Handle image object or URL
        if (is_array($image)) {
            $image_url = $image['url'] ?? '';
            $alt_text = $image['alt'] ?? ($text ?: 'Carousel image');
        } else {
            $image_url = $image;
            $alt_text = $text ?: 'Carousel image';
        }

        $carousel_slides[] = [
            'image' => $image_url,
            'alt' => $alt_text,
            'badge' => $badge,
            'text' => $text,
            'sub' => $sub,
            'url' => $url,
            'btn' => $btn
        ];
    }
}

// Load additional gallery images (unchanged)
$gallery_images = get_field('banner_carousel_images');
if (!empty($gallery_images) && is_array($gallery_images)) {
    foreach ($gallery_images as $gallery_image) {
        if (is_array($gallery_image)) {
            $image_url = $gallery_image['url'] ?? '';
            $alt_text = $gallery_image['alt'] ?? 'Carousel image';
        } else {
            $image_url = wp_get_attachment_url($gallery_image);
            $alt_text = get_post_meta($gallery_image, '_wp_attachment_image_alt', true) ?: 'Carousel image';
        }

        if ($image_url) {
            $carousel_slides[] = [
                'image' => $image_url,
                'alt' => $alt_text,
                'badge' => '',
                'text' => '',
                'sub' => '',
                'url' => '',
                'btn' => ''
            ];
        }
    }
}
?>



<?php if (!empty($carousel_slides)): ?>
    <section id="home" class="hero">
        <div class="hero-content">
            <?php foreach ($carousel_slides as $index => $slide): ?>
                <div class="slide fade <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>">
                    <div class="hero-content-carousel">
                        <div class="carousel-content">
                            <?php if (!empty($slide['badge'])): ?>
                                <div class="hero-badge"><?php echo esc_html($slide['badge']); ?></div>
                            <?php endif; ?>

                            <?php if (!empty($slide['sub'])): ?>
                                <p><?php echo esc_html($slide['sub']); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($slide['text'])): ?>
                                <h1><?php echo esc_html($slide['text']); ?></h1>
                            <?php endif; ?>

                            <?php if (!empty($slide['url'])): ?>
                                <a href="<?php echo esc_url($slide['url']); ?>" class="btn btn-primary">
                                    <?php echo esc_html($slide['btn']); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="carousel-container">
                            <div class="banner-carousel-image">
                                <?php if (!empty($slide['image'])): ?>
                                    <img src="<?php echo esc_url($slide['image']); ?>" alt="<?php echo esc_attr($slide['text'] ?: 'Carousel image'); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if (count($carousel_slides) > 1): ?>
                <div class="hero-nav">
                    <button class="hero-nav-btn prev" id="hero-prev" aria-label="Previous slide"><i class="fa-solid fa-left-long"></i></button>
                    <button class="hero-nav-btn next" id="hero-next" aria-label="Next slide"><i class="fa-solid fa-right-long"></i></button>
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
        height: 900px;
        /* Full viewport height */
        min-height: 600px;
        overflow: hidden;
        background: linear-gradient(141deg,
                #214CA1 0%,
                #214CA1 50%,
                #ffffff 50%,
                #ffffff 85%,
                #f47a20 85%,
                #f47a20 100%);
        background-size: cover;
        background-position: center;
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
        /* margin-top: 20px; */
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        padding: 0 20px;
        margin-left: auto;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        max-width: 100%;
    }

    .hero-content-carousel {

        z-index: 2;
        color: white;
        height: 100%;
        display: flex;
        justify-content: start;
        align-items: center;
        max-width: 1536px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .hero-content-carousel .carousel-container {
        display: flex;
        justify-content: end;
        align-items: center;
        position: absolute;
        right: 0;
        top: 0;
        height: 680px;
        overflow: hidden;
        /* max-width: 1360px; */
        max-width: calc(100% - 545px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }


    /* .hero-content-carousel .carousel-container .banner-carousel-image {
        border-radius: 10px;

    } */

    .hero-content-carousel .banner-carousel-image img {
        object-fit: cover;
        overflow: hidden;

    }

    .hero-content-carousel .carousel-content {
        z-index: 2;
        color: white;
        padding: 0 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 15px;
        align-items: flex-start;
        width: 100%;
        box-sizing: border-box;
    }



    .hero-content-carousel a {
        text-transform: uppercase;
    }

    .hero-badge {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 8px 20px;
        border-radius: 10px;
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
        bottom: -15%;
        right: 10%;
        transform: translateY(-50%);
        z-index: 2;
    }

    /* .hero-nav {
        position: absolute;
        bottom: 0%;
        right: 20px;
        transform: translateY(-50%);
        z-index: 2;
    } */

    .hero-nav-btn {
        border: none;
        color: white;
        font-size: 2rem;
        padding: 15px;
        cursor: pointer;
        background: transparent;
        z-index: 3;
        transition: background 0.3s ease;
    }

    .hero-nav-btn:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .hero-nav-btn.prev {}

    .hero-nav-btn.next {}

    /* Indicators */
    .hero-indicators {
        position: absolute;
        bottom: 50px;
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


    @media (min-width: 1200px) {
        .hero .hero-content-carousel .carousel-content {
            max-width: 50%;
        }
    }

    @media (max-width: 1199px) {

        .hero-content-carousel .carousel-container,
        .hero-content-carousel .carousel-content {
            max-width: 100%;
        }

        .hero-content-carousel .carousel-container {
            top: 50px;
        }

        .hero-content-carousel .banner-carousel-image img {
            object-fit: cover;
            overflow: hidden;
            filter: brightness(0.5);
        }

        .hero-nav {
            bottom: -10%;
            right: 0%;
        }
    }


    /* Responsive */
    @media (max-width: 768px) {

        .hero-nav-btn {
            padding: 10px;
            font-size: 1.5rem;
        }

        .hero,
        .hero-content-carousel .carousel-container {
            padding: 30px 0;
        }

        .hero {
            background: #214CA1;
        }

        /* .hero {
            min-height: 400px;
            background: linear-gradient(141deg,
                    #214CA1 0%,
                    #214CA1 40%,
                    #ffffff 40%,
                    #ffffff 80%,
                    #f47a20 80%,
                    #f47a20 100%);
        } */

        .hero-content-carousel .carousel-container {
            height: 100%;
        }

        .hero-content {
            top: 50px;
        }

        .hero-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 50px;
            align-items: center;
            position: absolute;
            bottom: 14%;
            right: 0;
            transform: translateY(0);
            z-index: 2;
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
            slideInterval = setInterval(nextSlide, 9000); // Change slide every 5 seconds
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