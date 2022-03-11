<?php
/*
    Template name: CreateArticle
*/

if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
}
?>

<style>
    html {
        background: linear-gradient(180deg, rgba(255, 241, 172, 0.6) 25%, rgba(255, 241, 172, 0) 100%);
    }

    form {
        display: flex;
        flex-direction: column;
        margin-left: 60px;
        width: 60%;
    }

    label {
        margin-top: 75px;
    }

    input {
        width: 540px;
    }

    textarea {
        width: 540px;
        height: 200px;
    }

    input:last-child {
        margin-top: 50px;
        width: 140px;
        height: 40px;
        /* center */
        margin-left: auto;
        margin-right: auto;
    }

    .image-upload {
        margin-top: 50px;
    }

    .image-upload>input {
        display: none;
        width: 0;
        height: 0;
    }

    .image-upload>img {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        width: 100px;
        border-radius: 5px;
        /* overflow: hidden; */
        /* position: relative; */
        cursor: pointer;
    }
</style>

<body>
    <?php get_header(); ?>
    <h2>Déposer une annonce</h2>

    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post" enctype="multipart/form-data">
        <label for="post_title">Titre de l'annonce</label>
        <input type="hidden" name="action" value="post_article">
        <input type="text" name="post_title" placeholder="Titre" required>
        <label for="post_content">Description de l'annonce</label>
        <textarea name="post_content" placeholder="Contenu" required></textarea>
        <div class="image-upload">
            <label for="post_thumbnail">Image de l'annonce</label>
            <img src="https://www.pngkey.com/png/full/909-9099231_png-file-svg-camera-add-icon-png.png" />
            <input type="file" name="post_thumbnail" id='post_thumbnail' multiple="false" class="file-upload" accept="image/*" required>

            </label>
        </div>
        <script>
            document.querySelector('.image-upload>img').addEventListener('click', function() {
                document.querySelector('.image-upload>input').click();
            });
        </script>
        <label for="post_location">Localisation</label>
        <input type="text" name="post_location" placeholder="Location" required>
        <?php wp_nonce_field('post_article', 'post_article_nonce'); ?>
        <?php wp_referer_field(); ?>
        <input type="submit" value="Poster">
    </form>
</body>