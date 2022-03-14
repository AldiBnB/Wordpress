<?php
/*
    Template name: AdminPage
*/

//  si on est pas admin, on redirige vers la page d'accueil
if (!current_user_can('administrator')) {
    wp_redirect(home_url('/'));
    exit();
}
?>
<!-- display all private post with a button to view, an another to publish them -->
<!-- style set image fix -->
<style>
    body {
        width: 100%;
        height: 100vh;
        overflow-x: hidden;
    }

    .contenu {
        margin-top: 35px;
        /* je souhaite que mes éléments se mettent en ligne et que si ça depasse qu'on les mettent en dessous pour repartir en ligne */
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        /* align-items: center; */
        /* align-content: center; */

    }

    html {
        background: linear-gradient(180deg, rgba(255, 241, 172, 0.6) 25%, rgba(255, 241, 172, 0) 100%);
    }

    .contenu>div {
        width: 20rem;
        height: 20rem;
        /* apply a border black */
        border: 1px solid black;
        padding: 20px;
        background: rgba(255, 250, 238, 0.6);
        /* centrer verticalement */
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* shadow */
        box-shadow: 0px 0px 10px black;
        /* border radius */
        border-radius: 10px;
        /* margin */

    }

    /* we want image with all the same size */
    .contenu>div>img {
        /* conserver le ratio de l'image mais rendre la taille dans son bloc fixe quitte à la crop */
        width: 80%;
        height: 100%;
        object-fit: cover;

    }

    .contenu>div>div>a {
        text-decoration: none;
        padding: 5px;
        background-color: #008CBA;
        color: white;
        border-radius: 5px;
        transition-duration: 0.4s;
    }

    .contenu>div>div>a:hover {
        background-color: white;
        color: #008CBA;
        border: 2px solid #008CBA;

    }

    .contenu>div>div>a:nth-child(3) {
        background-color: #6CDF7C;
        color: white;
        border-radius: 5px;
        transition-duration: 0.4s;
    }

    .contenu>div>div>a:nth-child(4) {
        background-color: red;
        color: white;
        border-radius: 5px;
        transition-duration: 0.4s;
    }
</style>

<body>
    <?php get_header(); ?>
    <div class='contenu'>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'private',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <div>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="...">

                    <div>
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <a href="<?php the_permalink(); ?>">Voir</a>
                        <a class="btn2" href="<?php echo admin_url('admin-post.php'); ?>?action=publish_post&post_id=<?php the_ID(); ?>">Publier</a>
                        <a href="<?php echo get_delete_post_link(); ?>">Supprimer</a>
                        <!-- rendre -->
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</body>