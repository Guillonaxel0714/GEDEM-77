<?php
/**
 * Footer template
 * 
 * 
 */
?>
    
    </main>
    <footer class="footer">
        <div class="footer_row">
            <div class="section_footer_img">
                <div class="footer_logo">
                    <img class="logo" src="<?php echo get_theme_mod( 'gedem_logo_nav-menu' ); ?>" alt="logo GEDEM">
                </div>
            </div>
            <div class="footer-nav">
                <?php 
                wp_nav_menu([
                    'theme_location' => 'footer-nav',
                    'container' => false,
                    'menu_class' => 'footer_ul'
                ]) 
                ?>
                <p>© 2021 GEDEM 77</p>
            </div>
            
            <div class="footer_coord">
                <div class="tkt">
                    <?php 
                    $contact_phone_number = get_theme_mod( 'gedem_footer_contact_phone_number' );
                    if ( ! empty( $contact_phone_number ) ) : ?>
                    <p><?php echo esc_html( $contact_phone_number ); ?></p> 
                    <?php
                    endif; ?>
                    <?php 
                    $contact_address1 = get_theme_mod( 'gedem_footer_contact_address1' );
                    if ( ! empty( $contact_address1 ) ) : ?>
                    <p><?php echo esc_html( $contact_address1 ); ?></p> 
                    <?php
                    endif; ?>
                    <?php 
                    $contact_address2 = get_theme_mod( 'gedem_footer_contact_address2' );
                    if ( ! empty( $contact_address2 ) ) : ?>
                    <p><?php echo esc_html( $contact_address2 ); ?></p> 
                    <?php
                    endif; ?>
                    <?php
	        		if (isset( $_SESSION['id'] )) : ?>
	        		    <a href="">Deconnexion</a>
                    <?php
	        		else : ?>
	        		   <a href="">espace élu</a>
	        		<?php
	        		endif;
	        		?>

                    <br>
                    <a href="<?php echo trailingslashit( home_url() ) . 'mentions-legales'; ?>">Mentions légales</a>
                </div> 
            </div>
        </div>
        <?php wp_footer() ?>
    </footer>
</body>
</html>
