<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('created_by');
		echo $this->Form->input('body');
		echo $this->Form->input('title');
		echo $this->Form->input('excerpt');
		echo $this->Form->input('status');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('url');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Car Rental Bookings'), array('controller' => 'car_rental_bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car Rental Booking'), array('controller' => 'car_rental_bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Postmeta'), array('controller' => 'postmeta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Schedules'), array('controller' => 'tour_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Schedule'), array('controller' => 'tour_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
