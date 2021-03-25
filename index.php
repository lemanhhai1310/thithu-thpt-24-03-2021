<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-background-norepeat uk-background-cover" uk-height-viewport="offset-bottom: true" data-src="images/bg01.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-text-center mb-20 mb-38-m">
            <img src="images/logo1.png" alt="">
        </div>
        <div class="uk-child-width-1-2@m uk-flex-between@m" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-flex-center mb-20 mb-25-m" uk-grid>
                    <div class="uk-width-2-3 uk-width-3-5@m">
                        <div class="uk-text-center">
                            <img src="images/_Image_.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="uk-flex-center uk-margin-remove-top" uk-grid>
                    <div class="uk-width-auto">
                        <ul class="uk-list uk-margin-remove home__block04__list">
                            <li>Đề thi thử THPT môn Toán</li>
                            <li>Đề thi thử THPT môn Vật Lý</li>
                            <li>Đề thi thử THPT môn Hoá Học</li>
                            <li>Đề thi thử THPT môn Sinh Học</li>
                            <li>Đề thi thử THPT môn Anh Văn</li>
                        </ul>
                    </div>
                </div>
                <div class="uk-text-center">
                    <img src="images/bg02.png" alt="">
                </div>
            </div>
            <div class="uk-width-2-5@m">
                <div class="uk-section-xsmall uk-padding-remove-top">
                    <div class="uk-position-relative home__block04__box2">
                        <div class="uk-card uk-card-default uk-card-body home__block04__box1">
                            <form>
                                <fieldset class="uk-fieldset">
                                    <legend class="uk-legend uk-text-center home__block04__box1__title">ĐĂNG KÝ THI THỬ</legend>
                                    <div class="uk-margin-small">
                                        <input class="uk-input home__block04__box1__input" type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="uk-margin-small">
                                        <input class="uk-input home__block04__box1__input" type="text" placeholder="Điện thoại">
                                    </div>
                                    <div class="uk-margin-small">
                                        <input class="uk-input home__block04__box1__input" type="text" placeholder="Email">
                                    </div>
                                    <div class="uk-margin-small">
                                        <input class="uk-input home__block04__box1__input" type="text" placeholder="Tỉnh / Thành phố">
                                    </div>
                                    <div class="uk-margin-small">
                                        <label class="uk-form-label home__block04__box1__label" for="form-stacked-text">Môn học đăng ký thi thử</label>
                                        <div class="uk-form-controls">
                                            <div class="uk-grid-10 uk-child-width-1-3 uk-grid">
                                                <label><input class="uk-checkbox" type="checkbox"> <span class="home__block04__box1__txt">Toán</span></label>
                                                <label><input class="uk-checkbox" type="checkbox"> <span class="home__block04__box1__txt">Vật Lý</span></label>
                                                <label><input class="uk-checkbox" type="checkbox"> <span class="home__block04__box1__txt">Hoá Học</span></label>
                                                <label><input class="uk-checkbox" type="checkbox"> <span class="home__block04__box1__txt">Sinh Học</span></label>
                                                <label><input class="uk-checkbox" type="checkbox"> <span class="home__block04__box1__txt">Văn</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center">
                                        <div class="uk-position-relative block01__btnSubmit__box1 uk-display-inline-block animation">
                                            <button type="button" class="uk-button block01__btnSubmit uk-button-secondary uk-border-rounded">ĐĂNG KÝ NGAY</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ĐỀ THI DO THÂY CÔ TRƯỜNGCHUYÊN VĨNH PHÚC - VĨNH PHÚC BIÊN SOẠN-->
<div class="uk-section-small home__block03 uk-light">
    <div class="uk-container">
        <div class="mb-20 mb-47-m">
            <h2 class="uk-h2 home__title uk-margin-remove uk-text-center uk-text-uppercase">ĐỀ THI DO THÂY CÔ TRƯỜNG
                <br class="uk-visible@m"> CHUYÊN VĨNH PHÚC - VĨNH PHÚC BIÊN SOẠN</h2>
        </div>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex-center uk-grid-small uk-grid-60-m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/monhoc/img1.png',
                    'title' => 'TOÁN',
                    'desc' => '',
                ),
                array(
                    'src' => 'images/monhoc/img2.png',
                    'title' => 'VẬT LÝ',
                    'desc' => '',
                ),
                array(
                    'src' => 'images/monhoc/img3.png',
                    'title' => 'HOÁ HỌC',
                    'desc' => '',
                ),
                array(
                    'src' => 'images/monhoc/img4.png',
                    'title' => 'SINH HỌC',
                    'desc' => '',
                ),
                array(
                    'src' => 'images/monhoc/img5.png',
                    'title' => 'ANH VĂN',
                    'desc' => '',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div class="home__block03__column">
                <div class="uk-text-center home__block03__box1">
                    <div class="mb-5">
                        <div class="uk-cover-container uk-display-inline-block uk-border-circle">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                            <canvas width="166" height="166"></canvas>
                        </div>
                    </div>
                    <div class="uk-text-uppercase mb-9 home__block03__box1__title"><?= $v['title'] ?></div>
                    <div>
                        <div class="uk-position-relative block01__btnSubmit__box1 uk-display-inline-block animation">
                            <button type="button" class="uk-button block01__btnSubmit uk-button-secondary uk-border-rounded">ĐĂNG KÝ VÀO THI</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/ĐỀ THI DO THÂY CÔ TRƯỜNGCHUYÊN VĨNH PHÚC - VĨNH PHÚC BIÊN SOẠN-->

<!--CON SỐ ẤN TƯỢNG VỀ ĐẠI HỌC FPT-->
<div class="home__block02 uk-background-norepeat uk-light uk-position-relative uk-background-cover uk-background-center-center" data-src="images/ARTS1218.jpg" uk-img>
    <div class="uk-position-cover uk-overlay uk-overlay-primary"></div>
    <div class="uk-position-relative uk-position-z-index uk-section">
        <div class="uk-container uk-container-small">
            <div class="mb-20 mb-60-m">
                <h2 class="uk-h2 home__title uk-margin-remove uk-text-center uk-text-uppercase">CON SỐ ẤN TƯỢNG VỀ ĐẠI HỌC FPT</h2>
            </div>
            <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small uk-grid-62-m" uk-grid>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    SINH VIÊN <br> <span>LÀM VIỆC THỰC TẾ</span> <br> TỪ NĂM THỨ 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    CÓ CƠ HỘI <br> TRẢI NGHIỆM <br> <span>HỌC KỲ Ở NƯỚC NGOÀI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    SINH VIÊN <br> <span>HỌC TẬP BẰNG <br> TIẾNG ANH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__block02__box1 uk-cover-container uk-border-rounded uk-text-center uk-overflow-hidden">
                        <canvas width="300" height="300"></canvas>
                        <div class="uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle">
                            <div>
                                <div class="home__block02__box1__txt1">100%</div>
                                <div class="home__block02__box1__txt2">
                                    SINH VIÊN ĐƯỢC <br> <span>NHÀ <br> TUYỂN DỤNG <br> CHÀO ĐÓN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/CON SỐ ẤN TƯỢNG VỀ ĐẠI HỌC FPT-->

<!--ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC FPT NGAY-->
<?php require "template-parts/layouts/block01.php"; ?>
<!--/ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC FPT NGAY-->

<!--GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC-->
<div class="uk-section-small home__block01">
    <div class="uk-container">
        <div class="mb-20 mb-51-m">
            <h2 class="uk-h2 home__title uk-margin-remove uk-text-center uk-text-uppercase">GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC</h2>
        </div>
        <div class="home__block01__box2" uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
            <div uk-toggle="cls: uk-flex-nowrap; mode: media; media: (max-width: 959px)" class="uk-grid-small uk-grid-30-m uk-child-width-1-5@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'cls' => 'fz1',
                        'src' => 'images/box1/img1.png',
                        'title' => 'TOP 200',
                        'desc' => 'Troờng Đại học đào tạo
Quản trị Kinh doanhtốt nhất thế giới(Eduinversal xếp hạng)',
                    ),
                    array(
                        'cls' => 'fz2',
                        'src' => 'images/box1/img2.png',
                        'title' => 'CHẤT LƯỢNGGIÁO DỤC QUỐC GIA',
                        'desc' => 'Đạt kiểm định chất lượng
Đại học FPT đoợc tự chủ
trong mở ngành và
liên kết đào tạo',
                    ),
                    array(
                        'cls' => 'fz1',
                        'src' => 'images/box1/img3.png',
                        'title' => 'Sao Khuê',
                        'desc' => 'Nhiều năm liền đạt
giải thưởng Sao Khuê
uy tín cho đơn vị đào tạoCNTT hệ Chính quy xuất sắc',
                    ),
                    array(
                        'cls' => 'fz2',
                        'src' => 'images/box1/img4.png',
                        'title' => 'ASOCIOAward 2018',
                        'desc' => 'Troờng Đại học đào tạo
Công nghệ Thông tin
xuất sắc tại Châu Á',
                    ),
                    array(
                        'cls' => 'fz3',
                        'src' => 'images/box1/img5.png',
                        'title' => 'TOP 2',
                        'desc' => 'Troờng Đại học đào tạo
Quản trị Kinh doanhtốt nhất Việt Nam(Eduniversal xếp hạng
số 1 năm 2020)',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-flex uk-flex-column uk-text-center home__block01__box1">
                            <div class="mb-15">
                                <div class="home__block01__box1__img uk-flex uk-flex-center uk-flex-middle">
                                    <img class="uk-responsive-height uk-responsive-width" src="<?= $v['src'] ?>" alt="">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-center uk-flex-middle mb-10" style="min-height: 49px;">
                                <div class="home__block01__box1__title <?= $v['cls'] ?>"><?= $v['title'] ?></div>
                            </div>
                            <div class="uk-flex-1">
                                <span class="home__block01__box1__desc"><?= $v['desc'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/GIẢI THƯỞNG, DANH HIỆU ĐẠI HỌC FPT ĐẠT ĐƯỢC-->

<!--top50-->
<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .animation; delay: 300; repeat: true" uk-toggle="cls: uk-flex-bottom; mode: media; media: @m" class="home__block05 uk-section uk-flex uk-padding-remove-bottom uk-overflow-hidden uk-background-norepeat uk-background-top-center uk-background-image@m" style="min-height: 442px" data-src="images/bg1.png" uk-img>
    <div class="uk-width-1-1">
        <div class="uk-container uk-container-small">
            <div class="uk-flex-bottom" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-text-center home__block05__box1" uk-toggle="cls: uk-section-small; mode: media; media: @m">
                        <div class="uk-position-relative block01__btnSubmit__box1 uk-display-inline-block animation">
                            <button type="button" class="uk-button block01__btnSubmit uk-button-secondary uk-border-rounded">ĐĂNG KÝ NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-flex-center" uk-grid>
                        <div class="uk-width-3-5 uk-width-1-1@m">
                            <div class="uk-position-relative uk-visible@m">
                                <img class="animation" uk-toggle="cls: uk-position-bottom; mode: media; media: @m" style="bottom: -89px;" src="images/Layer1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/top50-->

<?php require "template-parts/layouts/footer.php"; ?>