<div class="tourBookings index">
	<h2><?php echo __('Tour Bookings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tour_schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tour_date'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('adults'); ?></th>
			<th><?php echo $this->Paginator->sort('childs'); ?></th>
			<th><?php echo $this->Paginator->sort('special_requirements'); ?></th>
			<th><?php echo $this->Paginator->sort('total_price'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tourBookings as $tourBooking): ?>
	<tr>
		<td><?php echo h($tourBooking['TourBooking']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourBooking['TourSchedule']['id'], array('controller' => 'tour_schedules', 'action' => 'view', $tourBooking['TourSchedule']['id'])); ?>
		</td>
		<td><?php echo h($tourBooking['TourBooking']['tour_date']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['email']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['phone']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['address']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['adults']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['childs']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['special_requirements']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['total_price']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($tourBooking['TourBooking']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tourBooking['TourBooking']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tourBooking['TourBooking']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tourBooking['TourBooking']['id']), array(), __('Are you sure you want to delete # %s?', $tourBooking['TourBooking']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tour Booking'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tour Schedules'), array('controller' => 'tour_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Schedule'), array('controller' => 'tour_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
