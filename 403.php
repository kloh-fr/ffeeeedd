<?php
/**
 * Page 403
 * @author        Gaël Poupard
 * @link          www.ffoodd.fr
 *
 * En savoir plus : http://codex.wordpress.org/Template_Hierarchy
 *
 * @package       WordPress
 * @subpackage    ffeeeedd
 * @since         ffeeeedd 1.0
 */
get_header(); ?>

  <article role="article" itemscope itemtype="http://schema.org/Article">
    <header>
      <h2 itemprop="name"><?php _e( '403', 'ffeeeedd' ); ?></h21>
      <h3 itemprop="description"><?php _e( 'Authorized personnel only.', 'ffeeeedd' ); ?></h3>
    </header>
    <p itemprop="articleBody"><?php _e( 'Don\'t panic, we can help you. See:', 'ffeeeedd' ); ?></p>
    <p class="h4-like"><?php _e( 'Here you are:', 'ffeeeedd' ); ?> <span>&#10799;</span></p>
    <p><?php _e( 'If you\'re still lost, these suggestions may help:', 'ffeeeedd' ); ?></p>
    <ul>
      <?php if ( has_nav_menu( 'lost' ) ) {
        wp_nav_menu(
          array(
            'theme_location' => 'lost',
            'items_wrap' => '%3$s',
            'container' => false
          )
        );
      } ?>
      <li>
        <a href="mailto:<?php echo antispambot( bloginfo( 'admin_email' ) ); ?>"><?php _e( 'Email this website\'s author', 'ffeeeedd' ); ?></a>
      </li>
    </ul>
  </article>

<?php get_footer(); ?>
