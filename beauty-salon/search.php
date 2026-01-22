<?php get_header(); ?>
<div class="container py-5">
    <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); margin-bottom: 10px;">
        Rezultatet e kërkimit për: "<strong><?php echo esc_html(get_search_query()); ?></strong>"
    </h1>
    <hr>

    <?php if(have_posts()) : ?>
        <div class="search-results-list">
            <?php while(have_posts()) : the_post(); ?>
                <div class="search-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                    <a href="<?php the_permalink(); ?>" style="color: var(--gold); text-decoration: none; font-weight: 600;">Shiko më shumë →</a>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    <?php else : ?>
        <div style="padding: 40px; text-align: center;">
            <p style="color: #999; font-size: 1.1rem;">Na vjen keq, nuk u gjet asgjë me këtë emër.</p>
            <p style="color: #999; margin-bottom: 30px;">Provoni përsëri me fjalë kyçe të ndryshme.</p>
            <?php get_search_form(); ?>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>