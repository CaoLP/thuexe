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
                                    <?php //echo $this->Html->link('<i class="icon-zoom-in"></i>', array('action' => 'view', $post['Post']['id']), array('escape' => false, 'title' => __('View'))); ?>
                                    <?php echo $this->Html->link('<i class="icon-edit"></i>', array('action' => 'edit', $post['Post']['id']), array('escape' => false, 'title' => __('Edit'))); ?>
                                    <?php //echo $this->Form->postLink('<i class="icon-trash"></i>', array('action' => 'delete', $post['Post']['id']), array('escape' => false, 'title' => __('Delete')), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
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