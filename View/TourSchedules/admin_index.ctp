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
			<?php echo $this->Html->link('<i class="icon-zoom-in"></i>', array('action' => 'view', $tourSchedule['TourSchedule']['id']),array('escape' => false,'title'=>__('View'))); ?>
			<?php echo $this->Html->link('<i class="icon-edit"></i>', array('action' => 'edit', $tourSchedule['TourSchedule']['id']), array('escape' => false,'title'=>__('Edit'))); ?>
			<?php echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $tourSchedule['TourSchedule']['id']), array('escape' => false,'title'=>__('Delete')), __('Are you sure you want to delete # %s?', $tourSchedule['TourSchedule']['id'])); ?>
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