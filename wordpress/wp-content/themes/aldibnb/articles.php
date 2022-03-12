<?php
/*
    Template name: Articles
*/
// if $_POST is empty display all public posts
if (empty($_POST)) {
    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1
    ));
} else {
    // if $_POST is not empty display all posts with $_POST['post_location']
    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'location',
                'value' => $_POST['post_location']
            )
        )
    ));
}
// pour chaque post on va afficher le titre, l'excerpt, le lien vers le post, thumbnail,localisation, auteur
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>

    <style>
    body {
        width: 100%;
        height: 100vh;
        overflow-x: hidden;
    }
    .title {
        font-size: 14pt;
    }
    .content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }
    html {
        background: #FFFAEA;
    }
    .content>div {
        width: 20rem;
        height: 20rem;
        border: 1px solid black;
        padding: 20px;
        background: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-shadow: 0px 0px 10px black;
        border-radius: 10px;
        margin-top: 20px;
    }
    .content>div>img {
        width: 50%;
        height: 100%;
        object-fit: contain;
        display: block;
        margin-left: auto;
        margin-right: auto }

    }
    .content>div>div>a {
        text-decoration: none;
        padding: 5px;
        color: white;
    }
</style>
</head>

<body>
    <?php get_header(); ?>
    <div class="content">
    <?php
    foreach ($posts as $post) {
    ?>
        <div>
            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="Image">
            <div>
                <hr class="solid">
                <h5 class="title"><?php echo $post->post_title; ?></h5>
                <p><?php echo $post->post_excerpt; ?></p>
                <p><small>Publié le : <?php echo $post->post_date; ?></small></p>
                <!-- show meta location -->
                <?php if (get_post_meta($post->ID, 'location', true)) : ?>
                    <p><small>Lieu : <?php echo get_post_meta($post->ID, 'location', true); ?></small></p>
                <?php endif; ?>
            </div>
            <a href="<?php echo get_permalink($post->ID); ?>">Voir l'annonce</a>
        </div>
    <?php
    }
    ?>
    </div>
</body>

</html>