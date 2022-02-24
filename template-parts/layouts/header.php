<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>GoldPoint - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php //require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div id="offcanvas-flip-menu" class="menuMobile" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar menuMobile__bar">
        <ul class="menuMobile__nav uk-nav-default uk-nav-parent-icon uk-nav-divider" uk-nav="multiple: false;toggle: .menuMobile__nav__icon;collapsible:false;">
            <li class="uk-parent">
                <a href="#">NGÀNH HÀNG NHÀ TẮM</a>
                <span class="menuMobile__nav__icon"></span>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="#">Bàn chải đánh răng</a>
                        <ul>
                            <li><a href="#">Bàn chải đánh răng người lớn</a></li>
                            <li><a href="#">Bàn chải đánh răng trẻ em</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Kem đánh răng</a></li>
                    <li><a href="#">Tắm bông MISU</a></li>
                    <li><a href="#">Bông tắm</a></li>
                    <li><a href="#">Khăn mặt, khăn tăm</a></li>
                    <li><a href="#">Khăn ướt EMYA</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">NGÀNH HÀNG MỸ PHẨM</a>
                <span class="menuMobile__nav__icon"></span>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="#">Bàn chải đánh răng</a>
                        <ul>
                            <li><a href="#">Bàn chải đánh răng người lớn</a></li>
                            <li><a href="#">Bàn chải đánh răng trẻ em</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Kem đánh răng</a></li>
                    <li><a href="#">Tắm bông MISU</a></li>
                    <li><a href="#">Sữa rửa tay</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">NGÀNH HÀNG TẨY RỬA</a>
                <span class="menuMobile__nav__icon"></span>
                <ul class="uk-nav-sub">
                    <li>
                        <a href="#">Bàn chải đánh răng</a>
                        <ul>
                            <li><a href="#">Bàn chải đánh răng người lớn</a></li>
                            <li><a href="#">Bàn chải đánh răng trẻ em</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Nước xả vải</a></li>
                    <li><a href="#">Nước rửa bát</a></li>
                    <li><a href="#">Xịt bếp đa năng</a></li>
                    <li><a href="#">Xịt rửa kính</a></li>
                    <li><a href="#">Nước lau sàn</a></li>
                    <li><a href="">Nước tẩy bồn cầu</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--.header-->
<div id="header" class="header">
    <!--.header__top-->
    <div class="header__top">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left uk-visible@m">
                    <a href="" class="uk-navbar-item header__top__navItem header__top__social" uk-icon="icon: youtube"></a>
                    <a href="" class="uk-navbar-item header__top__navItem header__top__social" uk-icon="icon: facebook"></a>
                    <a href="" class="uk-navbar-item header__top__navItem header__top__social" uk-icon="icon: instagram"></a>
                    <div class="uk-navbar-item header__top__navItem"><span class="header__top__txt1">Khi cùng nhau không gì là không thể !</span></div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item header__top__navItem">
                        <div class="header__top__divider">
                            <div class="uk-flex-middle uk-grid-8" uk-grid>
                                <div class="uk-width-auto">
                                    <a href="" class="uk-icon-button header__top__icon" uk-icon="receiver"></a>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="header__top__size1">HOTLINE</div>
                                    <div class="header__top__mt header__top__size2">0961992066</div>
                                </div>
                            </div>
                        </div>
                        <div class="header__top__divider">
                            <div class="uk-flex-middle uk-grid-8" uk-grid>
                                <div class="uk-width-auto">
                                    <a href="" class="uk-icon-button header__top__icon" uk-icon="user"></a>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="header__top__size2">TÀI KHOẢN</div>
                                    <div class="header__top__mt header__top__size1 line-clamp-1"><a href="">ĐĂNG NHẬP</a> / <a href="">ĐĂNG KÝ</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--/.header__top-->

    <!--.header__bottom-->
    <div class="header__bottom" uk-sticky>
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar="dropbar: true">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle header__bottom__menu header__bottom__navItem uk-hidden@m" uk-navbar-toggle-icon href="#offcanvas-flip-menu" uk-toggle></a>
                    <a href="" class="uk-navbar-item uk-logo header__bottom__navItem uk-padding-remove-left"><img src="images/1x/logo.png" alt=""></a>
                    <div class="uk-navbar-item header__bottom__navItem uk-visible@m">
                        <a href="" class="uk-button uk-button-primary header__bottom__danhmucbtn uk-border-rounded">
                            <span class="header__bottom__danhmucbtn__txt">DANH MỤC SẢN PHẨM</span>
                            <span class="uk-position-center-right header__bottom__danhmucbtn__icon" uk-icon="icon: check"></span>
                        </a>
                        <div class="uk-navbar-dropdown header__bottom__dropdown" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                            <div uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-child-width-1-3@m" uk-grid>
                                        <div>
                                            <ul class="uk-nav header__bottom__nav">
                                                <li>
                                                    <a href="#">NGÀNH HÀNG NHÀ TẮM</a>
                                                    <ul class="uk-nav-default uk-nav-divider header__bottom__subnav1" uk-nav>
                                                        <li>
                                                            <a href="#">Bàn chải đánh răng</a>
                                                            <ul class="uk-nav-default uk-nav-divider header__bottom__subnav1 header__bottom__subnav2 uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right-top" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                                                                <li><a href="">Bàn chải đánh răng người lớn</a></li>
                                                                <li><a href="">Bàn chải đánh răng trẻ em</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Kem đánh răng</a></li>
                                                        <li><a href="#">Tắm bông MISU</a></li>
                                                        <li><a href="#">Bông tắm</a></li>
                                                        <li><a href="#">Khăn mặt, khăn tăm</a></li>
                                                        <li><a href="#">Khăn ướt EMYA</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav header__bottom__nav">
                                                <li>
                                                    <a href="#">NGÀNH HÀNG MỸ PHẨM</a>
                                                    <ul class="uk-nav-default uk-nav-divider header__bottom__subnav1" uk-nav>
                                                        <li>
                                                            <a href="#">Bàn chải đánh răng</a>
                                                            <ul class="uk-nav-default uk-nav-divider header__bottom__subnav1 header__bottom__subnav2 uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right-top" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                                                                <li><a href="">Bàn chải đánh răng người lớn</a></li>
                                                                <li><a href="">Bàn chải đánh răng trẻ em</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Kem đánh răng</a></li>
                                                        <li><a href="#">Tắm bông MISU</a></li>
                                                        <li><a href="#">Sữa rửa tay</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav header__bottom__nav">
                                                <li>
                                                    <a href="#">NGÀNH HÀNG TẨY RỬA</a>
                                                    <ul class="uk-nav-default uk-nav-divider header__bottom__subnav1" uk-nav>
                                                        <li>
                                                            <a href="#">Nước giặt quần áo</a>
                                                            <ul class="uk-nav-default uk-nav-divider header__bottom__subnav1 header__bottom__subnav2 uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right-top" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300">
                                                                <li><a href="">Bàn chải đánh răng người lớn</a></li>
                                                                <li><a href="">Bàn chải đánh răng trẻ em</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Nước xả vải</a></li>
                                                        <li><a href="#">Nước rửa bát</a></li>
                                                        <li><a href="#">Xịt bếp đa năng</a></li>
                                                        <li><a href="#">Xịt rửa kính</a></li>
                                                        <li><a href="#">Nước lau sàn</a></li>
                                                        <li><a href="">Nước tẩy bồn cầu</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-1-4@m">
                                    <div class="uk-cover-container">
                                        <img src="images/banner.png" alt="" uk-cover="">
                                        <canvas width="300" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-navbar-item header__bottom__navItem uk-visible@m">
                        <div class="uk-grid-collapse uk-grid-match" uk-grid>
                            <div class="uk-width-expand">
                                <input class="uk-input uk-form-large header__bottom__formSearch__input" type="text" placeholder="Bạn tìm gì hôm nay?">
                            </div>
                            <div class="uk-width-auto">
                                <button class="uk-button uk-button-primary uk-button-large header__bottom__formSearch__btn"><span>Tìm kiếm</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <a href="" class="header__bottom__tracuu uk-navbar-item header__bottom__navItem">
                        <div class="header__bottom__tracuu__txt uk-visible@m">
                            TRA CỨU <br>
                            ĐƠN HÀNG
                        </div>
                    </a>
                    <a href="" class="header__bottom__cart uk-navbar-item header__bottom__navItem" data-count="0"></a>
                </div>
            </nav>
            <div class="uk-hidden@m header__bottom__searchMb">
                <form class="uk-search uk-search-default header__bottom__searchMb__form">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Bạn tìm gì hôm nay?">
                </form>
            </div>
        </div>
    </div>
    <!--/.header__bottom-->
</div>
<!--/.header-->
<div class="uk-overlay uk-overlay-primary mask_menu"></div>