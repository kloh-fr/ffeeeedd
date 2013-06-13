<?php
/**
 * ffeeeedd : fonctions du thème - communes à l'administration et au front-end.
 * @author      Gaël Poupard
 * @link        www.ffoodd.fr
 *
 * @package     WordPress
 * @subpackage  ffeeeedd
 * @since       ffeeeedd 1.0
 */

/* ----------------------------- */
/* Sommaire */
/* ----------------------------- */
/*
  == Options du thème
  == Traduction
  == Colonnes latérales
  == Fonctions conditionnelles
    -- Fonctions de l'administration
    -- Fonctions du front-end
*/

  /* == @section Options du thème ==================== */
  /**
   * @see Twentytwelve - Thème WordPress par défaut.
   * @see http://wordpress.org/extend/themes/twentytwelve
  */

  add_theme_support( 'post-thumbnails' );
  register_nav_menus( array( 'primary' => 'Menu principal', '404' => 'Menu 404' ) );


  /* == @section Traduction ==================== */
  /**
   * @author Luc Poupard
   * @see https://twitter.com/klohFR
   * @note I18n : déclare le domaine et l'emplacement des fichiers de traduction
   * @see Twentytwelve - Thème WordPress par défaut.
   * @link http://wordpress.org/extend/themes/twentytwelve
  */
  add_action( 'after_setup_theme', 'ffeeeedd__setup' );
  function ffeeeedd__setup() {
    load_theme_textdomain( 'ffeeeedd', get_template_directory() . '/lang' );
  }


  /* == @section Colonnes latérales ==================== */
  /**
    @author Gaël Poupard
    @see https://twitter.com/ffoodd_fr
  */

  function ffeeeedd_widgets_init() {
    // Une colonne latérale spécifique pour la page d'accueil
    register_sidebar( array(
      'name' => 'Accueil',
      'id' => 'accueil',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ) );
    // La colonne latérale pour les pages
    register_sidebar( array(
      'name' => 'Pages',
      'id' => 'pages',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ) );
  }
  add_action( 'widgets_init', 'ffeeeedd_widgets_init' );


  /* == @section Fonctions conditionnelles ==================== */
  /**
    @author Grégory Viguier
    @see https://twitter.com/ScreenFeedFr
    @see http://www.screenfeed.fr/blog/accelerer-wordpress-en-divisant-le-fichier-functions-php-0548/
    @note Version simple librement adaptée pour ffeeeedd
    @author Gaël Poupard
    @see https://twitter.com/ffoodd_fr
  */

  /* -- @subsection Fonctions de l'administration  -------------------- */
  if ( is_admin() ) {
    get_template_part ( 'ffeeeedd__functions', '-admin' );
  }

  /* -- @subsection Fonctions du front-end  -------------------- */
  if ( !is_admin() ) {
    get_template_part ( 'ffeeeedd__functions', '-front' );
  }