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
    <title>Document</title>
</head>

<body>
    <?php get_header(); ?>
    <?php
    foreach ($posts as $post) {
    ?>
        <div>
            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="Image">
            <div>
                <h5><?php echo $post->post_title; ?></h5>
                <p><?php echo $post->post_excerpt; ?></p>
                <p><small>Écrit le : <?php echo $post->post_date; ?></small></p>
                <!-- show meta location -->
                <?php if (get_post_meta($post->ID, 'location', true)) : ?>
                    <p><small>Localisation : <?php echo get_post_meta($post->ID, 'location', true); ?></small></p>
                <?php endif; ?>
            </div>
            <a href="<?php echo get_permalink($post->ID); ?>">Lire la suite</a>
        </div>
    <?php
    }
    ?>
</body>

</html>