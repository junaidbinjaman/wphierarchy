<?php 
/** 
* Short description: Content for 404
*
* Detail description: This file is displaying content for 404. 
* Which means, if you visit a link that doesn't exits than the content from this page will be thrown. 
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 18/09/2022
* time: 09:22 AM
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">

      <h1>
        <?php esc_html_e('404'); ?>
        <?php get_search_form();  ?>
      </h1>

    </header>

    <div class="entry-content">

      <p>
        <?php esc_html_e('Sorry! No content found'); ?>
      </p>

    </div>

  </article>