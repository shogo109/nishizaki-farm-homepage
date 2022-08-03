<?php get_header(); ?>
    
    <div class="mv" id="mv">
        <div class="mv-kv-slide">
            <div class="mv-slide js-mv-slide">
                <div class="mv-kv mv-kv01"></div>
                <div class="mv-kv mv-kv02"></div>
                <div class="mv-kv mv-kv03"></div>
                <div class="mv-kv mv-kv04"></div>
                <div class="mv-kv mv-kv05"></div>
                <div class="mv-kv mv-kv06"></div>
                <div class="mv-kv mv-kv07"></div>
            </div>
            <div class="slider-dot-box"></div>
        </div>     
        <div class="mv-content">
            <h2 class="mv-content-ttl">ぶどうの里古都から<br>美味しいぶどうをお届けします</h2>
            <p class="mv-content-follow">Follow us</p>
            <div class="mv-content-follow-icon"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-brands-white.svg" alt="インスタグラムのアイコン"></a></div>
            <div class="mv-content-follow-icon"><a href="https://www.facebook.com/nishizakifarm/photos/?ref=page_internal"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-brands-white.svg" alt="facebookのアイコン"></a></div>
        </div>
        <div class="mv-scrolldown"><span>Scroll</span></div>
    </div>


<!-- プロローグ -->
    <section class="section section-prologue" id="section-prologue">
        <div class="section-prologue-inner">
            <h2 class="section-prologue-ttl">西崎農園へようこそ</h2>
            <h3 class="section-prologue-subttl">Welcome to</h3>
            <p class="section-prologue-txt">
                岡山のぶどう農園【西崎農園】<br>
                古都からお送りする桃太郎ぶどう・ピオーネ・シャインマスカット・紫苑など人気の品種が勢ぞろい。<br>
                糖度の高い種無しぶどうは皮ごとパリッと食べられます。<br>
                大粒の肉厚な実と果汁が口の中いっぱいに溢れます。
            </p>
            <div class="section-prologue-button"><a href="<?php echo home_url('/prologue') ?>" ontouchstart="">View more</a></div>
        </div>
    </section>


<!-- こだわり -->
    <section class="section section-goods" id="section-goods">
        <div class="section-inner">
            <h2 class="section-ttl section-goods-ttl">こだわり</h2>
            <p class="section-txt section-goods-txt">
                岡山市は年間の降水量が日本一少なく、<br>
                日照時間が他の県に比べて多いため「晴れの国」と呼ばれています。<br>
                岡山の中でも古都というところは、昔からぶどうの産地で、<br>
                数多くのぶどうを育てています。
            </p>
            <div class="section-goods-status js-slide-status">
                <span class="section-goods-status-current js-slide-status-current">0</span> /
                <span class="section-goods-status-total js-slide-status-total">0</span>
            </div>
            <div class="section-goods-slideshow slick-slideshow">
                <div class="section-goods-slideshow-shine-box section-goods-slideshow-box">
                    <img class="section-goods-slideshow-shine" src="<?php echo get_template_directory_uri(); ?>/img/goods-slides-shine.jpg" alt="シャインマスカット">
                    <div class="section-goods-slideshow-shine-content">
                        <p class="section-goods-slideshow-shine-ttl">シャインマスカット</p>
                        <p class="section-goods-slideshow-shine-txt">
                            恵まれた温暖な気候の岡山で、<br>
                            太陽の恵みをいっぱい浴びて育てられた葡萄です。
                        </p>
                    </div>
                </div>
                <div class="section-goods-slideshow-sien-box section-goods-slideshow-box">
                    <img class="section-goods-slideshow-sien" src="<?php echo get_template_directory_uri(); ?>/img/goods-slides-sien.jpg" alt="紫苑">
                    <div class="section-goods-slideshow-sien-content">
                        <p class="section-goods-slideshow-sien-ttl">紫苑</p>
                        <p class="section-goods-slideshow-sien-txt">
                            果物王国岡山に誕生した新ブランド<br>
                            ネットでも話題騒然、あまりのジューシーさに
                        </p>
                    </div> 
                </div>
                <div class="section-goods-slideshow-pione-box section-goods-slideshow-box">
                    <img class="section-goods-slideshow-pione" src="<?php echo get_template_directory_uri(); ?>/img/goods-slides-pione.jpg" alt="ピオーネ">
                    <div class="section-goods-slideshow-pione-content">
                        <p class="section-goods-slideshow-pione-ttl">ピオーネ</p>
                        <p class="section-goods-slideshow-pione-txt">
                            巨峰とカノンホールマスカットの<br>
                            かけ合わせで誕生した種なしぶどう
                        </p>
                    </div>
                </div> 
            </div>
            <a href="https://nishizaki.base.ec/"><p class="section-button section-goods-button">オンラインショップへ→</p></a>
        </div>
    </section>



<!-- 農園の様子 -->
    <section class="section section-information" id="section-information">
        <div class="section-inner">
            <h2 class="section-ttl section-information-ttl">農園の様子</h2>
            <div class="section-information-box">
                <a href="<?php echo get_post_type_archive_link('gallery'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/infomation-box-bg.JPG" alt="西崎農園の様子" class="section-information-box-img"></a>
                <p class="section-information-box-ttl">西崎農園　フォトギャラリー</p>
                <p class="section-information-box-date">2022/5/4</p>
            </div>
            <div class="section-information-news">
                <?php 
                    if (have_posts()):
                        while(have_posts()):
                            the_post();
                ?>

                <div class="section-information-news-item">
                    <h2 class="section-information-news-item-ttl"><?php the_title(); ?></h2>
                    <p class="section-information-news-item-date"><?php the_time('Y/m/d'); ?></p>
                    <div class="section-information-news-item-txt"><?php the_content(); ?></div>
                    <p class="section-information-news-item-more"><a href="<?php the_permalink(); ?>">more →</a></p>
                </div>
                <?php 
                        endwhile;
                    else:
                 ?>
                <p>投稿データがありませんでした。</p>
                <?php endif; ?>
            </div>
            <p class="section-button section-information-button"><a href="<?php echo home_url('/news'); ?>">お知らせ一覧へ→</a></p>
        </div> 
    </section>


<!-- マップ -->
    <section class="section section-map" id="section-map">
        <div class="section-map-box">
            <iframe class="section-map-box-gm" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13121.926994502559!2d134.0056937!3d34.6930272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd1a59a6320df14d!2z6KW_5bSO6L6y5ZyS!5e0!3m2!1sja!2sjp!4v1652855823504!5m2!1sja!2sjp" 
                width="600" 
                height="690" 
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>


    <?php get_footer(); ?>