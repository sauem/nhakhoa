<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being <?= ASSET ?>).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$categories = get_categories([
    'hide_empty' => true,
]);
$category_show = [];
foreach ($categories as $category) {
    $is_home = get_term_meta($category->term_id, 'show_home', TRUE);
    if ($is_home) {
        $category_show[] = [
            'term' => $category->term_id,
            'type' => get_term_meta($category->term_id, 'show_type', TRUE)
        ];
    }
}


?>
    <section class="main-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    query_posts([
                        'posts_per_page' => 1,
                        'post_type' => 'post',
                        'category__in' => 1
                    ]);
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="single-main-news">
                            <a href="<?= get_the_permalink() ?>">
                                <img width="100%" src="<?= image(1200, 850) ?>"
                                     alt="image">
                            </a>
                            <div class="news-content">
                                <h3>
                                    <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                </h3>
                                <span><?= get_the_date() ?></span>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_query();
                    ?>
                </div>
                <div class="col-lg-4">
                    <?php
                    query_posts([
                        'posts_per_page' => 1,
                        'offset' => 1,
                        'post_type' => 'post',
                        'category__in' => 1
                    ]);
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="single-main-news-inner">
                            <a href="<?= get_the_permalink() ?>">
                                <img src="<?= image(402, 269) ?>"
                                     alt="<?= get_the_title() ?>">
                            </a>
                            <div class="news-content">
                                <h3>
                                    <a href="<?= get_the_permalink() ?>">
                                        <?= get_the_title() ?>
                                    </a>
                                </h3>
                                <span><?= get_the_date() ?></span>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_query();
                    ?>
                    <?php
                    query_posts([
                        'posts_per_page' => 2,
                        'offset' => 2,
                        'post_type' => 'post',
                        'category__in' => 1
                    ]);
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="single-main-news-box media align-items-center">
                            <a href="<?= get_the_permalink() ?>">
                                <div class="img-wrap">
                                    <img src="<?= image(144, 144) ?>"
                                         alt="<?= get_the_title() ?>">
                                </div>
                            </a>
                            <div class="news-content">
                                <h3>
                                    <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                </h3>
                                <span>
                                    <?= get_the_date() ?>
                                </span>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>


    <section class="default-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="most-popular-news">
                        <div class="section-title">
                            <h2>DỊCH VỤ</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                query_posts([
                                    'posts_per_page' => 2,
                                    'post_type' => 'service',
                                    'order' => 'DESC',
                                    'orderby' => 'date'
                                ]);
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <div class="single-most-popular-news">
                                        <div class="popular-news-image">
                                            <a href="<?= get_the_permalink() ?>">
                                                <img src="<?= image(600, 300) ?>"
                                                     alt="<?= get_the_title() ?>">
                                            </a>
                                        </div>
                                        <div class="popular-news-content">
                                            <h3>
                                                <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                            </h3>
                                            <p><?= get_the_date() ?></p>
                                        </div>
                                    </div>
                                <?php }
                                wp_reset_query(); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php
                                query_posts([
                                    'posts_per_page' => 5,
                                    'post_type' => 'service',
                                    'offset' => 2,
                                    'order' => 'DESC',
                                    'orderby' => 'date'
                                ]);
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <div class="most-popular-post">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-sm-4">
                                                <div class="post-image">
                                                    <a href="<?= get_the_permalink() ?>">
                                                        <img src="<?= image(456, 380) ?>"
                                                             alt="<?= get_the_title() ?>">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="post-content">
                                                    <h3>
                                                        <a href="<?= get_the_permalink() ?>">
                                                            <?= get_the_title() ?>

                                                        </a>
                                                    </h3>
                                                    <p><?= get_the_date() ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                                wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>

                    <?php query_posts([
                        'post_type' => 'video',
                        'posts_per_page' => 6,
                        'order' => 'DESC',
                        'orderby' => 'date'
                    ]);
                    if (have_posts()):
                        ?>
                        <div class="video-news">
                            <div class="section-title">
                                <h2>VIDEO TIN TỨC</h2>
                            </div>
                            <div class="video-slides owl-carousel owl-theme">
                                <?php while (have_posts()) : the_post(); ?>
                                    <div class="video-item">
                                        <div class="video-news-image">
                                            <a href="<?= get_the_permalink() ?>">
                                                <img src="<?= image(610, 500) ?>" alt="image">
                                            </a>
                                            <a href="https://www.youtube.com/watch?v=<?= get_post_meta(get_the_ID(), 'link_youtube', true) ?>"
                                               class="popup-youtube">
                                                <i class='bx bx-play-circle'></i>
                                            </a>
                                        </div>
                                        <div class="video-news-content">
                                            <h3>
                                                <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                            </h3>
                                            <span><?= get_the_date() ?></span>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif;
                    wp_reset_query(); ?>
                </div>
                <div class="col-lg-4">
                    <aside class="widget-area">
                        <section class="widget widget_latest_news_thumb">
                            <h3 class="widget-title">TIN MỚI</h3>
                            <?php
                            query_posts([
                                'posts_per_page' => 12,
                                'offset' => 4,
                                'category__in' => 1
                            ]);
                            while (have_posts()) {
                                the_post();
                                ?>
                                <article class="item">
                                    <a href="<?= get_the_permalink() ?>" class="thumb">
                                        <span style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>)"
                                              class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a
                                                    href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h4>
                                        <span><?= get_the_date() ?></span>
                                    </div>
                                </article>
                            <?php }
                            wp_reset_query(); ?>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
