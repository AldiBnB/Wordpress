<?php
/*
   Plugin Name: Carrousel
   Version: 1.0
   Author: Aldibnb
   'Description': Créateur d'un Carrousel par rapport à vos articles et à un nombre limite d'articles dans le Carrousel
   */



// Mon plugin va demander à l'utilisateur de rentrer un nombre pour definir le nombre d'images à afficher dans le Carrousel
// Le plugin va ensuite afficher les images dans le Carrousel dans le template index.php


// create a shortcode [carrousel] to display the carrousel
add_shortcode('carrousel', 'carrousel_shortcode');

function carrousel_shortcode($limite, $nbrimageaffiche)
{
   $posts = get_posts(array(
      'numberposts' => $limite['limite'],
      // random poste et public poste
      'orderby' => 'rand',
      'post_status' => 'publish',
      'post_type' => 'post',

   ));
   $carrousel = '<div class="carrousel">';

   $carrousel .= '<div class="arrow left">&#10094;</div>';
   $carrousel .= '<div class="carrousel_images">';

   foreach ($posts as $post) {
      $carrousel .= '<div class="carrousel_image">';
      $carrousel .= '<a href="' . get_permalink($post) . '">';
      $carrousel .= get_the_post_thumbnail($post, 'thumbnail');
      $carrousel .= '</a>';
      $carrousel .= '</div>';
   }
   $carrousel .= '</div>';
   $carrousel .= '<div class="arrow right">&#10095;</div>';
   $carrousel .= '</div>';

   // css style to put the carrousel in flex row
   $carrousel .= '<style>
      .carrousel {
         display: flex;
         flex-direction: row;
      }
      .carrousel_images {
         display: flex;
         flex-wrap: nowrap;
         overflow-x: auto;
         overflow-y: hidden;
         -webkit-overflow-scrolling: touch;
      }
      .arrow {
         cursor: pointer;
         align-self: center;

      }
      </style>';


   return $carrousel;
}
