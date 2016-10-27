<?php get_header(); ?>







          <div class="col1 align "  >


            <div class="txt maincolor clearfix">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <h2 class="lead font-M"><?php the_content(); ?></h2>
              <h2 class="pgtitle font-L titlecolor"><?php the_title(); ?></h2>

              <div class="pgcol maincolorfirst ">
                <p>
                  <?php the_content(); ?>
                </p>


    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

              </div>



            </div>
          </div>

        </div>

        <?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>
