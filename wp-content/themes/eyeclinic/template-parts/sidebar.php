<?php
?>
<aside class="widget-area">
    <div class="widget widget_search">
        <form action="/tim-kiem" class="search-form">
            <label>
                <span class="screen-reader-text">Tìm kiếm:</span>
                <input name="s" type="search" class="search-field" placeholder="Tìm kiếm...">
            </label>
            <button type="submit">
                <i class='bx bx-search'></i>
            </button>
        </form>
    </div>
    <?php
    if (!is_archive() || !is_category()) {
        $categories = get_categories([
            'taxonomy' => 'category',
        ]);

        ?>
        <section class="widget widget_latest_news_thumb">
            <h3 class="widget-title">DANH MỤC</h3>
            <dl id="narrow-by-list">
                <dd class="even">
                    <ol class="configurable-swatch-list last-child">
                        <?php
                        if($categories){
                            foreach ($categories as $category){
                                ?>
                                <li>
                                    <a class="swatch-link" href="<?= get_term_link($category->term_id)?>">
                                        <span class="swatch-label"> <?= $category->name?> </span>
                                        <span class="count">(<?= $category->count?>)</span>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>


                    </ol>
                </dd>
            </dl>
        </section>
        <?php
    }
    ?>
    <section class="widget widget_latest_news_thumb">
        <h3 class="widget-title">TIN MỚI</h3>
        <?php
        query_posts([
            'post_type' => 'post',
            'posts_per_page' => 4,
            'order' => 'DESC',
            'orderby' => 'date'
        ]);
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <article class="item">
                    <a href="<?= get_the_permalink() ?>" class="thumb">
                        <span style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"
                              class="fullimage cover bg1" role="img"></span>
                    </a>
                    <div class="info">
                        <h4 class="title usmall"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h4>
                        <span><?= get_the_date() ?></span>
                    </div>
                </article>
                <?php
            }
        }
        wp_reset_query();
        ?>
    </section>
    <section class="widget widget_popular_posts_thumb">
        <h3 class="widget-title">Dịch vụ nổi bật</h3>
        <?php
        query_posts([
            'post_type' => 'service',
            'posts_per_page' => 4,
            'order' => 'DESC',
            'orderby' => 'date'
        ]);
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <article class="item">
                    <a href="<?= get_the_permalink() ?>" class="thumb">
                        <span style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"
                              class="fullimage cover bg1" role="img"></span>
                    </a>
                    <div class="info">
                        <h4 class="title usmall"><a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h4>
                        <span><?= get_the_date() ?></span>
                    </div>
                </article>
                <?php
            }
        }
        wp_reset_query();
        ?>

    </section>
</aside>

