<?php
/** 
 * Short description: This file is for blog archive page
 *
 * Detail description: Even though, the file name is home.php but it displays only the blog archive page.
 * if home.php exits, then wordpress will load home.php to display data instead of index.php.
 * Mainly, index.php works as a fallback file.
 *
 * @package WordPress
 * @subpackage wphierarchy
 * Author: Junaid Jwolt
 * Date: 20/10/2022
 * time: 04:40 AM
 */
?>

<?php get_header(); ?>


<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">

    <h1><?php the_archive_title();  ?></h1>
    <p><?php echo category_description(); ?></p>

    <hr />

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('template-parts/content-posts', get_post_format() );  ?>

    <?php endwhile; else: ?>

      <?php get_template_part('template-parts/content', 'none');  ?>

    <?php endif; ?>

    <p>Template: category.php</p>
  </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>