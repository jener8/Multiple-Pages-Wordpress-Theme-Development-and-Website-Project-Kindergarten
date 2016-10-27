<?php
/*
Template Name: Einrichtung Page
*/
?>



<?php get_header(); ?>


      </div>


        <div class="pgwrapper maincolor pgpadding1">
          <div class="erctg col2 align"  >
            <br>



          </div>


          <div class="col1 align "  >


            <div class="txt maincolor clearfix">
              <h2 class="pgtitle font-L titlecolor">Einrichtung</h2>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <?php the_content(); ?>

 <?php endwhile; endif; ?>

            </div>

          </div>

        </div>



<?php get_footer(); ?>
