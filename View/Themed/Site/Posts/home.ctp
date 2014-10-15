<?php
setlocale(LC_MONETARY, 'vi_VN')
?>
<div class="row">
    <div class="col-lg-12 feature">
        <div class="row">
            <div class="well-sm div-text-run">
                <i class="glyphicon glyphicon-arrow-left f-left"></i>
                <span class="top-text-run">Chiêm ngưỡng mùa thu trong nước. Khởi hành từ TP.HCM và Hà Nội.</span>
                <i class="glyphicon glyphicon-arrow-right f-right"></i>
            </div>
        </div>
        <div class="row">
            <h2 class="feature-title">TIÊU ĐIỂM</h2>
        </div>
        <div class="row">
            <?php
            foreach ($features as $feature) {
                $post_metas = Set::combine($feature['Postmetum'], '{n}.meta_key', '{n}');
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <a href="<?php
                        echo $this->Html->url(
                            array(
                                'controller' => 'posts',
                                'action' => 'view',
                               $feature['Post']['type'],
                                'url'=>$feature['Post']['url']
                            )
                        );
                        ?>" title="<?php echo $feature['Post']['title'] ?>">
                            <img
                                src="<?php echo '/'.$this->Image->resizedUrl($post_metas['thumbnail']['meta_value'], 235, 150, 100, WWW_ROOT); ?>"
                                alt="<?php echo $feature['Post']['title'] ?>">
                        </a>

                        <div class="caption">
                            <a href="<?php
                            echo $this->Html->url(
                                array(
                                    'controller' => 'posts',
                                    'action' => 'view',
                                     $feature['Post']['type'],
                                    'url'=>$feature['Post']['url']
                                )
                            );
                            ?>" title="<?php echo $feature['Post']['title'] ?>">
                                <h3 class="feature-title"><?php echo $feature['Post']['title'] ?></h3>
                            </a>

                            <p><span
                                    class="price-text"><?php echo money_format('%.0n', $post_metas['price']['meta_value']) ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</div>
<div class="row">
    <h2 class="feature-title-ct">DỊCH VỤ THUÊ XE</h2>
</div>
<div class="row">
    <div class="col-md-9 p-zero">
        <div c<?php
        foreach ($cars as $key => $post) {
            $post_metas = Set::combine($post['Postmetum'], '{n}.meta_key', '{n}');
            ?>
            <div class="col-sm-6 col-md-4 p-zero">
                <div class="thumbnail">
                    <a href="<?php
                    echo $this->Html->url(
                        array(
                            'controller' => 'posts',
                            'action' => 'view',
                            $post['Post']['type'],
                            'url'=>$post['Post']['url']
                        )
                    );
                    ?>">
                        <img
                            src="<?php echo '/'.$this->Image->resizedUrl($post_metas['thumbnail']['meta_value'], 235, 150, 100, WWW_ROOT); ?>"
                            alt="<?php echo $post['Post']['title'] ?>">
                    </a>

                    <div class="caption">
                        <a href="<?php
                        echo $this->Html->url(
                            array(
                                'controller' => 'posts',
                                'action' => 'view',
                                $post['Post']['type'],
                                'url'=>$post['Post']['url']
                            )
                        );
                        ?>"><h3><?php echo $post['Post']['title'] ?></h3></a>

                        <p><strong>Đời xe:</strong> <?php echo $post_metas['modem']['meta_value']; ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
    <div class="col-md-3 p-zero">
		<?php echo $this->element('home_ads_1')?>
	</div>
</div>
<div class="row">
    <div class="col-md-9 p-zero">
        <div class="col-lg-6 p-zero">
            <h2 class="feature-title-ct">TOUR HẰNG NGÀY</h2>
            <hr>
            <ul class="list-es">
                <?php
                foreach ($top_daily as $post) {
                ?>
                    <li><a href="<?php
                        echo $this->Html->url(
                            array(
                                'controller'=>'posts',
                                'action'=>'view',
                                $post['Post']['type'],
                                'url'=>$post['Post']['url']
                            )
                        );
                        ?>" class="link-level4" title="<?php echo $post['Post']['title'];?>">
                            <i class="glyphicon glyphicon-asterisk"></i><?php echo $post['Post']['title'];?>
                        </a></li>
                <?php
                }
                ?>
            </ul>
            <a class="link-level4" href="<?php
            echo $this->Html->url(
                array(
                    'controller'=>'posts',
                    'action'=>'index',
                    'daily_tour'
                )
            );
            ?>">Xem thêm</a>
        </div>
        <div class="col-lg-6 p-zero">
            <h2 class="feature-title-ct">TOUR HẰNG TUẦN</h2>
            <hr>
            <ul class="list-es">
                <?php
                foreach ($top_weekly as $post) {
                ?>
                    <li><a href="<?php
                        echo $this->Html->url(
                            array(
                                'controller'=>'posts',
                                'action'=>'view',
                                $post['Post']['type'],
                                'url'=>$post['Post']['url']
                            )
                        );
                        ?>" class="link-level4" title="<?php echo $post['Post']['title'];?>">
                            <i class="glyphicon glyphicon-asterisk"></i><?php echo $post['Post']['title'];?>
                        </a></li>
                <?php
                }
                ?>
            </ul>
            <a class="link-level4" href="<?php
            echo $this->Html->url(
                array(
                    'controller'=>'posts',
                    'action'=>'index',
                    'weekly_tour'
                )
            );
            ?>">Xem thêm</a>
        </div>
    </div>
    <div class="col-md-3 p-zero">
		<?php echo $this->element('home_ads_2')?>
    </div>
</div>