<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Posted  in <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
            <p>Categories: <?php the_category(' '); ?></p>
        </div>

        <div class="content">
            <img src="<?php echo $image[0]; ?>" class="img-fluid img-thumbnail">
            <?php the_content(); ?>
        </div>
    </header>
</article>
