<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="card mb-3">
            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="Image">
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_content(); ?></p>
                <p class="card-text"><small class="text-muted">Écrit le : <?php the_date(); ?></small></p>
            </div>

            <!-- diplay all comments -->
            <?php
            $comments = get_comments(array(
                'post_id' => get_the_ID(),
                'status' => 'approve'
            ));
            ?>
            <?php if (count($comments) > 0) : ?>
                <div class="card-body">
                    <h5 class="card-title">Commentaires</h5>
                    <?php foreach ($comments as $comment) : ?>
                        <div class="card-text">
                            <p><?php echo $comment->comment_content; ?></p>
                            <p><small class="text-muted">Écrit par <?php echo $comment->comment_author; ?> le <?php echo $comment->comment_date; ?></small></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <!-- add comments input -->
    <?php if (is_user_logged_in()) : ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Ajouter un commentaire</h5>
                <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                    <input type="hidden" name="action" value="add_comment">
                    <input type="hidden" name="post_id" value="<?php the_ID(); ?>">
                    <div class="form-group">
                        <label for="comment_content">Commentaire</label>
                        <textarea name="comment_content" id="comment_content" class="form-control" rows="3"></textarea>
                    </div>
                    <?php wp_nonce_field('add_comment', 'add_comment_nonce'); ?>
                    <?php wp_referer_field(); ?>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php else : ?>
    <h2>Pas de posts</h2>
<?php endif; ?>
<?php get_footer(); ?>