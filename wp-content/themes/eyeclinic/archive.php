<?php

get_header();
?>


    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2><?= single_term_title() ?></h2>
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <li><?= get_the_archive_title()?></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="news-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $query = new WP_Query([
                        'category' => $cat,
                        'posts_per_page' => 9,
                        'post_status' => 'publish',
                        'paged' => $paged,
                    ]);
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="single-news-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="news-image">
                                            <a href="<?= get_the_permalink() ?>">
                                                <img src="<?= image(610, 500) ?>" alt="<?= get_the_title() ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="news-content">
                                            <h3>
                                                <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                            </h3>
                                            <p><?= get_the_excerpt() ?></p>
                                            <p><?= get_the_date() ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        echo getPaginate($query);
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="col-lg-4">
                    <?php get_template_part("template-parts/sidebar") ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>