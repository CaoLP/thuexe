<div class="tourBookings form">
<?php echo $this->Form->create('TourBooking'); ?>
	<fieldset>
		<legend><?php echo __('Add Tour Booking'); ?></legend>
	<?php
		echo $this->Form->input('tour_schedule_id');
		echo $this->Form->input('tour_date');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('adults');
		echo $this->Form->input('childs');
		echo $this->Form->input('special_requirements');
		echo $this->Form->input('total_price');
		echo $this->Form->input('created_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tour Bookings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tour Schedules'), array('controller' => 'tour_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Schedule'), array('controller' => 'tour_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
