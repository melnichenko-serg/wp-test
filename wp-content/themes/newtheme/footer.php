<footer class="main-footer">
    <div class="container">
        <div class="content-footer">
            <div class="left-main-footer">
                <ul class="footer-social">
                    <li><a href="http://facebook.com/"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                    <li><a href="http://twitter.com/"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                    <li><a href="http://linkedin.com/"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
                    <li><a href="http://google.com/"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a></li>
                    <li><a href="http://youtu.be/"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a></li>
                    <li><a href="https://www.instagram.com"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                </ul>
            </div>

            <div class="center-main-footer">
		        <?php wp_nav_menu( [
			        'theme_location' => 'footer_menu',
			        'container' => 'ul',
			        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'menu_class' => 'footer-nav',
			        'menu_id' => '',
		        ] ); ?>
            </div>

            <div class="right-main-footer">
                <p><?php echo date( 'Y' ); ?> &copy; All rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

</body>

<?php wp_footer(); ?>
</html>