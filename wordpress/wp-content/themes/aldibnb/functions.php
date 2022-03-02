<?php


// require 'Classes/MultiImageUpload.php';
// $checkbox = new ImageInput('AldiBnbImages');

function AldiBnbSetupTheme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Header Menu');
}



function Bootstrap()
{
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script("bootstrap_js", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", [], false, true);
}

$action = empty($_REQUEST['action']) ? '' : $_REQUEST['action'];

add_action('after_setup_theme', 'AldiBnbSetupTheme');
add_action('wp_enqueue_scripts', 'Bootstrap');
add_action('admin_post_post_article', function () {
    $post_args = array(
        'post_content' => $_POST['post_content'],
        'post_title' => $_POST['post_title'],
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_author' => get_current_user_id(),
        'meta_input' => array(
            'auteur' => 'Maurice'
        )
    );
    // Maintenant on poste le truc

    $post_id = wp_insert_post($post_args);
    // SET POST THUMBNAIL
    $thumbnail_id = $_FILES['post_thumbnail']['name'];
    // upload image
    $attachement_id = media_handle_upload('post_thumbnail', $post_id);
    if (is_wp_error($attachement_id)) {
        echo $attachement_id->get_error_message();
        echo '<br>';
        echo $_FILES;
    } else {
        // set post thumbnail
        set_post_thumbnail($post_id, $attachement_id);
    }

    wp_redirect(home_url('/'));
    exit();
});
