<?php
get_header();

?>

<section class="news-details-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <?php
                                if (is_singular('video')) {
                                    ?>
                                    <iframe width="560" height="315"
                                            src="https://www.youtube-nocookie.com/embed/<?= get_post_meta(get_the_ID(), 'link_youtube', true) ?>"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="article-content">
                                <span><?= get_the_date() ?></span>
                                <h3><?= get_the_title() ?></h3>
                                <hr>
                                <?= get_the_content() ?>
                            </div>
                        </div>
                    <?php }
                }?>
            </div>
            <div class="col-lg-4">
                <?php get_template_part('template-parts/sidebar') ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
