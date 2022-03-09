<?php get_header(); ?>

<!-- enctype="multipart/form-data" -->


<?php if (have_posts()) : ?>
    <div class="card-group">
        <?php while (have_posts()) : ?>

            <?php the_post(); ?>

            <div class="card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                <div class="card-body">

                    <h5 class="card-title"><?php the_title(); ?></h5>

                    <p><small> Style: <?= the_terms(get_the_ID(), 'style'); ?></small></p>

                    <p class="card-text"><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire plus</a>
                </div>
            </div>

        <?php endwhile; ?>

    </div>
<?php endif; ?>
<?php get_footer(); ?>