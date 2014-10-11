<div class="tourSchedules index">
	<h2><?php echo __('Tour Schedules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('duration_days'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('price_child'); ?></th>
			<th><?php echo $this->Paginator->sort('max_people'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tourSchedules as $tourSchedule): ?>
	<tr>
		<td><?php echo h($tourSchedule['TourSchedule']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tourSchedule['Post']['title'], array('controller' => 'posts', 'action' => 'view', $tourSchedule['Post']['id'])); ?>
		</td>
		<td><?php echo h($tourSchedule['TourSchedule']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($tourSchedule['TourSchedule']['duration_days']); ?>&nbsp;</td>
		<td><?php echo h($tourSchedule['TourSchedule']['price']); ?>&nbsp;</td>
		<td><?php echo h($tourSchedule['TourSchedule']['price_child']); ?>&nbsp;</td>
		<td><?php echo h($tourSchedule['TourSchedule']['max_people']); ?>&nbsp;</td>
		<td><?php echo h($tourSchedule['TourSchedule']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tourSchedule['TourSchedule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tourSchedule['TourSchedule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tourSchedule['TourSchedule']['id']), array(), __('Are you sure you want to delete # %s?', $tourSchedule['TourSchedule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tour Schedule'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tour Bookings'), array('controller' => 'tour_bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour Booking'), array('controller' => 'tour_bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
