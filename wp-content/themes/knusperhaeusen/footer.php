

<footer class="pgfooter  hide navfont-sm">
<div class="footer ">
<?php

        $defaults = array(
        'container' => false,
        'theme_location'  => 'secondary-menu',
        'menu_class'  => 'footer-list'
      );

      wp_nav_menu( $defaults );

    ?>


       <!--    <ul class="no-dots footer-list footer-padding navfontcolor">
            <li><a href="pg_kontakt.html" >Kontakt</a></li>
            <li><a href="pg_webdesign.html">Webdesign</a></li>
            <li><a href="pg_impressum.html">Impressum</a></li>
            <li><a href="pg_anmeldung.html">Anmeldung</a></li>
          </ul> -->


        </div>
      </footer>

    </div>


<?php wp_footer(); ?>
        </body>
      </html>
