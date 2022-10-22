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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <header class="entry-header">
    
    <?php the_title('<h1>', '</h1>'); ?>

  </header>

  <div class="entry-content">

    <?php the_content(); ?>

  </div>

</article>