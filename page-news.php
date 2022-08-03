<?php get_header(); ?>

<?php  ?>

    <section class="section section-news">
        <div class="section-inner section-news-inner">
            <h2 class="section-ttl">農園からのお知らせ</h2>
            <div class="section-news-flex">

                <?php query_posts('post_type=post&paged='.$paged); ?>
                <?php 
                    if (have_posts()):
                        while(have_posts()):
                            the_post();
                ?>
                
                <div class="section-news-box">
                    <div class="section-news-box-img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(null, array("class" => "section-news-box-img img")); ?></a>
                    </div>
                    <div class="section-news-box-content">
                        <a href="post.html">
                            <h3 class="section-news-box-content-ttl"><?php the_title(); ?></h3>
                            <p class="section-news-box-content-date"><?php the_time('Y/m/d H:i'); ?></p>
                        </a>    
                    </div>
                </div>
                <?php 
                        endwhile;
                        $args = array(
                            'prev_text' => '前',
                            'next_text' => '次',
                        );
                        the_posts_pagination($args);
                    else:
                ?>
                <p>投稿データがありませんでした。</p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
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