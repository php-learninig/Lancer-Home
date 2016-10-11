<!-- Вывод Рубрики  -->
<?php if(have_posts()):query_posts('p=7');
    while(have_posts()):the_post(); ?>

        <?php the_title(); ?>
        <?php the_content(); ?>

    <?php endwhile; endif;
wp_reset_query(); ?>

<!--  -->