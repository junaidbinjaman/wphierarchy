<?php 
/** 
* Short description: For single post
*
* Detail description: This file is to display single post content.
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 18/09/2022
* time: 06:43 AM
*/
?>

<?php get_header(); ?>


<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('template-parts/content',);  ?>

    <?php endwhile; else: ?>

      <?php get_template_part('template-parts/content', 'none');  ?>

    <?php endif; ?>

    <p>Template: single.php</p>
  </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

