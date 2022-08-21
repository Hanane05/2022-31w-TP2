<?php
get_header(); ?>
<section class="site__main">
    <h1>Bienvenu!</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h2><a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a></h2>
            <div class="image__article">
                <?php
                if (get_field('image')) : ?>
                    <img src="<?php the_field('image'); ?>" />
                    <h3><?php the_field('sous_titre'); ?></h3>
                    <p><?php the_field('resume'); ?></p>
                <?php endif; ?>
            </div>




        <?php endwhile; ?>
    <?php endif; ?>
    <?php
    /* -------------------------------------- menu évènements */
    wp_nav_menu(array(
        'menu' => 'accueil',
        'container' => 'nav'
    )); ?>
</section> <!-- fin .site__main -->

<?php get_footer(); ?>