<?php

class ImageInput
{
    private string $metaKey;

    public function __construct(string $metaKey)
    {
        $this->metaKey = $metaKey;
        $this->register();
    }

    public function register()
    {
        add_action('add_meta_boxes', [$this, 'AldiBnbAddMetaBox']);
        add_action('save_post', [$this, 'AldiBnbMetaBoxSave']);
    }

    public function AldiBnbAddMetaBox()
    {
        add_meta_box(
            // multiple image upload
            'images',
            'Multiple Image Upload',
            [$this, 'aldibnb_multiple_image_upload_render'],
            'post',
            'side'
        );
    }

    public function aldibnb_multiple_image_upload_render($post)
    {
        // $haveImage = (get_post_meta($post->ID, $this->metaKey, true));
?>


<?php
    }

    public function AldiBnbMetaBoxSave(int $post_ID)
    {
    }
}


// if ( true === get_theme_support( 'post-thumbnails' ) ) {
//     return;
// }

// /*
//  * Merge post types with any that already declared their support
//  * for post thumbnails.
//  */
// if ( isset( $args[0] ) && is_array( $args[0] ) && isset( $_wp_theme_features['post-thumbnails'] ) ) {
//     $args[0] = array_unique( array_merge( $_wp_theme_features['post-thumbnails'][0], $args[0] ) );
// }