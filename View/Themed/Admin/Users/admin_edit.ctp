<?php

$this->Html->addCrumb($title_for_layout, array('action' => 'index'));

if ($this->request->params['action'] == 'admin_add') {

    $this->Html->addCrumb(__('New ') . (isset($type) ? $type : 'User'), '/' . $this->request->url);

} else {

    $this->Html->addCrumb($this->request->data['User']['name'], '/' . $this->request->url);

}

?>
<div class="col-md-9">

    <div class="widget stacked ">

        <div class="widget-header">
            <i class="icon-user"></i>

            <h3><?php echo isset($title_for_layout) ? $title_for_layout : 'User'; ?></h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#users" data-toggle="tab"><?php echo __('Contents'); ?></a>
                    </li>
                </ul>
                <br>

                <div class="tab-content">
                    <div class="tab-pane active" id="users">
                        <div class="posts">
                            <?php echo $this->Form->create('User', array('class' => 'col-md-12')); ?>
                            <?php
                            $this->Form->inputDefaults(array(

                                'div' => array('class' => 'form-group'),

                                'class' => 'form-control'

                            ));
                            echo $this->Form->input('id');
                            echo $this->Form->input('name');
                            echo $this->Form->input('username', array('readonly' => 'readonly', 'label' => 'Usernames cannot be changed!'));
                            echo $this->Form->input('email');
                            echo $this->Form->input('password_update', array('label' => 'New Password (leave empty if you do not want to change)', 'maxLength' => 255, 'type' => 'password', 'required' => 0));
                            echo $this->Form->input('password_confirm_update', array('label' => 'Confirm New Password *', 'maxLength' => 255, 'title' => 'Confirm New password', 'type' => 'password', 'required' => 0));
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
