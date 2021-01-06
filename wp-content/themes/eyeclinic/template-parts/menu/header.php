<div class="top-header-area bg-ffffff">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="breaking-news-content">
                    <h6 class="breaking-title">
                        Breaking News:
                    </h6>
                    <div class="breaking-news-slides owl-carousel owl-theme">
                        <?php query_posts([
                            'posts_per_page' => 6,
                        ]);
                        while (have_posts()) {
                            the_post();
                            ?>
                            <div class="single-breaking-news">
                                <p>
                                    <a target="_blank" href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                </p>
                            </div>
                            <?php
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="top-header-social">
                    <li>
                        <a href="#" class="facebook" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pinterest" target="_blank">
                            <i class='bx bxl-instagram'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pinterest" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="linkedin" target="_blank">
                            <i class='bx bxl-youtube'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
