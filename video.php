<?php 
/** 
* Short description: For single post
*
* Detail description: This file is to display single post content.
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 19/10/2022
* time: 05:02 AM
*/
?>

<?php get_header(); ?>


<div id="primary" class="content-area">

  <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post -> ID ); ?>"></span>
        <?php echo get_post_format($post->ID);  ?>  

        <?php the_title('<h1>', '</h1>'); ?>

        <div class="byline">
          <?php esc_html_e("Author:"); ?> <?php the_author(); ?>
        </div>


      </header>

      <div class="entry-content">

       <p>
        <video src="<?php echo esc_url($post->guid); ?>" controls></video>
       </p>

        <?php the_content(); ?>

      </div>


      <?php if ( comments_open() ) :  ?>

        <?php comments_template(); ?>

      <?php endif; ?>



    </article>

    <?php endwhile; else: ?>

      <?php get_template_part('template-parts/content', 'none');  ?>

    <?php endif; ?>

    <p>Template: video.php</p>
  </main>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

