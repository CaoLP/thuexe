<?php
setlocale(LC_MONETARY, 'vi_VN');
$post_metas = Set::combine ($tour['Postmetum'], '{n}.meta_key', '{n}');
?>
<div class="col-md-9 p-zero">
    <div class="row">
        <div class="col-md-12 p-r-15">
            <h2 class="feature-title-tour f-left">ĐẶT TOUR</h2>

            <img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
                 height="50" alt="Goi tu van">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-r-15">
            <div class="row">
                <div class="col-md-12 p-r-15">
                    <h2>Chi tiết dịch vụ</h2>
                    <hr>
                    <ul class="ul-list-style-none tour-right-details">
                        <li>
                            <h3>Tên tour</h3>
                            <h4 class="p-l-15"><i class="glyphicon glyphicon-arrow-right"></i> <?php echo $tour['Tour']['title']?></h4>
                        </li>
                        <li>
                            <h3>Ngày khởi hành</h3>
                            <span class="date-text"><h4 class="p-l-15"><i class="glyphicon glyphicon-arrow-right"></i> <?php echo date('d-m-Y',$booking_date);?></h4></span>
                        </li>
                        <li><h3>Giá tour khách trong nước</h3>
                            <span class="price-text"><h4 class="p-l-15"><i class="glyphicon glyphicon-arrow-right"></i> <?php echo money_format ('%.0n', $post_metas['price']['meta_value']);?></h4></span>
                        </li>
                        <li><h3>Giá tour khách nước ngoài</h3>
                            <span class="price-text"><h4 class="p-l-15"><i class="glyphicon glyphicon-arrow-right"></i> <?php echo money_format ('%.0n', $post_metas['price_translate']['meta_value']);?></h4></span>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-r-15">
                    <h2>Thông tin liên hệ</h2>
                    <hr>
                </div>

                <?php echo $this->Form->create('TourBooking', array('class' => 'form-horizontal')); ?>
                <div class="col-md-5">
                    <?php
                    $this->Form->inputDefaults(array(
                        'div' => array('class' => 'form-group'),
                        'class' => 'form-control'
                    ));

                    echo $this->Form->input('name', array('label' => array('text' => 'Tên')));
                    echo $this->Form->input('email');
                    echo $this->Form->input('phone', array('label' => array('text' => 'Số điện thoại')));
                    echo $this->Form->input('phone1', array('label' => array('text' => 'Số điện thoại thay thế')));
                    echo $this->Form->input('address', array('label' => array('text' => 'Địa chỉ')));
                    ?>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <?php
                    echo $this->Form->hidden('tour_schedule_id', array('value' => $post_id));
                    echo $this->Form->hidden('tour_date', array('value' => date('Y-m-d', $booking_date)));
                    echo $this->Form->input('adults', array('label' => array('text' => 'Số người lớn dự tính')));
                    echo $this->Form->input('childs', array('label' => array('text' => 'Số trẻ em dự tính')));
                    echo $this->Form->input('special_requirements', array('label' => array('text' => 'Yêu cầu đi kèm')));
                    echo $this->Form->hidden('price', array('value' => $post_metas['price']['meta_value']));
                    echo $this->Form->hidden('t_price', array('value' => $post_metas['price_translate']['meta_value']));
                    echo $this->Form->submit(__('Đặt tour'), array('class' => 'pull-right btn btn-primary'));
                    ?>

                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <hr>
        </div>
    </div>
</div>
<div class="col-md-3 p-zero">
    <?php echo $this->element('home_ads_1') ?>
    <?php echo $this->element('home_ads_2') ?>
</div>
