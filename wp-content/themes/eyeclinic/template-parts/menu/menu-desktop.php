<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img width="80" src="<?= get_logo() ?>" alt="<?= get_bloginfo() ?>">
                        <span style="color: #01549d" class="ml-1 d-none d-md-block"><?= get_bloginfo() ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand d-md-flex align-items-center" href="<?= home_url() ?>">
                    <div class="p-2">
                        <img width="80" src="<?= get_logo() ?>" alt="<?= get_bloginfo() ?>">
                    </div>
                    <span style="color: #01549d" class="ml-1 d-none d-md-block">
                        <span style="font-size: 18px;line-height: 25px"> SỞ Y TẾ HÀ NỘI</span>
                        <br>
                        <?= get_bloginfo() ?>
                    </span>
                </a>
                <?= wp_nav_menu([
                    "menu" => "head",
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse mean-menu',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav',
                ]); ?>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="Search for..">
                                <button type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
