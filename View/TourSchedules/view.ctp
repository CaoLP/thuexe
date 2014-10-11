<div class="tourSchedules view">
<h2><?php echo __('Tour Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourSchedule['Post']['title'], array('controller' => 'posts', 'action' => 'view', $tourSchedule['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration Days'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['duration_days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price Child'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['price_child']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max People'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['max_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tourSchedule['TourSchedule']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tour Schedule'), array('action' => 'edit', $tourSchedule['TourSchedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tour Schedule'), array('action' => 'delete', $tourSchedule['TourSchedule']['id']), array(), __('Are you sure you want to delete # %s?', $tourSchedule['TourSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Bookings'), array('controller' => 'tour_bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Booking'), array('controller' => 'tour_bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tour Bookings'); ?></h3>
	<?php if (!empty($tourSchedule['TourBooking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tour Schedule Id'); ?></th>
		<th><?php echo __('Tour Date'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Adults'); ?></th>
		<th><?php echo __('Childs'); ?></th>
		<th><?php echo __('Special Requirements'); ?></th>
		<th><?php echo __('Total Price'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tourSchedule['TourBooking'] as $tourBooking): ?>
		<tr>
			<td><?php echo $tourBooking['id']; ?></td>
			<td><?php echo $tourBooking['tour_schedule_id']; ?></td>
			<td><?php echo $tourBooking['tour_date']; ?></td>
			<td><?php echo $tourBooking['first_name']; ?></td>
			<td><?php echo $tourBooking['last_name']; ?></td>
			<td><?php echo $tourBooking['email']; ?></td>
			<td><?php echo $tourBooking['phone']; ?></td>
			<td><?php echo $tourBooking['address']; ?></td>
			<td><?php echo $tourBooking['adults']; ?></td>
			<td><?php echo $tourBooking['childs']; ?></td>
			<td><?php echo $tourBooking['special_requirements']; ?></td>
			<td><?php echo $tourBooking['total_price']; ?></td>
			<td><?php echo $tourBooking['created_by']; ?></td>
			<td><?php echo $tourBooking['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tour_bookings', 'action' => 'view', $tourBooking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tour_bookings', 'action' => 'edit', $tourBooking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tour_bookings', 'action' => 'delete', $tourBooking['id']), array(), __('Are you sure you want to delete # %s?', $tourBooking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tour Booking'), array('controller' => 'tour_bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
