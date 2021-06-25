<?php
/**
 * Footer template
 * 
 * 
 */
?>
    
    </main>
    <footer>
        <div class="footer_row">
            <div class="section_footer_img">
                <div class="footer_logo">
                    <img class="logo" src="<?php echo get_theme_mod( 'gedem_logo_nav-menu' ); ?>" alt="logo GEDEM">
                </div>
            </div>
            <div class="footer-nav">
            <?php 
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer_ul'
                ]) 
            ?>
                <p>© 2021 GEDEM 77</p>

            </div>
            <div class="footer_coord">
                <div class="tkt">
                    <p>contact@gedem.fr</p>
                    <p>01 64 83 58 60</p> 
                    <a href="">ESPACE ÉLU</a><br>
                    <a href="page_legales.html">Mentions légales</a>
                </div> 
            </div>
        </div>
        <?php wp_footer() ?>
    </footer>
</body>
</html>
