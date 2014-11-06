<?php
setlocale(LC_MONETARY, 'vi_VN');
?>
<?php
$post_metas = Set::combine($post['Postmetum'], '{n}.meta_key', '{n}');
$images = array($post_metas['thumbnail']['meta_value']);
$temp_img = explode(';', $post_metas['images']['meta_value']);
$temp_img = array_filter($temp_img);
if (count($temp_img) > 0) $images = $temp_img;
?>
<div class="row">
    <div class="col-md-12 p-r-15">
        <a href="<?php echo $this->Html->url(array('controller' => 'posts', 'action' => 'index', $type));
        ?>">
            <h3 class="f-left"><?php echo $post['Post']['title']; ?></h3>
        </a>
    </div>
</div>
<div class="col-md-9 p-zero">

    <div class="row">
        <?php if (!empty($post['Post']['excerpt'])): ?>
            <div class="col-md-12 p-r-15">
                <blockquote>
                    <div class="excerpt-info"><?php echo $post['Post']['excerpt']; ?></div>
                </blockquote>
            </div>
        <?php endif; ?>
        <?php echo $this->element('fb'); ?>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12 p-r-15">
            <?php
            echo $post['Post']['body'];
            ?>
        </div>
    </div>
    <?php
    echo $this->element('contact_info');
    ?>
</div>
<div class="col-md-3 p-zero">
    <div class="panel panel-default tour-right-panel">
        <!-- Default panel contents -->
        <div class="panel-heading header-style">Thông tin tư vấn</div>
        <div class="panel-body">

            <ul class="ul-list-style-none tour-right-details">
                <li><strong>Tư vấn:</strong><span
                        class="f-right date-text"><?php echo Configure::read('W.Site.help_phone'); ?></span></li>
                <li><br></li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller' => 'contacts', 'action' => 'contact')) ?>"><img
                            src="/img/contact_sm.png" width="239" height="50"></a>
                </li>
            </ul>
        </div>

    </div>
    <?php echo $this->element('home_ads_1') ?>
    <?php echo $this->element('home_ads_2') ?>
</div>
