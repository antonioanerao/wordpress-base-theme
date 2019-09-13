<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
         width="<?php echo get_custom_header()->width; ?>" class="img-fluid" alt="">
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">
                        Serviços
                    </div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4">Barra Lateral</aside>
                        <div class="news col-md-8">
                            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <p> Publicado em <?php echo get_the_date(); ?></p>
                                    <p>Autor: <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category(' - '); ?></p>
                                    <p><?php the_tags('Tags: ', ', '); ?></p>
                                    <p><?php the_content(); ?></p>
                                </article>
                            <?php endwhile; else: echo "Sem posts publicados"; endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">
                        Mapa
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>