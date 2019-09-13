<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <p>Categories: <?php the_category(' - '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>