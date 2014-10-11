<div class="postmeta view">
<h2><?php echo __('Postmetum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($postmetum['Postmetum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($postmetum['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postmetum['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Key'); ?></dt>
		<dd>
			<?php echo h($postmetum['Postmetum']['meta_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Value'); ?></dt>
		<dd>
			<?php echo h($postmetum['Postmetum']['meta_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Postmetum'), array('action' => 'edit', $postmetum['Postmetum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Postmetum'), array('action' => 'delete', $postmetum['Postmetum']['id']), array(), __('Are you sure you want to delete # %s?', $postmetum['Postmetum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Postmeta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Postmetum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
