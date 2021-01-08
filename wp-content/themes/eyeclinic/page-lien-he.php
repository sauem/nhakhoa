<?php
get_header();
?>
<section class="contact-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><?= get_bloginfo() ?> <small><?= get_bloginfo('description') ?></small></h1>
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1947077054356!2d105.8480391147632!3d21.02489388600048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab949d64d239%3A0x4a83d18b498c7ab5!2zMzcgSGFpIELDoCBUcsawbmcsIFRyw6BuZyBUaeG7gW4sIEhvw6BuIEtp4bq_bSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1610080704675!5m2!1svi!2s"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                </div>
                <ul class="contact-info">
                    <li>
                        <span>Địa chỉ:</span>
                        37 Hai Bà Trưng, Hoàn Kiếm, Hà Nội
                    </li>
                    <li>
                        <span>Tư vấn:</span>
                        <a href="tel:0848 95 8866">0848 95 8866</a>
                    </li>
                    <li>
                        <span>Email:</span>
                        <a href="mailto:mathanoihospital@gmail.com">mathanoihospital@gmail.com</a>
                    </li>
                </ul>
                <div class="contact-form">
                    <div class="title">
                        <h3>Thông tin liên hệ</h3>
                    </div>
                    <!--                    <form id="contactForm">-->
                    <?= do_shortcode('[contact-form-7 id="124" title="Contact"]') ?>
                    <!--                    </form>-->
                </div>
            </div>
            <div class="col-lg-4">
                <?= get_template_part('template-parts/sidebar') ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
