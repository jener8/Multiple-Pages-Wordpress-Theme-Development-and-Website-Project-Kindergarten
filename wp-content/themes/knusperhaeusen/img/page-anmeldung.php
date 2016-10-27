<?php
/*
Template Name: Anmeldung Page
*/
?>




<?php get_header(); ?>


      </div>


    <div class="pgwrapper maincolor  pgpadding1">

        <div class="col2 align " >
          <br>

          <h2 class="lead"></h2>

        </div>


      <div class="col1 alignLeft"  >

          <div class="txt clearfix">



  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <?php the_content(); ?>

 <?php endwhile; endif; ?>

            </div>

          </div>

        </div>



<?php get_footer(); ?>
