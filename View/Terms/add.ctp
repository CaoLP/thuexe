<div class="terms form">
<?php echo $this->Form->create('Term'); ?>
	<fieldset>
		<legend><?php echo __('Add Term'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Terms'), array('action' => 'index')); ?></li>
	</ul>
</div>
