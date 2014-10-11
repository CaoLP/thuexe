<div class="carRentalBookings view">
<h2><?php echo __('Car Rental Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carRentalBooking['Post']['title'], array('controller' => 'posts', 'action' => 'view', $carRentalBooking['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Requirements'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['special_requirements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Price'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['total_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($carRentalBooking['CarRentalBooking']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Car Rental Booking'), array('action' => 'edit', $carRentalBooking['CarRentalBooking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Car Rental Booking'), array('action' => 'delete', $carRentalBooking['CarRentalBooking']['id']), array(), __('Are you sure you want to delete # %s?', $carRentalBooking['CarRentalBooking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Car Rental Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car Rental Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
