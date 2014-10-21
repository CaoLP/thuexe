<?php
setlocale(LC_MONETARY, 'vi_VN');
$post_metas = Set::combine ($tour['Postmetum'], '{n}.meta_key', '{n}');
?>
<div class="col-md-9 p-zero">
    <div class="row">
        <div class="col-md-12 p-r-15">
            <h2 class="feature-title-tour f-left">ĐẶT TOUR</h2>

            <img class="f-right" src="/img/call.png" width="239"
                 height="50" alt="Goi tu van">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-r-15">
            <div class="row">
                <div class="col-md-12 p-r-15">

                    <div class="text-center">
                        <h2>Hoàn tất đặt tour</h2>
                        <hr>
                        <p>Cám ơn bạn đã sử dụng dịch vụ của chúng tôi.</p>

                        <p>Các thông tin này đã được chuyển đến hệ thống của <?php echo Configure::read('W.Site.name');?>.</p>

                        <p>Chúng tôi sẽ trả lời bạn trong thời gian sớm nhấ.</p>

                        <p><strong>Mọi thắc mắc xin liên hệ :</strong></p>
                        <?php echo Configure::read('W.Site.help_phone');?>
                        <br>
                            <br>
                            <a href="/">[trở về trang chủ]</a></p>
                    </div>
                </div>
            </div>

            <hr>
        </div>
    </div>
</div>
<div class="col-md-3 p-zero">
    <?php echo $this->element('home_ads_1') ?>
    <?php echo $this->element('home_ads_2') ?>
</div>
