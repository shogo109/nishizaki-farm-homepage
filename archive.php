<?php get_header(); ?>


    <section class="section section-gallery">
        <div class="section-inner section-gallery-inner">
            <h2 class="section-ttl">西崎農園フォトギャラリー</h2>
                <div class="section-gallery-imgs">
                    <?php 
                        if (have_posts()):
                            while(have_posts()):
                                the_post();
                    ?>
                    <div class="section-gallery-imgs-box">
                        <?php the_content(null, array("class" => "section-gallery-imgs-box img" )); ?>
                    </div>
                    <?php 
                        endwhile;
                        the_posts_pagination();
                    else:
                    ?>
                    <p>投稿データがありませんでした。</p>
                    <?php endif; ?>
                </div>
        </div>
        
    </section>

    <section class="section section-category">
        <div class="section-inner section-category-inner">
            <h2 class="section-ttl section-category-ttl">カテゴリー</h2>
            <a href="<?php echo get_post_type_archive_link('gallery'); ?>">
                <div class="section-category-flex section-category-photo-flex">
                    <h3 class="section-category-item">フォト</h3>
                    <div class="section-category-count">
                        <?php
                            $count_custom = wp_count_posts('gallery');
                            $custom_posts = $count_custom->publish;
                            echo $custom_posts;
                        ?>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('/news'); ?>">
                <div class="section-category-flex section-category-news-flex">
                    <h3 class="section-category-item">お知らせ</h3>
                    <div class="section-category-count">
                        <?php 
                            $count_posts = wp_count_posts();
                            $posts = $count_posts->publish;
                            echo $posts;
                        ?>
                    </div>
                </div>
            </a>
        </div>
    </section>

<?php get_footer(); ?>