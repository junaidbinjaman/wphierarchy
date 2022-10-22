<?php 
/** 
* Short description: Loop to display post content
*
* Detail description: In this file, we are writing html tags inside the loop.
* We have separated this file from the previous one because of the readability.
* Now we have a much better readability than before.
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 18/09/2022
* time: 06:14 AM
*/
?>

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

    <?php the_content(); ?>

  </div>


  <?php if ( comments_open() ) :  ?>

  <?php comments_template(); ?>

  <?php endif; ?>



</article>