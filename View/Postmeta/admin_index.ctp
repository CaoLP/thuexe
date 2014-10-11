<div class="col-md-12">

    <div class="widget stacked">

        <div class="widget-header">
            <i class="icon-pushpin"></i>

            <h3><?php echo $title_for_layout; ?></h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="col-lg-12">

                <a href="<?php echo $this->Html->url(array('action' => 'add')); ?>"
                   class="btn btn-primary">Add new</a>
            </div>
            <div class="col-lg-12">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                                                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                            <th><?php echo $this->Paginator->sort('post_id'); ?></th>
                                                            <th><?php echo $this->Paginator->sort('meta_key'); ?></th>
                                                            <th><?php echo $this->Paginator->sort('meta_value'); ?></th>
                                                        <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($postmeta as $postmetum): ?>
	<tr>
		<td><?php echo h($postmetum['Postmetum']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($postmetum['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postmetum['Post']['id'])); ?>
		</td>
		<td><?php echo h($postmetum['Postmetum']['meta_key']); ?>&nbsp;</td>
		<td><?php echo h($postmetum['Postmetum']['meta_value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<i class="icon-zoom-in"></i>', array('action' => 'view', $postmetum['Postmetum']['id']),array('escape' => false,'title'=>__('View'))); ?>
			<?php echo $this->Html->link('<i class="icon-edit"></i>', array('action' => 'edit', $postmetum['Postmetum']['id']), array('escape' => false,'title'=>__('Edit'))); ?>
			<?php echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $postmetum['Postmetum']['id']), array('escape' => false,'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $postmetum['Postmetum']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-12">
                <p>
                <?php
                            echo $this->Paginator->counter(array(
                            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                            ));
                            ?>                </p>
                <div class="paging">
                    <?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
                </div>
            </div>
        </div>
    </div>
</div>