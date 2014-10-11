<script>
    var url = '<?php echo $this->Html->url(array(
				'plugin'=>'el_finder',
				'controller'=>'el_finder',
				'action' =>'browse'
			));?>'
</script>
<?php
$this->Html->addCrumb($title_for_layout, array('action' => 'index'));
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
$('#PostmetaThumbnail').val(elfinderInstance.url(event.data.file));
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
                </ul>
                <br>

                <div class="tab-content">
                    <div class="tab-pane active" id="posts">
                        <div class="posts">
                            <?php echo $this->Form->create('Post', array('class' => 'col-md-12')); ?>
                            <?php
                            echo $this->Form->hidden('id');
                            $this->Form->inputDefaults(array(

                                'div' => array('class' => 'form-group'),

                                'class' => 'form-control'

                            ));
                            echo $this->Form->input('title');
                            echo $this->Form->input('url', array('class' => 'form-control slug'));
                            echo $this->Form->input('excerpt', array('label' => array('text' => 'Mô tả ngắn')));
                            echo $this->Form->input('body', array('label' => array('text' => 'Nội dung')));
                            //                            echo $this->Form->input('parent_id',array('label'=>array('text'=>'Mục cha')));
                            echo $this->Form->hidden('status', array('value' => 1));
                            echo $this->Form->hidden('type', array('value' => $type));
                            echo $this->Form->input('Postmeta.startlocate',
                                array(
                                    'label' => array('text' => 'Điểm xuất phát'),
                                    'required' => true
                                )
                            );
                            echo $this->Form->input('Postmeta.price',
                                array(
                                    'label' => array('text' => 'Giá tiền'),
                                    'type' => 'number',
                                    'required' => true
                                )
                            );
                            echo $this->Form->input('Postmeta.price_translate',
                                array(
                                    'label' => array('text' => 'Giá tiền kèm phiên dịch'),
                                    'type' => 'number',
                                    'required' => true
                                )
                            );
                            echo $this->Form->input('Postmeta.start_date',
                                array(
                                    'label' => array('text' => 'Khởi hành'),
                                    'class' => 'form-control multiselect',
                                    'multiple' => 'multiple',
                                    'options' => $days_viet,
                                    'required' => true
                                )
                            );
                            echo $this->Form->input('Postmeta.total_days',
                                array(
                                    'label' => array('text' => 'Số ngày'),
                                    'class' => 'form-control multiselect',
                                    'options' => $days_vi,
                                    'required'=>true
                                )
                            );
                            echo $this->Form->input('Postmeta.total_nights',
                                array(
                                    'label' => array('text' => 'Số đêm'),
                                    'class' => 'form-control multiselect',
                                    'options' => $nights_vi,
                                    'empty' => '--Chọn đêm--'
                                )
                            );
                            echo $this->Form->input('Postmeta.transport',
                                array('label' => array('text' => 'Phương tiện')));
                            ?>
                        </div>
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
            echo $this->Form->hidden('Postmeta.thumbnail');
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
