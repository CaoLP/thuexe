<?php
$this->Html->addCrumb($title_for_layout, array('action' => 'index'));
if ($this->request->params['action'] == 'admin_add') {
    $this->Html->addCrumb(__('New ') . (isset($type) ? $type : 'Option'), '/' . $this->request->url);
} else {
    $this->Html->addCrumb($this->request->data['Option']['name'], '/' . $this->request->url);
}
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
