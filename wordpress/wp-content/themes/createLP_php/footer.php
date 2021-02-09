<footer>
        <div class="footer-contents">
            <div class="footer-content">
                <p>
                    運営会社:株式会社アサヒ<br>
                    〒300-1255 <br>
                    茨城県つくば市小茎182-5
                </p>
            </div>
            <div class="footer-content-right">
                <a href="">求人掲載希望のお客様はこちら</a>
            </div>
        </div>
        <p class="footer-text">© asahi.Inc & wemotion.Inc. All Rights Reserved.</p>
        <?php wp_footer(); ?>
    </footer>    
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.js"></script>
    <script type="text/javascript">
        // slick
        jQuery(document).ready(function() {
            jQuery('.matter-contents').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            });
        });
        // モーダルウィンドウ
        jQuery(function(){
            jQuery('.js-modal-open').on('click',function(){
                jQuery('.js-modal').fadeIn();
                return false;
            });
            jQuery('.js-modal-close').on('click',function(){
                jQuery('.js-modal').fadeOut();
                return false;
            });
        });
        
    </script>
    <?php wp_footer();?>
</body>
</html>