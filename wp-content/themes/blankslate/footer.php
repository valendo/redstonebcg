<!-- footer -->
<!--

-->
<!-- footer -->
<div class="footer">
  <div class="subfooter">
    <div class="boxleft">
    <p class="padbot20"> 
      <?php
        $menu_name = 'main-menu';

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
          $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          $i = 0;
          $len = count($menu_items);
          foreach ( (array) $menu_items as $key => $menu_item ) {
            $id = get_post_meta( $menu_item->ID, '_menu_item_object_id', true ) . '-';
            $title = $menu_item->title;
            $url = $menu_item->url;
            $class = '';
            if ($id == get_the_ID()) {
              $class = ' class="active"';
            }
            $menu_list .= '<a href="' . $url . '"'. $class .'>' . $title . '</a>';
            if ($i != $len - 1) {
              $menu_list.= '<span>| </span>';
            }
            $i++;
          }
        } 
        echo $menu_list;
      ?>
    </p>
    <p>©2014 Redstone Business Consulting Group. All rights reserved. 
</p>
    </div>
    <div class="boxright">
    <div class="row">
    <p class="left">Email Marketing you can trust  |  Subscribe to our newsletter</p><p class="social"> <a id="facebook" href="https://www.facebook.com/jasonjimenezinsuranceagency" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/f.png"></a> <a id="sweeter" href="https://twitter.com/JasonJimenezIns" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/t.png"></a> <a id="in" href="http://www.linkedin.com/pub/jason-jimenez/12/106/202" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/i.png"></a></p>
    </div>
    <?php echo smlsubform();?>
    </div>
  </div>
</div>
<!--scripts-->
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<?php wp_footer();?>
</body>
</html>