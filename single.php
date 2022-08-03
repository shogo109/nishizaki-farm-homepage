<?php 
get_header(); 
the_post();
?>


    <section class="section section-post">
        <div class="section-inner section-post-inner">
            <h3 class="section-ttl"><?php the_title(); ?></h3>
            <p class="section-post-date">2021/7/30</p>
            <div class="section-post-img">
                <?php the_post_thumbnail(null, array("class" => "section-post-img img" )); ?>
            </div>
            <div class="section-post-txt">
                <?php the_content(); ?>
            </div>
            <p class="section-button section-post-button"><a href="<?php echo home_url('/news'); ?>">お知らせ一覧へ→</a></p>
        </div>
    </section>


<?php get_footer(); ?>