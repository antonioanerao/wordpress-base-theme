<article <?php post_class(array('class'=>'featured')); ?>>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="thumbnail">
        <!-- O array dentro da função the_post_thumbnail inclui as classes na classe padrão do wordpress -->
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class'=>'img-fluid img-thumbnail')); ?>
        </a>
    </div>
    <div class="meta-info">
        <p>
            Published in <span><?php echo get_the_date(); ?></span> by <span><?php the_author_posts_link(); ?></span>
        </p>

        <p><?php the_excerpt(); ?></p>
    </div>
</article>