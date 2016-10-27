

<?php
/*
Template Name: Lead Text Page
*/
?>
<?php get_header(); ?>


      </div>


        <div class="pgwrapper maincolor pgpadding1">
          <div class="wilkom col2 align"  >
            <br>



          </div>


          <div class="col1 align "  >

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="txt maincolor clearfix">

      
              <h2 class="lead font-M">
                <?php the_field('); ?>
              </h2>


              <h2 class="pgtitle font-L titlecolor"><?php the_title(); ?></h2>
              <div class="pgcol maincolorfirst ">
          
                  <?php the_content(); ?>

              </div>




            </div>
                    <?php endwhile;  endif; ?>
          </div>

        </div>


<?php get_footer(); ?>