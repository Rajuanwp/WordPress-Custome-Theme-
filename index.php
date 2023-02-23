<?php

/*
This Template for Display the Header 

*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(  );?>" class="no-js">
<head>
    <!-- change charset for responsive  -->
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  wp_head(  );
  ?>
</head>
<body <?php body_class(  );?> >

<div id="header_area" class="header_area">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href=""><img src="<?php echo get_theme_mod ('main_logo'); ?>" alt=""></a>

      </div>
      <div class="col-md-9">
                <?php

                wp_nav_menu( array('my_first_theme_menu'=>'first_main_menu','menu_id'=>'menu') );
                
                ?>

   
 
    </div>
  </div>
    <?php wp_footer(  ); ?>
</body>
</html>