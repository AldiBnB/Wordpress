<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Description</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Times New Roman";
            font-size: 18px
        }

        .container {
            margin: 40px;
        }

        img {
            border-radius: 10px;
            text-align: center;
            margin: 70px auto;
            width: 660px;
            height: 446px;
            display: block;
            object-fit: contain;
        }

        body {
            background: #FCECC099;
            background: linear-gradient(180deg, rgba(255, 241, 172, 0.6) 25%, rgba(255, 241, 172, 0) 100%);
        }

        .ajout_com {
            margin: 3px;
        }
        <!-- bouton envoyer --> 
        input {
        width: 540px;
        }

        input:last-child {
        width: 140px;
        height: 40px;
        border-radius: 5px;
        border: none;
        display: inline-block;
        background-color: #008CBA;
        color: white;
        transition-duration: 0.4s;
        }

        .creation_commentaire {
            margin: 35px;
        }
        
        textarea {
            resize: none;
            width: 400px;
            height: 100px;
        }

        .titre_com {
            margin: 10px 0px;
        }

        .titre_bloc_desc {
            margin: 10px 0px;
            font-size: 20px;
        }

        .para_desc {
            font-size: 18px;
        }

        .date {
            margin-top: 10px;
            font-weight: bold;
        }

        .localisation {
            font-weight: bold;
        }

        .bloc_com_fait{
            margin: 40px;
        }

        .titre_commentaire_fait{
            margin-bottom: 10px;
        }

        .write_by{
            margin-top: 10px;
            font-weight: bold;
        }

        .commentaire_envoyer{
            margin-top: 35px;
        }
    </style>
</head>


<body>
    <?php get_header(); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container">
                <!-- Le post-->
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                <div class="bloc_description">
                    <h5 class="titre_bloc_desc"><?php the_title(); ?></h5>
                    <p class="para_desc"><?php the_content(); ?></p>
                    <p class="date"><small>Écrit le : <?php the_date(); ?></small></p>
                    <!-- show meta location -->
                    <?php if (get_post_meta(get_the_ID(), 'location', true)) : ?>
                        <p class="localisation"><small>Localisation : <?php echo get_post_meta(get_the_ID(), 'location', true); ?></small></p>
                    <?php endif; ?>
                    <!-- Le post-->
                </div>
            </div>

            <!-- diplay all comments -->
            <?php
            $comments = get_comments(array(
                'post_id' => get_the_ID(),
                'status' => 'approve'
            ));
            ?>
            <?php if (count($comments) > 0) : ?>
                <div class="bloc_com_fait">
                    <h5 class="titre_commentaire_fait">Commentaires</h5>
                    <?php foreach ($comments as $comment) : ?>
                        <div>
                            <p class="commentaire_envoyer"><?php echo $comment->comment_content; ?></p>
                            <p class="write_by"><small>Écrit par <?php echo $comment->comment_author; ?> le <?php echo $comment->comment_date; ?></small></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <?php endwhile; ?>
        <!-- add comments input -->
        <?php if (is_user_logged_in()) : ?>
            <!-- creation commentaire -->
            <div class="creation_commentaire">
                <div class="ajout_com">
                    <h5 class="titre_com">Ajouter un commentaire</h5>
                    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                        <input type="hidden" name="action" value="add_comment">
                        <input type="hidden" name="post_id" value="<?php the_ID(); ?>">
                        <div>
                            <label for="comment_content"></label>
                            <textarea name="comment_content" id="comment_content" placeholder="Votre commentaire" rows="" required></textarea>
                        </div>
                        <?php wp_nonce_field('add_comment', 'add_comment_nonce'); ?>
                        <?php wp_referer_field(); ?>
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
            <!-- creation commentaire -->
        <?php endif; ?>
    <?php else : ?>
        <h2>Pas de posts</h2>
    <?php endif; ?>
</body>

</html>