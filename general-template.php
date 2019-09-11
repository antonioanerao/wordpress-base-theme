<?php /* Template Name: General Template */ get_header(); ?>

<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="news col-md-12">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </article>
                        <?php endwhile; else: echo "Sem posts publicados"; endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>