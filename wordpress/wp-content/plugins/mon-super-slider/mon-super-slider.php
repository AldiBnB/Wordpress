<?php

/*
 * Plugin Name:       Mon super slider
 * Description:       Permet de gerer un joli slider en homepage.
 * Version:           0.1
 * Author:            Eva VERGER
 */

add_action('init','monsuperslider_init');

/** permet d'initialiser les fonctionnalités liées au carrousel  */



function monsuperslider_init(){

    $labels = array(
        'name' => 'Slide',
        'singular_name' => 'Slide',
        'add_new' => 'Ajouter un slide',
        'add_new_item' => 'Ajouter un nouveau Slide',
        'edit_item' => 'Editer un Slide',
        'new_item' => 'Nouvelle Slide',
        'view_item' => 'Voir 1\'Slide',
        'search_items' => 'Rechercher un Slide',
        'not_found' => 'Aucun Slide',
        'not_found_in_trash' => 'Aucun Slide dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Slides'
      );

    register_post_type('slide',array(
        'public' => true,
        'publicly_querable' => false,
        'labels' => $labels,
        'menu_position' => 9,
        'capability_type' => 'post',
        'supports' => array('title', 'thumbnail'),
    ));



}




 /** permet afficher carrousel */


 function monsuperslider_show($limit = 10){
     
    $slides = new WP_query("post_type=slide&posts_per_page=$limit");
    while($slides->have_posts()){
        $slides->the_post();
        global $post;
        the_post_thumbnail('slider');
    }


 }