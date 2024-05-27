<?php
add_theme_support('menus');
add_theme_support('custom-logo');


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );
     add_theme_support('post-thumbnails');

/**
 * Ajoute un style personnalisé à la page d'administration
 */
function enqueue_custom_script() {
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/arrierePlan.js', array('jquery'), null, true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_custom_script');
  