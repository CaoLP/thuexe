<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
	echo $this->Form->input('id');
	echo $this->Form->input('name');
        echo $this->Form->input('username', array( 'readonly' => 'readonly', 'label' => 'Usernames cannot be changed!'));
        echo $this->Form->input('email');
        echo $this->Form->input('password_update', array( 'label' => 'New Password (leave empty if you do not want to change)', 'maxLength' => 255, 'type'=>'password','required' => 0));
        echo $this->Form->input('password_confirm_update', array('label' => 'Confirm New Password *', 'maxLength' => 255, 'title' => 'Confirm New password', 'type'=>'password','required' => 0));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
