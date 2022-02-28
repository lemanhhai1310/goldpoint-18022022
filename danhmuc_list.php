<?php $data["title"] = "Danh mục List"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section home__section danhmuc__section1">
    <div class="uk-container">
        <!--home__block01-->
        <div class="uk-section-xsmall home__block01">
            <ul class="home__block01__subnav uk-subnav uk-subnav-divider uk-flex-center" uk-margin>
                <li><a href="#">Sản phẩm bán chạy</a></li>
                <li><a href="#">Giảm giá theo ngày</a></li>
                <li class="uk-active"><a href="#">Khuyến mại sốc</a></li>
            </ul>
        </div>
        <!--/home__block01-->

        <div>
            <div class="home__item">
                <div class="home__blockBanner uk-overflow-auto">
                    <div class="uk-child-width-auto uk-flex-nowrap uk-child-width-1-3@m uk-grid-small home__blockBanner__grid" uk-grid>
                        <div class="home__blockBanner__column">
                            <div class="uk-cover-container uk-border-rounded home__blockBanner__img">
                                <img src="images/1x/banner1.jpg" alt="" uk-cover="">
                                <canvas width="390" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="home__blockBanner__column">
                            <div class="uk-cover-container uk-border-rounded home__blockBanner__img">
                                <img src="images/1x/banner2.jpg" alt="" uk-cover="">
                                <canvas width="390" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                        <div class="home__blockBanner__column">
                            <div class="uk-cover-container uk-border-rounded home__blockBanner__img">
                                <img src="images/1x/banner3.jpg" alt="" uk-cover="">
                                <canvas width="390" height="172"></canvas>
                                <a href="" class="uk-position-cover"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="danhmuc__section2 uk-section-xsmall uk-background-muted">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-20-m" uk-grid>
            <div class="uk-width-expand">
                <div class="danhmuc__card1 uk-card uk-card-body uk-card-default">
                    <div class="uk-margin">
                        <div class="uk-margin-small">
                            <div class="uk-grid-5 uk-grid-10-m uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 danhmuc__title">BÀN CHẢI RĂNG NGƯỜI LỚN</h1>
                                </div>
                                <div class="uk-width-auto@m">
                                    <ul class="uk-breadcrumb danhmuc__breadcrumb">
                                        <li><a href="">Trang chủ</a></li>
                                        <li><a href="">Ngành hàng nhà tắm</a></li>
                                        <li><span>Bàn chải đánh răng</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="danhmuc__card2 uk-padding-small uk-background-muted uk-border-rounded">
                                <div class="uk-grid-5 uk-grid-10-m uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="uk-grid-10 uk-flex-middle uk-child-width-auto" uk-grid>
                                            <div>
                                                <a class="danhmuc__icon" href="danhmuc_grid.php" uk-icon="icon: grid"></a>
                                            </div>
                                            <div>
                                                <a class="danhmuc__icon uk-active" href="danhmuc_list.php" uk-icon="icon: list"></a>
                                            </div>
                                            <div>
                                                <span class="danhmuc__txt1">Hiển thị 1–12 trong 86 kết quả</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto@s">
                                        <div class="uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                            <div>
                                                <span class="danhmuc__txt1">Sắp xếp</span>
                                            </div>
                                            <div>
                                                <div uk-form-custom="target: > * > span:first-child">
                                                    <select>
                                                        <option value="">Please select...</option>
                                                        <option value="1">Option 01</option>
                                                        <option value="2">Option 02</option>
                                                        <option value="3">Option 03</option>
                                                        <option value="4">Option 04</option>
                                                    </select>
                                                    <button class="danhmuc__btnfilter1 uk-button uk-border-rounded uk-background-default uk-button-default uk-button-small" type="button" tabindex="-1">
                                                        <span></span>
                                                        <span uk-icon="icon: chevron-down"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <?php for ($i=1;$i<=5;$i++): ?>
                        <div class="danhmuc__item">
                            <div class="uk-grid-small uk-grid-20-m" uk-grid uk-toggle="cls: uk-flex-middle; mode: media; media: @m">
                                <div class="uk-width-1-3@m uk-width-2-5">
                                    <div class="uk-cover-container home__card__img">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="500" height="500"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-grid-divider uk-flex-middle uk-grid-match" uk-grid uk-toggle="cls: uk-grid-small; mode: media; media: (max-width: 959.8px)">
                                        <div class="uk-width-expand">
                                            <div class="uk-margin-small">
                                                <h4 class="uk-h4 uk-margin-remove danhmuc__title1"><a href="">Bàn chải NAVI SUGOI</a></h4>
                                                <div class="home__card__boxRate">
                                                    <span class="home__card__boxRate__star uk-active"></span>
                                                    <span class="home__card__boxRate__star uk-active"></span>
                                                    <span class="home__card__boxRate__star uk-active"></span>
                                                    <span class="home__card__boxRate__star uk-active"></span>
                                                    <span class="home__card__boxRate__star uk-active"></span>
                                                </div>
                                            </div>
                                            <div class="uk-margin-small">
                                                <div class="line-clamp-4 danhmuc__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis commodo nisi, eu euismod justo. In hac habitasse platea dictumst. Nullam aliquam sapien non eros dapibus, quis eleifend urna cursus.</div>
                                            </div>
                                            <div class="uk-margin-small-top">
                                                <a href="" class="danhmuc__linkMore">Xem chi tiết »</a>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-3@m">
                                            <div class="home__card__item">
                                                <div class="home__card__price home__card__price--new">40.000đ</div>
                                                <div class="home__card__price home__card__price--old"><del>50.000đ</del></div>
                                            </div>
                                            <div class="home__card__item">
                                                <h4 class="uk-h4 uk-margin-remove home__card__title"><a href="">Bàn chải NAVI SUGOI</a></h4>
                                            </div>
                                            <div class="home__card__item">
                                                <a href="" style="opacity: 1" class="home__card__addCart uk-border-rounded uk-button uk-button-primary"><span>Thêm vào giỏ hàng</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="uk-margin-top">
                        <div class="danhmuc__card2 uk-padding-small uk-background-muted uk-border-rounded">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <ul class="uk-pagination uk-grid-5 danhmuc__pagination" uk-grid uk-margin>
                                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="uk-disabled"><span>...</span></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li class="uk-active"><span>7</span></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">9</a></li>
                                        <li><a href="#">10</a></li>
                                        <li class="uk-disabled"><span>...</span></li>
                                        <li><a href="#">20</a></li>
                                        <li><a href="#"><span uk-pagination-next></span></a></li>
                                    </ul>
                                </div>
                                <div class="uk-width-auto@s">
                                    <div class="uk-child-width-auto uk-grid-5 uk-flex-middle" uk-grid>
                                        <div>
                                            <span class="danhmuc__txt1">Hiển thị</span>
                                        </div>
                                        <div>
                                            <div uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="1">1</option>
                                                    <option value="12" selected>12</option>
                                                </select>
                                                <button class="danhmuc__btnfilter1 uk-button uk-border-rounded uk-background-default uk-button-default uk-button-small" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="danhmuc__txt1">/trang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m uk-flex-first@m">
                <?php require "template-parts/layouts/sidebar.php"; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>