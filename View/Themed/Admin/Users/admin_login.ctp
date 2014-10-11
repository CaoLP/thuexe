<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <h1>Sign In</h1>
    <div class="login-fields">
        <p>Sign in using your registered account:</p>

        <?php echo $this->Form->input('username', array('div'=>array('class'=>'field'),'class'=>'form-control input-lg username-field'));
        echo $this->Form->input('password', array('div'=>array('class'=>'field'),'class'=>'form-control input-lg password-field'));
    ?>
    <div class="login-actions">
    <?php echo $this->Form->button(__('Login'),array('div'=>false,'type'=>'submit','class'=>'login-action btn btn-primary')); ?>
    </div>
    </div>
<?php echo $this->Form->end();?>
<?php
// echo $this->Html->link( "Add A New User",   array('action'=>'add') );
?>