<?php if(is_front_page()) {


?>
<!doctype html>
<html lang="de" id="html" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php the_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php  wp_head(); ?>
  </head>

  <body <?php  body_class(); ?> >
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->






    <div class="main-enrtg maxsize main">

      <div class="main-menu align pgmainmenu " id="main-menu">
        <div class="menu2 pgmenu2 navcolor">
          <h1 class="" id="logo">

            <a href="index.html" id="logolink" class="logolink">Knusperhäuschen</a>

          </h1>
          <i class="menu-icon  demo-icon icon-menu " id="menu-button"></i>
        </div>

        <nav  class="navbar navpg" id="navid">

    <?php 

      $defaults = array(
        'container' => false,
        'theme_location'  => 'primary-menu',
        'menu_class'  => 'ulnav '
      );

      wp_nav_menu( $defaults );

    ?>
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
          </ul> -->
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






    <div class="main-enrtg maxsize main">

      <div class="main-menu align pgmainmenu " id="main-menu">
        <div class="menu2 pgmenu2 navcolor">
          <h1 class="" id="logo">

            <a  href="http://knusperhaus.jennifersimonds.com/" id="logolink" class="logolink">Knusperhäuschen</a>

          </h1>

          <i class="menu-icon demo-icon icon-menu " id="menu-button">menu</i>
        </div>

        <nav  class="navbar navpg" id="navid">





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