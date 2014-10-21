<?php
setlocale(LC_MONETARY, 'vi_VN');
$post_metas = Set::combine($tour['Postmetum'], '{n}.meta_key', '{n}');
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
                    <h2>Chi tiết dịch vụ</h2>
                    <hr>
                    <ul class="ul-list-style-none tour-right-details">
                        <li>
                            <h3>Tên tour</h3>
                            <h4 class="p-l-15"><i
                                    class="glyphicon glyphicon-arrow-right"></i> <?php echo $tour['Tour']['title'] ?>
                            </h4>
                        </li>
                        <li>
                            <h3>Ngày khởi hành</h3>
                            <span class="date-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php echo date('d-m-Y', $booking_date); ?>
                                </h4></span>
                        </li>
                        <li><h3>Giá tour khách trong nước</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php echo money_format('%.0n', $post_metas['price']['meta_value']); ?>
                                </h4></span>
                        </li>
                        <li><h3>Giá tour khách nước ngoài</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php echo money_format('%.0n', $post_metas['price_translate']['meta_value']); ?>
                                </h4></span>
                        </li>
                        <li><h3>Số người lớn dự tính</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['adults']; ?>
                                </h4></span>
                        </li>
                        <li><h3>Số trẻ em dự tính</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['childs']; ?>
                                </h4></span>
                        </li>
                        <li><h3>Yêu cầu đi kèm</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['special_requirements']; ?>
                                </h4></span>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-r-15">
                    <h2>Thông tin liên hệ</h2>
                    <hr>
                    <ul class="ul-list-style-none tour-right-details">
                        <li>
                            <h3>Họ tên</h3>
                            <h4 class="p-l-15"><i
                                    class="glyphicon glyphicon-arrow-right"></i> <?php
                                echo $this->request->data['TourBooking']['name'] ;?>
                            </h4>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <span class="date-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['email']; ?>
                                </h4></span>
                        </li>
                        <li><h3>Số điện thoại</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['phone']; ?>
                                </h4></span>
                        </li>
                        <li><h3>Số điện thoại thay thế</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['phone1']; ?>
                                </h4></span>
                        </li>
                        <li><h3>Số điện thoại thay thế</h3>
                            <span class="price-text"><h4 class="p-l-15"><i
                                        class="glyphicon glyphicon-arrow-right"></i> <?php
                                    echo $this->request->data['TourBooking']['address']; ?>
                                </h4></span>
                        </li>
                        <li>
                            <?php echo $this->Form->create('TourBooking'); ?>
                            <?php
                            echo $this->Form->hidden('name');
                            echo $this->Form->hidden('email');
                            echo $this->Form->hidden('phone');
                            echo $this->Form->hidden('phone1');
                            echo $this->Form->hidden('address');
                            echo $this->Form->hidden('tour_schedule_id', array('value' => $post_id));
                            echo $this->Form->hidden('tour_date', array('value' => date('Y-m-d', $booking_date)));
                            echo $this->Form->hidden('adults');
                            echo $this->Form->hidden('childs');
                            echo $this->Form->hidden('special_requirements');
                            echo $this->Form->hidden('price', array('value' => $post_metas['price']['meta_value']));
                            echo $this->Form->hidden('t_price', array('value' => $post_metas['price_translate']['meta_value']));
                            echo $this->Form->hidden('P.accept',array('value'=>1));
                            echo $this->Form->submit(__('Chấp nhận'), array('class' => 'btn btn-primary'));
                            ?>
                            <?php echo $this->Form->end(); ?>
                        </li>

                    </ul>
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
