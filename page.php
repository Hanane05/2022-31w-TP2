<?php get_header() ?>
<main class="site__main">

    <h1>Département TIM</h1>
    <?php if (have_posts()) : the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>
    <?php endif ?>

</main>
<?php get_footer() ?>