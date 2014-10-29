<?php
$edit = true;
if (!isset($arrayFields)) {
	$arrayFields = array(
		'ren_time' => 0,
	);
	$edit = false;
}else{
	$arrayFields1 = array(
		'ren_time' => 0,
	);
	$notIsset = array_diff(array_keys($arrayFields1),array_keys($arrayFields));
	$arrayFields = array_merge($arrayFields1,$arrayFields);
}
?>
<?php
$this->Html->addCrumb($title_for_layout, array('action' => 'index',$type));
if ($this->request->params['action'] == 'admin_add') {

    $this->Html->addCrumb(__('New ') . (isset($type) ? $type : 'Post'), '/' . $this->request->url);
} else {
    $this->Html->addCrumb($this->request->data['Post']['title'], '/' . $this->request->url);
}
?>
<script>
	var url = '<?php echo $this->Html->url(array(
				'plugin'=>'el_finder',
				'controller'=>'el_finder',
				'action' =>'browse'
			));?>'
</script>
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
							foreach ($arrayFields as $key=>$val) {
								$id = '';
								if (isset($this->request->data['Post']['id'])) {
									$id = $this->request->data['Post']['id'];
								};
								if ($edit)
									if(!in_array($key,$notIsset))
										echo $this->Form->hidden('Postmetum.' . $val . '.id', array('value' => $val));
								echo $this->Form->hidden('Postmetum.' . $val . '.post_id', array('value' => $id));
							}
							$this->Form->inputDefaults(array(
														'div' => array('class' => 'form-group'),
														'class' => 'form-control'
													   ));
                            echo $this->Form->input('title');
							echo $this->Form->input('url', array('class'=>'form-control slug'));
							echo $this->Form->input('excerpt');
                            echo $this->Form->input('body');

							echo $this->Form->hidden('Postmetum.' . $arrayFields['ren_time'] . '.meta_key',
													 array('value' => 'ren_time'));
							echo $this->Form->input('Postmetum.' . $arrayFields['ren_time'] . '.meta_value',
													array(
														 'label' => array('text' => 'Thời gian'),
														 'type' => 'select',
														 'options' => $days_vi,
													)
							);
                            echo $this->Form->hidden('type', array('value' => $type));
                            echo $this->Form->hidden('status',array('value'=>'1'));
                            ?>
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
</div>
<?php echo $this->Form->end(); ?>
