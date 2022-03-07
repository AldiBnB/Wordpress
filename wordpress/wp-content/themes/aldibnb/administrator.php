<?php
/*
    Template name: AdminPage
*/

//  si on est pas admin, on redirige vers la page d'accueil
if (!current_user_can('administrator')) {
    wp_redirect(home_url('/'));
    exit();
}
get_header();
?>
<!-- display all private post with a button to view, an another to publish them -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admin Page</h1>
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'private',
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <!-- thumbnail -->
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid">
                            <?php endif; ?>
                            <p class="card-text"><?php the_content(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Voir</a>
                            <a href="<?php echo admin_url('admin-post.php'); ?>?action=publish_post&post_id=<?php the_ID(); ?>" class="btn btn-success">Publier</a>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>