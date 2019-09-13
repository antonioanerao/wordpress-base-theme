<article>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail([275, 275]); ?>
    <p> Publicado em <?php echo get_the_date(); ?></p>
    <p>Autor: <?php the_author_posts_link(); ?></p>
    <p>Categories: <?php the_category(' - '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>