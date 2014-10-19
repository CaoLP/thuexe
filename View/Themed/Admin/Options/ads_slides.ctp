<?php
$this->Html->addCrumb($title_for_layout, array('action' => 'index'));
if ($this->request->params['action'] == 'admin_add') {
    $this->Html->addCrumb(__('New ') . (isset($type) ? $type : 'Option'), '/' . $this->request->url);
} else {
    $this->Html->addCrumb($this->request->data['Option']['name'], '/' . $this->request->url);
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
   $('#OptionAdminAddForm').on('submit',function(e){
    alert('a000');

    })
<?php
$this->Html->scriptEnd();
?>
<div class="col-md-9">
    <div class="widget stacked ">

        <div class="widget-header">
            <i class="icon-user"></i>

            <h3><?php echo isset($title_for_layout) ? $title_for_layout : 'Option'; ?></h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#options" data-toggle="tab"><?php echo __('Contents'); ?></a>
                    </li>
                </ul>
                <br>

                <div class="tab-content">
                    <div class="tab-pane active" id="options">
                        <div class="posts">
                            <?php echo $this->Form->create('Option', array('class' => 'col-md-12')); ?>
                            <?php
                            echo $this->Form->input('id');
                            echo $this->Form->hidden('name');
                            echo $this->Form->hidden('value');
                            echo $this->Form->hidden('group',array('value',$group));
                            echo $this->Form->hidden('key');
                            ?>
							<div id="thumbail"></div>
							<a href="javascript:;" class="choice-img">Chọn ảnh</a>
							<?php
							echo $this->Form->hidden('P.picInput', array('id' => 'picInput'));
							echo $this->Form->input('Post.body');
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
