<?php 
/** 
* Short description: For single post
*
* Detail description: This file is to display single page content.
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 18/09/2022
* time: 06:47 AM
*/
?>

<article id="post-<?php the_ID(); ?>" class="post" >

  <header class="entry-header">
    
    <h2 class="search-title">
      <a href="<?php the_permalink(); ?>">
      <?php echo get_post_type( $post ); ?>
      <?php the_title(); ?>
    </a>
    </h2>
    <p>This is coming from search content page</p>

  </header>

  <div class="entry-content">

    <?php the_excerpt(); ?>

  </div>

</article>