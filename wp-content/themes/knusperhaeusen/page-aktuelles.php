<?php
/*
Template Name: Aktuelles Page
*/
?>



<?php get_header(); ?>


      </div>


        <div class="pgwrapper maincolor pgpadding1">
          <div class="akt col2 align"  >
            <br>



          </div>


          <div class="col1 align "  >


            <div class="txt maincolor clearfix">

              
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <?php the_content(); ?>

 <?php endwhile; endif; ?>
            
            </div>

          </div>

        </div>



<?php get_footer(); ?>