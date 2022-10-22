<?php 
/** 
* Short description: This is a sidebar file
*
* Detail description: display here all the widgets that needs to go in sidebar.
*
* @package WordPress
* @subpackage wphierarchy
* Author: Junaid Jwolt
* Date: 18/09/2022
* time: 04:03 AM
*/

if (!is_active_sidebar('front-page')) {
  return;
}

?>
<aside id="secondary" class="widget-area" role="complementary">

  <?php dynamic_sidebar('front-page'); ?>

</aside>