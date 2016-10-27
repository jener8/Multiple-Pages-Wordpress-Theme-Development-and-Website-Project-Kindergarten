<?php if(is_front_page()) {


?>
<!doctype html>
<html lang="de" style="margin-top:0!important"id="html" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php the_title(); ?></title>
    <meta name="description" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
  <?php  wp_head(); ?>
  </head>

  <body <?php  body_class(); ?> id="body" >
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->




<div class="header-container ">
      
        <header class="front">
            <span class="main-entry-text lead headertxt"><h2>Ein kleiner, integrativ arbeitender,</h2><br/><h1> Elterninitiativ-Kindergarten in Lübars</h1><br/></span>
      </header>

</div>
    
    <nav  class="navbar bignavmain" id="navid">
    <h1 class="" id="logo">

            <a href="<?php echo site_url(); ?>" id="logolink" class="logolink">Knusperhäuschen</a>

          </h1>
          <?php wp_nav_menu (array( 'container' => false,'theme_location' => 'primary-menu','menu_class' => 'bignav'));?>
          <?php wp_nav_menu (array( 'container' => false,'theme_location' => 'mobile-menu','menu_class' => 'mobile-nav'));?>



         <!--  <ul class="no-dots ulnav  ulnavpg mobile bignav navfontcolor ">

            <li ><a href="pg_ueberuns.html" class="active">Über Uns</a></li>
            <li><a href="pg_konzept.html">Konzept</a></li>
            <li class="hide"><a href="pg_einrichtung.html" >Einrichtung</a></li>
            <li class="hide"><a href="pg_erzieher.html" >Erzieher</a></li>
            <li class="hide"><a href="pg_elterninitiative.html" >Elterninitiative</a></li>

            <li><a href="pg_jobs.html">Jobs</a></li>
            <li><a href="pg_aktuelles.html">Aktuelles</a></li>

            <li ><a href="pg_kontakt.html" class="mobile-hide">Kontakt</a></li>
            <li ><a href="pg_impressum.html" class="mobile-hide">Impressum</a></li>

</ul id="bottom" > -->
          <i class="fa fa-angle-double-down mobile-nav"></i>


        </nav>

    
    
    <div class="main-enrtg maxsize main menunav">

      <div class="main-menu align pgmainmenu " id="main-menu">
        <div class="menu2 pgmenu2 navcolor">
          <h1 class="" id="logo">

            <a  href="<?php echo site_url(); ?>" id="logolink" class="logolink ">Knusperhäuschen</a>

          </h1>

            <a href="#" onclick="" class="menu-icon  demo-icon icon-menu " id="menu-button" onclick="menutoggle()"><img class="menugraphic" src="<?php echo site_url(); ?>/wp-content/themes/knusperhaeusen/img/menuicon.svg" alt=""/></a>
        </div>
          

  

        <nav  class="navbar" id="navid">
  
          <?php wp_nav_menu (array( 'container' => false,'theme_location' => 'primary-menu','menu_class' => 'bignav'));?>
          <?php wp_nav_menu (array( 'container' => false,'theme_location' => 'mobile-menu','menu_class' => 'mobile-nav'));?>



         <!--  <ul class="no-dots ulnav  ulnavpg mobile bignav navfontcolor ">

            <li ><a href="pg_ueberuns.html" class="active">Über Uns</a></li>
            <li><a href="pg_konzept.html">Konzept</a></li>
            <li class="hide"><a href="pg_einrichtung.html" >Einrichtung</a></li>
            <li class="hide"><a href="pg_erzieher.html" >Erzieher</a></li>
            <li class="hide"><a href="pg_elterninitiative.html" >Elterninitiative</a></li>

            <li><a href="pg_jobs.html">Jobs</a></li>
            <li><a href="pg_aktuelles.html">Aktuelles</a></li>

            <li ><a href="pg_kontakt.html" class="mobile-hide">Kontakt</a></li>
            <li ><a href="pg_impressum.html" class="mobile-hide">Impressum</a></li>

</ul id="bottom" > -->
          <i class="fa fa-angle-double-down mobile-nav"></i>


        </nav>
  </div>  




        <?php } else{ ?>


<!doctype html>
<html lang="de" id="html" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php the_title(); ?></title>
    <meta name="description" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
  <?php  wp_head(); ?>
  </head>

  <body <?php  body_class(); ?> >
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->






    <div class="main-enrtg maxsize main ">

      <div class="main-menu align pgmainmenu " id="main-menu">
        <div class="menu2 pgmenu2 navcolor menunav">
          <h1 class="" id="logo">

            <a  href="<?php echo site_url(); ?>" id="logolink" class="logolink">Knusperhäuschen</a>

          </h1>

         <a href="#" onclick="" class="menu-icon  demo-icon icon-menu " id="menu-button"><img class="menugraphic" src="<?php echo site_url(); ?>/wp-content/themes/knusperhaeusen/img/menuicon.svg" alt=""/></a>
        </div>

        <nav  class="list navbar navpg" id="navid">

            <h1 class="bignavmain" id="logo">

            <a href="<?php echo site_url(); ?>" id="logolink" class="logolink">Knusperhäuschen</a>

          </h1>



          <?php wp_nav_menu (array( 'container' => false,'theme_location' => 'tertiary-menu','menu_class' => 'bignav'));?>
          <?php wp_nav_menu (array( 'container' => false,'theme_location' => 'mobile-menu','menu_class' => 'mobile-nav'));?>



         <!--  <ul class="no-dots ulnav ulnavpg  navfontcolor ">

            <li ><a href="pg_ueberuns.html" class="active">Über Uns</a></li>
            <li><a href="pg_konzept.html">Konzept</a></li>
            <li class="hide"><a href="pg_einrichtung.html" >Einrichtung</a></li>
            <li class="hide"><a href="pg_erzieher.html" >Erzieher</a></li>
            <li class="hide"><a href="pg_elterninitiative.html" >Elterninitiative</a></li>

            <li><a href="pg_jobs.html">Jobs</a></li>
            <li><a href="pg_aktuelles.html">Aktuelles</a></li>

            <li ><a href="pg_kontakt.html" class="mobile-hide">Kontakt</a></li>
            <li ><a href="pg_impressum.html" class="mobile-hide">Impressum</a></li>
          </ul > -->
          <i class="fa fa-angle-double-down mobile-nav"></i>
        </nav>
      </div>
        
        
      <?php } ?>