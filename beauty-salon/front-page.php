<?php
/**
 * Home/Front Page Template
 * Displays hero section, featured services, and testimonials
 */
get_header(); ?>

<!-- Hero Section -->
<section class="hero-banner">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Mirësevini</h2>
        <p class="lead">Oazi juaj i bukurisë dhe relaksit</p>
        <div class="about-text">
            <p>Me një përvojë 10 vjeçare, stafi ynë i kualifikuar përdor teknologjitë më të fundit për t'ju ofruar shërbimin më të mirë. Vizita juaj në sallonin tonë është një përvojë e paqes dhe rejuvenimit.</p>
        </div>
    </div>
</section>

<!-- Services Dashboard -->
<section class="dashboard-section">
    <div class="container">
        <h2 class="section-title">Zgjidhni Shërbimin</h2>
        <div class="dashboard-grid">
            <?php
            $categories = array(
                'thonj'    => array('titulli' => 'Thonj', 'icon' => '💅', 'color' => 'pink'),
                'floke'    => array('titulli' => 'Flokë', 'icon' => '✂️', 'color' => 'gold'),
                'makeup'   => array('titulli' => 'Makeup', 'icon' => '💄', 'color' => 'dark'),
                'skincare' => array('titulli' => 'Skincare', 'icon' => '✨', 'color' => 'soft')
            );

            foreach ($categories as $slug => $data) {
                $term = get_term_by('slug', $slug, 'kategoria_sherbimit');
                $link = ($term) ? get_term_link($term) : '#'; 
                ?>
                <a href="<?php echo esc_url($link); ?>" class="dash-item <?php echo esc_attr($data['color']); ?>">
                    <span class="dash-icon"><?php echo $data['icon']; ?></span>
                    <h3><?php echo esc_html($data['titulli']); ?></h3>
                    <p>Kliko për shërbimet</p>
                </a>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Featured Services -->
<section class="featured-services" style="padding: 60px 20px; background: #f9f9f9;">
    <div class="container">
        <h2 class="section-title">Shërbimet në Veçanti</h2>
        <div class="services-grid">
            <?php
            $args = array(
                'post_type' => 'sherbimet',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $featured_services = new WP_Query($args);

            if ($featured_services->have_posts()) :
                while ($featured_services->have_posts()) : $featured_services->the_post(); ?>
                    <div class="service-card">
                        <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                        <div class="p-3">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Detajet</a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Nuk ka shërbime të shtuara akoma.</p>';
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
