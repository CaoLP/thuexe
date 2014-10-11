<div class="tourBookings view">
<h2><?php echo __('Tour Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourBooking['TourSchedule']['id'], array('controller' => 'tour_schedules', 'action' => 'view', $tourBooking['TourSchedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Date'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['tour_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adults'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['adults']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Childs'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['childs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Requirements'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['special_requirements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Price'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['total_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tourBooking['TourBooking']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour Booking'), array('action' => 'edit', $tourBooking['TourBooking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour Booking'), array('action' => 'delete', $tourBooking['TourBooking']['id']), array(), __('Are you sure you want to delete # %s?', $tourBooking['TourBooking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Schedules'), array('controller' => 'tour_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Schedule'), array('controller' => 'tour_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
