<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('excerpt'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['body']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['excerpt']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['status']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['updated']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['ParentPost']['title'], array('controller' => 'posts', 'action' => 'view', $post['ParentPost']['id'])); ?>
		</td>
		<td><?php echo h($post['Post']['url']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
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
