<div class="carTypeCars view">
<h2><?php echo __('Car Type Car'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carTypeCar['CarTypeCar']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carTypeCar['Post']['title'], array('controller' => 'posts', 'action' => 'view', $carTypeCar['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Car Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carTypeCar['CarType']['name'], array('controller' => 'car_types', 'action' => 'view', $carTypeCar['CarType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($carTypeCar['CarTypeCar']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Car Type Car'), array('action' => 'edit', $carTypeCar['CarTypeCar']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Car Type Car'), array('action' => 'delete', $carTypeCar['CarTypeCar']['id']), array(), __('Are you sure you want to delete # %s?', $carTypeCar['CarTypeCar']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Car Type Cars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car Type Car'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Car Types'), array('controller' => 'car_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car Type'), array('controller' => 'car_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
