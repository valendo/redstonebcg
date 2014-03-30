<!-- Sidebar -->
<?php 
  include(get_template_directory().'/includes/general.php'); 
  $instance = new General();
?>

<div class="sidebar">
  <?php 
    $html= $instance->get_pages_by_parent_id(13); 
    echo $html;
  ?>
</div>

<script type="text/javascript">
  $(document).ready(function () {
  // for moblie
  $('.sidebar').slicknav();
  //end===  
  $('.sidebar .listblock li ul').hide();
  $('.sidebar > .listblock > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('.sidebar li ul').slideUp();
      $(this).next().slideToggle();
      $('.sidebar .listblock li a').removeClass('active');
      $(this).addClass('active');
    
    }
  });
});
</script> 