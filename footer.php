<!-- フッダー -->
<footer class="footer">
        <div class="section-inner">
            <div class="footer-flex">
                <div class="footer-left">
                    <h1 class="footer-ttl">
                        <a href="index.html">西崎農園</a>
                        <a href="index.html">NishizakiFarm</a>
                    </h1>
                    <div class="footer-address-box">
                        <p class="footer-address-item"><a href="<?php echo home_url('/#section-map'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/location-dot-solid-green.svg" alt="位置情報のアイコン"></a></p>
                        <p class="footer-potalcode">〒703-8213</p>
                        <p class="footer-address">岡山県岡山市東区藤井65</p>
                    </div>
                    
                    <div class="footer-number">
                        <p class="footer-number-tel">TEL : 086-279-1086</p>
                        <p class="footer-number-fax">FAX : 086-279-1287</p>
                    </div>
                    <p class="footer-button section-button"><a href="<?php echo home_url('/contact-form'); ?>">お問い合わせはこちら</a></p>
                </div>
                <div class="footer-right">
                    <ul class="footer-nav-list">
                        <li class="footer-nav-item"><a href="<?php echo get_post_type_archive_link('gallery'); ?>">写真一覧</a></li>
                        <li class="footer-nav-item"><a href="<?php echo home_url('/news'); ?>">お知らせ一覧</a></li>
                        <li class="footer-nav-item"><a href="https://nishizaki.base.ec/">オンラインショップへ</a></li>
                    </ul>
                    <p class="footer-follow">Follow us</p>
                    <div class="footer-follow-icon">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/insta-footer.svg" alt="インスタグラム"></a>
                        <a href="https://www.facebook.com/nishizakifarm/photos/?ref=page_internal"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-footer.svg" alt="フェイスブック"></a>
                        <a href="https://nishizaki.base.ec/"><img src="<?php echo get_template_directory_uri(); ?>/img/backet-footer.svg" alt="買い物かご"></a>
                    </div>
                </div>
            </div>
            <p class="footer-copy">Copyright &copy; Nishizaki Farm</p>
        </div>
    </footer>


    
    

    <?php wp_footer(); ?>
</body>
</html>