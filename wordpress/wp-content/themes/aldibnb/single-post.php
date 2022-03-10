<body>
    <?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                <div>
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_content(); ?></p>
                    <p><small>Écrit le : <?php the_date(); ?></small></p>
                    <!-- show meta location -->
                    <?php if (get_post_meta(get_the_ID(), 'location', true)) : ?>
                        <p><small>Localisation : <?php echo get_post_meta(get_the_ID(), 'location', true); ?></small></p>
                    <?php endif; ?>
                </div>

                <!-- diplay all comments -->
                <?php
                $comments = get_comments(array(
                    'post_id' => get_the_ID(),
                    'status' => 'approve'
                ));
                ?>
                <?php if (count($comments) > 0) : ?>
                    <div>
                        <h5>Commentaires</h5>
                        <?php foreach ($comments as $comment) : ?>
                            <div>
                                <p><?php echo $comment->comment_content; ?></p>
                                <p><small>Écrit par <?php echo $comment->comment_author; ?> le <?php echo $comment->comment_date; ?></small></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <!-- add comments input -->
        <?php if (is_user_logged_in()) : ?>
            <div>
                <div>
                    <h5>Ajouter un commentaire</h5>
                    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                        <input type="hidden" name="action" value="add_comment">
                        <input type="hidden" name="post_id" value="<?php the_ID(); ?>">
                        <div>
                            <label for="comment_content">Commentaire</label>
                            <textarea name="comment_content" id="comment_content" rows="3"></textarea>
                        </div>
                        <?php wp_nonce_field('add_comment', 'add_comment_nonce'); ?>
                        <?php wp_referer_field(); ?>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    <?php else : ?>
        <h2>Pas de posts</h2>
    <?php endif; ?>
</body>