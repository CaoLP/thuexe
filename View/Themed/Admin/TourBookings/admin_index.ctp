<?php
$status = array (
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
			<div class="col-lg-12">
				<form action="<?php echo $this->Html->url(array('action'=>'index'))?>" method="get" class="" role="form">
					<div class="row">
						<div class="col-xs-5">
							<div class="input-group">
								<div class="input-group-addon">Ngày</div>
								<input class="form-control" name="date" type="text" placeholder="Ngày">
							</div>
						</div>
						<div class="col-xs-5">
							<?php echo $this->Form->input('status',array('div'=>false,'label'=>false,'name'=>'status','class'=>'form-control','options'=>$status,'empty'=>true))?>
						</div>
						<div class="col-xs-2">
							<button type="submit" class="btn btn-default">Go!</button>
						</div>
					</div>
				</form>
		</div>
			<div class="col-lg-12">

				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
						<tr>
							<th><?php echo $this->Paginator->sort ('tour_schedule_id','Tour'); ?></th>
							<th><?php echo $this->Paginator->sort ('tour_date','Ngày đặt'); ?></th>
							<th><?php echo $this->Paginator->sort ('name','Người đặt'); ?></th>
							<th><?php echo $this->Paginator->sort ('status','Trạng thái'); ?></th>
							<th class="actions"><?php echo __ ('Actions'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($tourBookings as $tourBooking): ?>
							<tr>
								<td>
									<?php echo $this->Html->link ($tourBooking['Tour']['title'], array ('admin'=>false,'controller' => 'posts', 'action' => 'view', $tourBooking['Tour']['type'],'url'=>$tourBooking['Tour']['url'])); ?>
								</td>
								<td><?php echo h ($tourBooking['TourBooking']['tour_date']); ?>&nbsp;</td>
								<td><?php echo h ($tourBooking['TourBooking']['name']); ?>&nbsp;</td>
								<td><?php echo h ($status[$tourBooking['TourBooking']['status']]); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link ('<i class="icon-edit"></i>', array ('action' => 'edit', $tourBooking['TourBooking']['id']), array ('escape' => false, 'title' => __ ('Edit'))); ?>
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