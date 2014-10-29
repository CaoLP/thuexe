<?php
$edit = true;
if (!isset($arrayFields)) {
    $arrayFields = array(
        'startlocate' => 0,
        'price' => 1,
        'price_translate' => 2,
        'start_date' => 3,
        'total_days' => 4,
        'total_nights' => 5,
        'transport' => 6,
        'more_info' => 7,
        'price_info' => 8,
        'thumbnail' => 9,
        'images' => 10
    );
    $edit = false;
}
?>
<script>
    var url = '<?php echo $this->Html->url(array(
				'plugin'=>'el_finder',
				'controller'=>'el_finder',
				'action' =>'browse'
			));?>'
</script>
<?php
$this->Html->addCrumb($title_for_layout, array('action' => 'index',$type));
if ($this->request->params['action'] == 'admin_add') {

    $this->Html->addCrumb((isset($typeName) ? $$typeName : __('New Post')), '/' . $this->request->url);
} else {
    $this->Html->addCrumb($this->request->data['Post']['title'], '/' . $this->request->url);
}
echo $this->Html->css(
    array(
        '/ElFinder/elfinder/css/elfinder.min',
        '/ElFinder/elfinder/css/theme'
    ), array('inline' => false)
);
echo $this->Html->script(array(
    'jquery.browser',
    '/ElFinder/elfinder/js/elfinder.min'
), array('inline' => false));

$this->Html->scriptStart(array('inline' => false));
?>
$(document).ready(function () {
$('.choice-img').on('click', function () {
var elfinderDialog = $("#elfinder-dialog").modal('show');
var f = $('#elfinder-container').elfinder({
url: '<?php echo $this->Html->url(array(
    'plugin' => 'el_finder',
    'controller' => 'el_finder',
    'action' => 'connector'
));?>',
handlers: {
dblclick: function (event, elfinderInstance) {
event.preventDefault();
fileInfo = elfinderInstance.file(event.data.file);

if (fileInfo.mime != 'directory') {
//                        callback( elfinderInstance.url(event.data.file) ); // get file path..
$('#picInput').val(elfinderInstance.url(event.data.file));
$('#thumbail').html('<img class="img-thumbnail img-responsive" src="'+elfinderInstance.url(event.data.file)+'">');
elfinderInstance.destroy();
return false; // stop elfinder
}
},
destroy: function (event, elfinderInstance) {
elfinderDialog.modal('hide');
}
}
}).elfinder('instance');
});
$('.multiselect').multiselect();

var imgData = $('#picInput').val();
$('#thumbail').html('<img class="img-thumbnail img-responsive" src="'+imgData+'">');

});
<?php
$this->Html->scriptEnd();
?>
<?php
$this->Html->scriptStart(array('inline' => false));
?>
$(document).ready(function () {
$('#select-img-list').on('click', function () {
var elfinderDialog = $("#elfinder-dialog").modal('show');
var f = $('#elfinder-container').elfinder({
url: '<?php echo $this->Html->url(array(
    'plugin' => 'el_finder',
    'controller' => 'el_finder',
    'action' => 'connector'
));?>',
handlers: {
dblclick: function (event, elfinderInstance) {
event.preventDefault();
fileInfo = elfinderInstance.file(event.data.file);

if (fileInfo.mime != 'directory') {
//                        callback( elfinderInstance.url(event.data.file) ); // get file path..
var lst = $('#image-list-input').val();
$('#image-list-input').val(lst + ';' + elfinderInstance.url(event.data.file));
$('#image-list').html($('#image-list').html() +
'<li class="col-md-2">' +
    '<img class="img-thumbnail img-responsive" src="' + elfinderInstance.url(event.data.file) + '">' +
    '<a href="javascript:;" class="rm-img">Remove</a>' +
    '</li>');
elfinderInstance.destroy();
return false; // stop elfinder
}
},
destroy: function (event, elfinderInstance) {
elfinderDialog.modal('hide');
}
}
}).elfinder('instance');
});

$(document).on('click','.rm-img',function(){
$(this).closest('li').remove();
var imglist = "";
$('#image-list li').each(function(){
imglist+= ';'+$(this).find('img').attr('src');
});
$('#image-list-input').val(imglist);
});
});
<?php
$this->Html->scriptEnd();
?>
<div class="col-md-9">
    <div class="widget stacked ">
        <div class="widget-header">
            <i class="icon-user"></i>

            <h3><?php echo isset($title_for_layout) ? $title_for_layout : 'Post'; ?></h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#posts" data-toggle="tab"><?php echo __('Contents'); ?></a>
                    </li>
					<li class="">
						<a href="#seo" data-toggle="tab"><?php echo __('Seo'); ?></a>
					</li>
                </ul>
                <br>

                <div class="tab-content">
                    <div class="tab-pane active" id="posts">
                        <div class="posts">
                            <?php echo $this->Form->create('Post', array('class' => 'col-md-12')); ?>
                            <?php

                            echo $this->Form->hidden('id');
                            foreach ($arrayFields as $val) {
                                $id = '';
                                if (isset($this->request->data['Post']['id'])) {
                                    $id = $this->request->data['Post']['id'];
                                };
                                if ($edit)
                                    echo $this->Form->hidden('Postmetum.' . $val . '.id', array('value' => $val));
                                echo $this->Form->hidden('Postmetum.' . $val . '.post_id', array('value' => $id));
                            }
                            $this->Form->inputDefaults(array(

                                'div' => array('class' => 'form-group'),

                                'class' => 'form-control'

                            ));
                            echo $this->Form->input('title');
                            echo $this->Form->input('url', array('class' => 'form-control slug'));
                            //                            echo $this->Form->input('parent_id',array('label'=>array('text'=>'M?c cha')));
                            echo $this->Form->hidden('status', array('value' => 1));
                            echo $this->Form->hidden('type', array('value' => $type));

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['startlocate'] . '.meta_key',
                                array('value' => 'startlocate'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['startlocate'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Điểm xuất phát'),
                                    'type' => 'text',
                                    'required' => true
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['price'] . '.meta_key',
                                array('value' => 'price'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['price'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Giá tiền'),
                                    'type' => 'number',
                                    'required' => true
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['price_translate'] . '.meta_key',
                                array('value' => 'price_translate'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['price_translate'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Giá tiền khách quốc tế'),
                                    'type' => 'number',
                                    'required' => true
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['start_date'] . '.meta_key',
                                array('value' => 'start_date'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['start_date'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Khởi hành'),
                                    'class' => 'form-control multiselect',
                                    'multiple' => 'multiple',
                                    'options' => $days_viet,
                                    'required' => true
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['total_days'] . '.meta_key',
                                array('value' => 'total_days'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['total_days'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Số ngày'),
                                    'class' => 'form-control multiselect',
                                    'options' => $days_vi,
                                    'required' => true
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['total_nights'] . '.meta_key',
                                array('value' => 'total_nights'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['total_nights'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Số đêm'),
                                    'class' => 'form-control multiselect',
                                    'options' => $nights_vi,
                                    'empty' => '--Chọn đêm--'
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['transport'] . '.meta_key',
                                array('value' => 'transport'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['transport'] . '.meta_value',
                                array('label' => array('text' => 'Phương tiện'), 'type' => 'text'));


                            echo $this->Form->input('excerpt', array('label' => array('text' => 'Mô tả ngắn')));
                            echo $this->Form->input('body', array('label' => array('text' => 'Nội dung')));

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['more_info'] . '.meta_key',
                                array('value' => 'more_info'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['more_info'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Thông tin điều khoản'),
                                    'class' => 'form-control editor'
                                )
                            );

                            echo $this->Form->hidden('Postmetum.' . $arrayFields['price_info'] . '.meta_key',
                                array('value' => 'price_info'));
                            echo $this->Form->input('Postmetum.' . $arrayFields['price_info'] . '.meta_value',
                                array(
                                    'label' => array('text' => 'Thông tin giá tour'),
                                    'class' => 'form-control editor'
                                )
                            );
                            ?>
                            <?php if (isset($arrayFields['images'])): ?>
                                <div class="form-group">
                                    <label for="">Hình ảnh</label>
                                    <?php
                                    echo $this->Form->hidden('Postmetum.' . $arrayFields['images'] . '.meta_key',
                                        array('value' => 'images'));
                                    echo $this->Form->hidden('Postmetum.' . $arrayFields['images'] . '.meta_value',array('id'=>'image-list-input'));
                                    ?>
                                    <a href="javascript:;" id="select-img-list" class="btn btn-primary form-control">Thêm
                                        hình ảnh</a>

                                    <ul id="image-list" class="gallery-container">
                                        <?php
                                        if(isset($this->request->data['Postmetum'][$arrayFields['images']]['meta_value'])){
                                            $images = $this->request->data['Postmetum'][$arrayFields['images']]['meta_value'];
                                            $images = explode(';', $images);
                                            $images = array_filter($images);
                                            foreach ($images as $image) {
                                                echo '
                                            <li class="col-md-2">
                                            <img class="img-thumbnail img-responsive" src="' . $image . '">
                                            <a href="javascript:;"  class="rm-img">Remove</a>
                                            </li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
					<div class="tab-pane" id="seo">
						<?php
						if(isset($this->request->data['Seo']['id']))
							echo $this->Form->hidden('Seo.id');
						echo $this->Form->hidden('Seo.post_id', array('value' =>$this->request->data['Post']['id']));
						echo $this->Form->input('Seo.meta_keywords');
						echo $this->Form->input('Seo.meta_description');
						echo $this->Form->input('Seo.meta_robots');
						echo $this->Form->input('Seo.changefreq');
						echo $this->Form->input('Seo.priority');
						?>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="widget widget-plain">
        <div class="widget-content">
            <div class="form-group">
                <?php echo $this->Form->button('Save', array('class' => 'btn btn-primary btn-support-ask form-control')); ?>
            </div>
        </div>
        <!-- /widget-content -->
    </div>
    <!-- /widget -->
    <div class="widget stacked widget-box">

        <div class="widget-header">
            <h3>Hình đại diện</h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div id="thumbail"></div>
            <?php
            echo $this->Form->hidden('Postmetum.' . $arrayFields['thumbnail'] . '.meta_key',
                array('value' => 'thumbnail'));
            echo $this->Form->hidden('Postmetum.' . $arrayFields['thumbnail'] . '.meta_value', array('id' => 'picInput'));
            ?>
            <a href="javascript:;" class="choice-img">Chọn ảnh</a>
        </div>
        <!-- /widget-content -->

    </div>
</div>
<?php echo $this->Form->end(); ?>
<!-- Add this html to your page -->
<div class="modal fade" id="elfinder-dialog" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-original-title="">×
                </button>
                <h4 class="modal-title">Quản lý file</h4>
            </div>
            <div class="modal-body">
                <div class="well-sm">
                    <div id="elfinder-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
