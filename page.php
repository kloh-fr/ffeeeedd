<?php
/**
 * Page standard
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

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
  <article class="col" role="article" itemscope itemtype="http://schema.org/Article">
    <h2 itemprop="name"><?php the_title(); ?></h2>
    <div itemprop="articleBody"><?php the_content(); ?></div>
  </article>
<?php }
} ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>