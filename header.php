<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
    <?php wp_footer(); ?>

    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/release/image/funuyakusatsu-fav.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cross-platform-yu-gothic@0.1.1/cross-platform-yu-gothic.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <script type="text/javascript" src="//webfonts.sakura.ne.jp/js/sakurav3.js"></script>
</head>

<body <?php body_class(); ?>>

    <main>
        <div class="page__header">
            <div class="page__top isHome">
                <div class="page__wrapper">
                    <div class="l-wrap">
                        <div class="page__info">
                            <div class="info_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/info_logo.png" alt="">
                            </div>
                            <div class="info_txt">
                                <h2>?????????????????????<br>FUNEYA?????????</h2>
                            </div>
                        </div>
                    </div>
                    <div class="hero_cta" >
                        <div class="hero_cta__cont" id="hero_cta">
                            <a class="item_01" href="https://www.tablecheck.com/shops/funeya-kusatsu/reserve" target="_blank">
                                <div class="item_icn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/icon_note.png" alt="">
                                </div>
                                <div class="item_txt">
                                    <p>
                                        ????????????<br>
                                        ???????????????
                                    </p>
                                </div>
                            </a>
                            <a class="item_01" href="https://www.instagram.com/funeya_kusatsu/" target="_blank">
                                <div class="item_icn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/icon_ig.png" alt="">
                                </div>
                                <div class="item_txt">
                                    <p>
                                        Instagram
                                    </p>
                                </div>
                            </a>
                            <a class="item_01" href="https://lin.ee/Fw3N2ow" target="_blank">
                                <div class="item_icn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/icon_line.png" alt="">
                                </div>
                                <div class="item_txt">
                                    <p>
                                        ???????????????
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <header class="nav__header" id="nav-header">
                <div class="l-wrap p-header--flex">
                    <div class="p-header__left">
                        <a href="">
                            <h1>
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/header_logo_pc.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/header_logo_sp.png" alt="">
                            </h1>
                        </a>
                    </div>
                    <div class="p-header__middle">
                        <nav class="l-navigation u-px-0">
                            <ul class="p-navigation">
                                <li class="p-navigation__link">
                                    <a href="#sect_1">
                                        ????????????
                                    </a>
                                </li>
                                <li class="p-navigation__link">
                                    <a href="#sect_3">
                                        ???????????????
                                    </a>
                                </li>
                                <li class="p-navigation__link">
                                    <a href="#sect_10">
                                        ??????????????????
                                    </a>
                                </li>
                                <li class="p-navigation__link">
                                    <a href="#sect_5">
                                        ????????????
                                    </a>
                                </li>
                                <li class="p-navigation__link">
                                    <a href="#sect_8">
                                        ????????????
                                    </a>
                                </li>
                                <li class="p-navigation__link">
                                    <a href="#footer">
                                        ????????????
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="p-header__right">
                        <p>
                            <span>TEL.</span>077-569-2019
                        </p>
                    </div>
                </div>

            </header>
        </div>
        <div class="page__content">