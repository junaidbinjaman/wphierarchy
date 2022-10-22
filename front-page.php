<?php 
/** 
* Short description: For single page, post amd single attachments
*
* Detail description: This file has the same content and functionality as index.php
* This file will prevent index.php to be displayed for single page, post and attachments and display content from his own.
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 18/09/2022
* time: 06:33 AM
*/
?>

<?php get_header(); ?>


<div id="primary" class="content-area extended">

  <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('template-parts/content', 'page');  ?>

    <?php endwhile; else: ?>

      <?php get_template_part('template-parts/content', 'none');  ?>

    <?php endif; ?>

    <p>Template: front-page.php</p>
  </main>

</div>

<?php get_sidebar('front-page'); ?>


<?php get_footer(); ?>