</main>
        </div>
        <div id="footer" class="footer">
            <div class="container">
                <div class="logo-holder">
                    <?php 
                    if ( is_active_sidebar( 'footer-left' ) ) :
                            dynamic_sidebar( 'footer-left' );
                    endif;
                    ?>
                </div>
                <div class="menu-holder">
                    <div class="menu-col">
                        <?php
                        if ( is_active_sidebar( 'footer-right-1' ) ) :
                                dynamic_sidebar( 'footer-right-1' );
                        endif;
                        ?>
                    </div>
                    <div class="menu-col">
                        <?php
                        if ( is_active_sidebar( 'footer-right-2' ) ) :
                                dynamic_sidebar( 'footer-right-2' );
                        endif;
                        ?>
                    </div>
                    <div class="menu-col menu-columns">
                         <?php
                        if ( is_active_sidebar( 'footer-right-3' ) ) :
                                dynamic_sidebar( 'footer-right-3' );
                        endif;
                        ?>        
                    </div>
                </div>
            </div>
        </div>
    </div>   
<?php wp_footer(); ?>
</body>
</html>