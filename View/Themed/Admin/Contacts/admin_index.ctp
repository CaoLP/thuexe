<?php
$status = array(
	'Chưa giải quyết',
	'Đã giải quyết',
);
?>
<div class="col-md-12">

	<div class="widget stacked">

		<div class="widget-header">
			<i class="icon-pushpin"></i>

			<h3><?php echo $title_for_layout; ?></h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div style="min-height: 50px">
			<form action="<?php echo $this->Html->url(array('action'=>'index'))?>" method="get" class="" role="form">
				<div class="col-md-5">
					<?php echo $this->Form->input('status',array('div'=>false,'label'=>false,'name'=>'status','class'=>'form-control','options'=>$status,'empty'=>true))?>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-default">Go!</button>
				</div>
			</form>
			</div>
			<div class="col-lg-12">

				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
						<tr>
							<th><?php echo $this->Paginator->sort ('id'); ?></th>
							<th><?php echo $this->Paginator->sort ('email'); ?></th>
							<th><?php echo $this->Paginator->sort ('phone'); ?></th>
							<th><?php echo $this->Paginator->sort ('title'); ?></th>
							<th><?php echo $this->Paginator->sort ('status'); ?></th>
							<th><?php echo $this->Paginator->sort ('created'); ?></th>
							<th class="actions"><?php echo __ ('Actions'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($contacts as $contact): ?>
							<tr>
								<td class="table-toggle-expand"><?php echo h ($contact['Contact']['id']); ?>&nbsp;</td>
								<td class="table-toggle-expand"><?php echo h ($contact['Contact']['email']); ?>&nbsp;</td>
								<td class="table-toggle-expand"><?php echo h ($contact['Contact']['phone']); ?>&nbsp;</td>
								<td class="table-toggle-expand"><?php echo h ($contact['Contact']['title']); ?>&nbsp;</td>
								<td class="table-toggle-expand"><?php echo h ($status[$contact['Contact']['status']]); ?>&nbsp;</td>
								<td class="table-toggle-expand"><?php echo h ($contact['Contact']['created']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Form->postLink ('<i class="icon-trash"></i>', array ('action' => 'delete', $contact['Contact']['id']), array ('escape' => false, 'title' => __ ('Delete')), __ ('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
								</td>
							</tr>
							<tr class="table-expandable">
								<td colspan="7">
									<div class="col-md-12">
										<div class="panel panel-success">

											<div class="panel-heading"><?php echo $contact['Contact']['title'];?></div>
											<div class="panel-body">
												<?php echo $this->Form->create('Contact',array('action'=>'/edit/'.$contact['Contact']['id'],'id'=>'Contact'.$contact['Contact']['id']));?>
												<div class="col-md-12">
														<?php
														echo $this->Form->input('id',array('value'=>$contact['Contact']['id']));
														echo $this->Form->hidden('status',array('value'=>1));
														?>
														<?php echo $contact['Contact']['body']?>


												</div>
												<?php if($contact['Contact']['status']==0):?>
												<div class="text-right">
												<button type="submit" class="btn btn-success">Đã giải quyết</button>
												</div>
												<?php endif; ?>
												<?php echo $this->Form->end();?>
											</div>

										</div>
									</div>
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
					echo $this->Paginator->counter (array (
														  'format' => __ ('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
													));
					?>                </p>

				<div class="paging">
					<?php
					echo $this->Paginator->prev ('< ' . __ ('previous'), array (), null, array ('class' => 'prev disabled'));
					echo $this->Paginator->numbers (array ('separator' => ''));
					echo $this->Paginator->next (__ ('next') . ' >', array (), null, array ('class' => 'next disabled'));
					?>
				</div>
			</div>
		</div>
	</div>
</div>