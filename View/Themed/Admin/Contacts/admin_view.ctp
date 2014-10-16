<div class="contacts view">
<h2><?php echo __('Car Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Car Type'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Car Type'), array('action' => 'delete', $contact['Contact']['id']), array(), __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Car Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Car Type Cars'), array('controller' => 'car_type_cars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car Type Car'), array('controller' => 'car_type_cars', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Car Type Cars'); ?></h3>
	<?php if (!empty($contact['ContactCar'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Car Type Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contact['ContactCar'] as $contactCar): ?>
		<tr>
			<td><?php echo $contactCar['id']; ?></td>
			<td><?php echo $contactCar['post_id']; ?></td>
			<td><?php echo $contactCar['car_type_id']; ?></td>
			<td><?php echo $contactCar['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'car_type_cars', 'action' => 'view', $contactCar['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'car_type_cars', 'action' => 'edit', $contactCar['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'car_type_cars', 'action' => 'delete', $contactCar['id']), array(), __('Are you sure you want to delete # %s?', $contactCar['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Car Type Car'), array('controller' => 'car_type_cars', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
