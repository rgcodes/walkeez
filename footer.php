<div class="footer_wrapper_top">
    <div class="footer_top_linestrip"></div>
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="footer_wrapper_bottom">
    <div class="container_24">
        <div class="grid_24">
            <div class="grid_16 alpha">
                <div class="copyright_left">
                     <a class="tagline" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            
                   
                </div>
            </div>
            <div class="grid_8 omega">
                <div class="copyrightinfo">
                    <?php if (poloray_get_option('poloray_footertext') != '') { ?>
                        <p class="copyright"><?php echo poloray_get_option('poloray_footertext'); ?></p> 
                    <?php } else { ?>
                        <p class="copyright"><?php _e('', 'poloray'); ?> <a href="http://www.methodmedia.co.uk/website-designers/">Website Designed by Method Media</a></p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
