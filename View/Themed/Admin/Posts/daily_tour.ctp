
<?php 

$this->Html->addCrumb ($title_for_layout, array ('action' => 'index'));

if ($this->request->params['action'] == 'admin_add') {

    $this->Html->addCrumb (__('New ') . (isset($type)?$type:'Post'), '/'.$this->request->url);

} else {

    $this->Html->addCrumb ($this->request->data['Post']['name'], '/'.$this->request->url);

}

?>
<div class="col-md-9">

    <div class="widget stacked ">

        <div class="widget-header">
            <i class="icon-user"></i>
            <h3><?php echo isset($title_for_layout)?$title_for_layout:'Post'; ?></h3>
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
$this->Form->inputDefaults (array (

                                'div'=>array('class'=>'form-group'),

                                'class'=>'form-control'

                            ));
		echo $this->Form->input('created_by');
		echo $this->Form->input('body');
		echo $this->Form->input('title');
		echo $this->Form->input('excerpt');
		echo $this->Form->input('status');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('url');
		echo $this->Form->input('type');
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
                <?php echo $this->Form->button('Save', array('class'=>'btn btn-primary btn-support-ask form-control'));?>
            </div>
        </div> <!-- /widget-content -->
    </div> <!-- /widget -->
</div>
<?php echo $this->Form->end(); ?>
