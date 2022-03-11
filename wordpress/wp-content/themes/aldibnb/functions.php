
<?php


// require 'Classes/MultiImageUpload.php';
// $checkbox = new ImageInput('AldiBnbImages');

function AldiBnbSetupTheme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Header Menu');
    register_nav_menu('footer', 'Footer Menu');
}



$action = empty($_REQUEST['action']) ? '' : $_REQUEST['action'];

add_action('after_setup_theme', 'AldiBnbSetupTheme');
add_action('admin_post_post_article', function () {
    $post_args = array(
        'post_content' => htmlspecialchars($_POST['post_content']),
        'post_title' => htmlspecialchars($_POST['post_title']),
        'post_type' => 'post',
        'post_status' => 'private',
        'comment_status' => 'open',
        'post_author' => get_current_user_id(),
        // add location info to post with $_POST['post_location']

        'meta_input' => array(
            'auteur' => htmlspecialchars($_POST['auteur']),
            'location' => htmlspecialchars($_POST['post_location']),
            'date debut' => htmlspecialchars($_POST['post_start_date']),
            'date fin' => htmlspecialchars($_POST['post_end_date'])

        )
    );
    // Maintenant on poste le truc

    $post_id = wp_insert_post($post_args);
    // SET POST THUMBNAIL
    $thumbnail_id = $_FILES['post_thumbnail']['name'];
    // upload image
    $attachement_id = media_handle_upload('post_thumbnail', $post_id);
    // if attachment is not image redirect to home
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

// add action to publish post
add_action('admin_post_publish_post', function () {
    $post_id = $_REQUEST['post_id'];
    $post_args = array(
        'ID' => $post_id,
        'post_status' => 'publish'
    );
    wp_update_post($post_args);
    wp_redirect(home_url('/'));
    exit();
});

// post the comment that are in the form with the nonce add_comment
add_action('admin_post_add_comment', function () {
    $comment_args = array(
        'comment_post_ID' => $_REQUEST['post_id'],
        'comment_content' => htmlspecialchars($_REQUEST['comment_content']),
        'comment_author' => htmlspecialchars($_REQUEST['comment_author']),
        'comment_author_email' => htmlspecialchars($_REQUEST['comment_author_email']),
        'comment_author_url' => htmlspecialchars($_REQUEST['comment_author_url']),
        'comment_author_IP' => htmlspecialchars($_REQUEST['comment_author_IP']),
        'comment_agent' => htmlspecialchars($_REQUEST['comment_agent']),
        'comment_date' => htmlspecialchars($_REQUEST['comment_date']),
        'comment_approved' => htmlspecialchars($_REQUEST['comment_approved']),
        'comment_parent' => htmlspecialchars($_REQUEST['comment_parent']),
        'user_id' => htmlspecialchars($_REQUEST['user_id'])
    );
    wp_insert_comment($comment_args);
    // redirect to the article that was commented
    wp_redirect(home_url('/') . '?p=' . $_REQUEST['post_id']);
    exit();
});
