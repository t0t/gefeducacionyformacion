<header class="banner navbar navbar-default navbar-fixed-top" role="banner"
data-0="height:130px;" data-101="height:50px;">
    
<div class="col-xs-6 col-sm-3">
  <a class="logo" href="<?php echo home_url(); ?>/">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="GEF" class="logo-img">
  </a>
</div>

<div class="col-xs-6 col-sm-9">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <nav data-0="padding-top:30px;" data-101="padding-top:0;" class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
</div>

	
	<?php //echo qtrans_generateLanguageSelectCode('text'); ?>
						<!--
<script>jQuery(document).ready(function(){ 
						jQuery('.lang-en a span').html('EN'); 
						jQuery('.lang-es a span').html('ES'); 
						})</script>
-->
    
  <?php //dimox_breadcrumbs() ?>
</header>
<!-- breadcrumbs -->
