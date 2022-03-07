<?php
/*
    Template name: CreateArticle
*/
?>



<form action="<?php echo admin_url('admin-post.php'); ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="post_article">
    <input type="text" name="post_title" placeholder="Titre">
    <textarea name="post_content" placeholder="Contenu"></textarea>
    <input type="file" name="post_thumbnail" id='post_thumbnail' multiple="false">
    <?php wp_nonce_field('post_article', 'post_article_nonce'); ?>
    <?php wp_referer_field(); ?>
    <input type="submit" value="Poster">
</form>