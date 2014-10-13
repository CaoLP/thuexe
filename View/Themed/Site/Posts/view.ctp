<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body'); ?></dt>
		<dd>
			<?php echo h($post['Post']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excerpt'); ?></dt>
		<dd>
			<?php echo h($post['Post']['excerpt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($post['Post']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['ParentPost']['title'], array('controller' => 'posts', 'action' => 'view', $post['ParentPost']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($post['Post']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($post['Post']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Car Rental Bookings'); ?></h3>
	<?php if (!empty($post['CarRentalBooking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Special Requirements'); ?></th>
		<th><?php echo __('Total Price'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['CarRentalBooking'] as $carRentalBooking): ?>
		<tr>
			<td><?php echo $carRentalBooking['id']; ?></td>
			<td><?php echo $carRentalBooking['post_id']; ?></td>
			<td><?php echo $carRentalBooking['first_name']; ?></td>
			<td><?php echo $carRentalBooking['last_name']; ?></td>
			<td><?php echo $carRentalBooking['email']; ?></td>
			<td><?php echo $carRentalBooking['phone']; ?></td>
			<td><?php echo $carRentalBooking['address']; ?></td>
			<td><?php echo $carRentalBooking['special_requirements']; ?></td>
			<td><?php echo $carRentalBooking['total_price']; ?></td>
			<td><?php echo $carRentalBooking['created_by']; ?></td>
			<td><?php echo $carRentalBooking['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'car_rental_bookings', 'action' => 'view', $carRentalBooking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'car_rental_bookings', 'action' => 'edit', $carRentalBooking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'car_rental_bookings', 'action' => 'delete', $carRentalBooking['id']), array(), __('Are you sure you want to delete # %s?', $carRentalBooking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Car Rental Booking'), array('controller' => 'car_rental_bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Postmeta'); ?></h3>
	<?php if (!empty($post['Postmetum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Meta Key'); ?></th>
		<th><?php echo __('Meta Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['Postmetum'] as $postmetum): ?>
		<tr>
			<td><?php echo $postmetum['id']; ?></td>
			<td><?php echo $postmetum['post_id']; ?></td>
			<td><?php echo $postmetum['meta_key']; ?></td>
			<td><?php echo $postmetum['meta_value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'postmeta', 'action' => 'view', $postmetum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'postmeta', 'action' => 'edit', $postmetum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'postmeta', 'action' => 'delete', $postmetum['id']), array(), __('Are you sure you want to delete # %s?', $postmetum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Postmetum'), array('controller' => 'postmeta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($post['ChildPost'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Excerpt'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['ChildPost'] as $childPost): ?>
		<tr>
			<td><?php echo $childPost['id']; ?></td>
			<td><?php echo $childPost['created_by']; ?></td>
			<td><?php echo $childPost['created']; ?></td>
			<td><?php echo $childPost['body']; ?></td>
			<td><?php echo $childPost['title']; ?></td>
			<td><?php echo $childPost['excerpt']; ?></td>
			<td><?php echo $childPost['status']; ?></td>
			<td><?php echo $childPost['updated']; ?></td>
			<td><?php echo $childPost['parent_id']; ?></td>
			<td><?php echo $childPost['url']; ?></td>
			<td><?php echo $childPost['type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $childPost['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $childPost['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $childPost['id']), array(), __('Are you sure you want to delete # %s?', $childPost['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tour Schedules'); ?></h3>
	<?php if (!empty($post['TourSchedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Duration Days'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Price Child'); ?></th>
		<th><?php echo __('Max People'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($post['TourSchedule'] as $tourSchedule): ?>
		<tr>
			<td><?php echo $tourSchedule['id']; ?></td>
			<td><?php echo $tourSchedule['post_id']; ?></td>
			<td><?php echo $tourSchedule['start_date']; ?></td>
			<td><?php echo $tourSchedule['duration_days']; ?></td>
			<td><?php echo $tourSchedule['price']; ?></td>
			<td><?php echo $tourSchedule['price_child']; ?></td>
			<td><?php echo $tourSchedule['max_people']; ?></td>
			<td><?php echo $tourSchedule['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tour_schedules', 'action' => 'view', $tourSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tour_schedules', 'action' => 'edit', $tourSchedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tour_schedules', 'action' => 'delete', $tourSchedule['id']), array(), __('Are you sure you want to delete # %s?', $tourSchedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tour Schedule'), array('controller' => 'tour_schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
