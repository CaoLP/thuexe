<div class="tourSchedules form">
<?php echo $this->Form->create('TourSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Tour Schedule'); ?></legend>
	<?php
		echo $this->Form->input('post_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('duration_days');
		echo $this->Form->input('price');
		echo $this->Form->input('price_child');
		echo $this->Form->input('max_people');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tour Schedules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Bookings'), array('controller' => 'tour_bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Booking'), array('controller' => 'tour_bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
