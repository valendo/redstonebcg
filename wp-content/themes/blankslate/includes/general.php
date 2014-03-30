<?php
class General
{
    public function get_pages_by_parent_id($parent_id) {
  		$childs = get_posts(array(
        'post_status' => 'publish',
        'post_type' => 'page',
        'post_parent' => $parent_id,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'nopaging' => true));

    if (count($childs) > 0) {
    	$html.='<ul class="listblock">';
    	foreach ($childs as $child) {
    		$id = $child->ID;
	    	$title = $child->post_title;
	    	$url = get_permalink($id);
	    	$sub_childs = get_posts(array(
          'post_status' => 'publish',
          'post_type' => 'page',
          'post_parent' => $id,
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'nopaging' => true));
	    	if (count($sub_childs) > 0) {
          $exist = false;
          foreach ($sub_childs as $sub_child) {
            if (get_the_ID() == $sub_child->ID) {
              $exist = true;
              break;
            }
          }
	    		$html.='<li>';
          if ($exist == true || get_the_ID() == id) {
            $html.='<a class="nomal active">';
          }
          else
          {
            $html.='<a class="nomal">';
          }
          $html.= $title.'</a>';
          if ($exist == true) {
            $html.='<ul class="sublist show">';
          }
          else
          {
            $html.='<ul class="sublist">';
          }
	    		foreach ($sub_childs as $sub_child) {
            if (get_the_ID() == $sub_child->ID) {
              $html.='<li><a class="selected" href="'.get_permalink($sub_child->ID).'">- '.$sub_child->post_title.'</a></li>'; 
            }
            else
            {
              $html.='<li><a href="'.get_permalink($sub_child->ID).'">- '.$sub_child->post_title.'</a></li>'; 
            }
	    		}
	    		$html.='</li></ul>';
	    	}
	    	else{
          if (get_the_ID() == $id) {
            $html.='<li><a class="selected" href="'.$url.'">'.$title.'</a></li>';
          }
          else
          {
            $html.='<li><a href="'.$url.'">'.$title.'</a></li>';
          }
	    	}
	    }
	    $html.='</ul>';
	 }
	 return $html;
    }
}
?>