<?php
setlocale (LC_MONETARY, 'vi_VN');
?>
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
				<form action="<?php echo $this->Html->url (array ('action' => 'index')) ?>" method="get" class=""
					  role="form">
					<div style="min-height: 50px">
						<div class="col-xs-5">
							<div class="input-group">
								<div class="input-group-addon">Ngày</div>
								<input class="form-control" name="date" type="text" placeholder="Ngày">
							</div>
						</div>
						<div class="col-xs-5">
							<?php echo $this->Form->input ('status', array ('div' => false, 'label' => false, 'name' => 'status', 'class' => 'form-control', 'options' => $status, 'empty' => true)) ?>
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
							<th><?php echo $this->Paginator->sort ('tour_schedule_id', 'Tour'); ?></th>
							<th><?php echo $this->Paginator->sort ('tour_date', 'Ngày đặt'); ?></th>
							<th><?php echo $this->Paginator->sort ('name', 'Người đặt'); ?></th>
							<th><?php echo $this->Paginator->sort ('status', 'Trạng thái'); ?></th>
							<th class="actions"><?php echo __ ('Actions'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($tourBookings as $tourBooking): ?>
							<tr>
								<td>
									<?php echo $this->Html->link ($tourBooking['Tour']['title'], array ('admin' => false, 'controller' => 'posts', 'action' => 'view', $tourBooking['Tour']['type'], 'url' => $tourBooking['Tour']['url'])); ?>
								</td>
								<td><?php echo h ($tourBooking['TourBooking']['tour_date']); ?>&nbsp;</td>
								<td><?php echo h ($tourBooking['TourBooking']['name']); ?>&nbsp;</td>
								<td><?php echo h ($status[$tourBooking['TourBooking']['status']]); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link ('<i class="icon-edit"></i>', 'javascript:;', array ('escape' => false,'class'=>'bt-table-toggle-expand', 'title' => __ ('Edit'))); ?>
								</td>
							</tr>
							<tr class="table-expandable">
								<td colspan="5">
									<div class="col-md-12">
										<div class="panel panel-success">

											<div class="panel-heading"><?php echo $tourBooking['Tour']['title'];?></div>
											<div class="panel-body">
												<?php echo $this->Form->create('TourBooking',array('action'=>'/edit/'.$tourBooking['TourBooking']['id'],'id'=>'TourBooking'.$tourBooking['TourBooking']['id']));?>
												<div class="col-md-12">
													<?php
													echo $this->Form->input('id',array('value'=>$tourBooking['TourBooking']['id']));
													echo $this->Form->hidden('status',array('value'=>1));
													?>
													<div class="col-md-6">
														<table style="border: 0">
															<tr>
																<td><strong>Người đặt</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['name'];?></td>
															</tr>
															<tr>
																<td><strong>Số điện thoại 1</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['phone'];?></td>
															</tr>
															<tr>
																<td><strong>Số điện thoại 2</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['phone1'];?></td>
															</tr>
															<tr>
																<td><strong>Email</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['email'];?></td>
															</tr>
															<tr>
																<td><strong>Địa chỉ</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['id'];?></td>
															</tr>
															<tr>
																<td><strong>Yêu cầu đặt biệt</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['special_requirements'];?></td>
															</tr>
														</table>
													</div>
													<div class="col-md-6">
														<table style="border: 0">
															<tr>
																<td><strong>Ngày đi</strong></td>
																<td class="text-right"><?php echo date('d/m/Y',strtotime($tourBooking['TourBooking']['tour_date']));?></td>
															</tr>
															<tr>
																<td><strong>Số người lớn</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['adults'];?></td>
															</tr>
															<tr>
																<td><strong>Số trẻ em</strong></td>
																<td class="text-right"><?php echo $tourBooking['TourBooking']['childs'];?></td>
															</tr>
															<tr>
																<td><strong>Giá tiền khách nội</strong></td>
																<td class="text-right"><?php echo  money_format ('%.0n',$tourBooking['TourBooking']['price']);?></td>
															</tr>
															<tr>
																<td><strong>Giá tiền khách ngoại</strong></td>
																<td class="text-right"><?php echo  money_format ('%.0n',$tourBooking['TourBooking']['t_price']);?></td>
															</tr>
														</table>
													</div>
												</div>
												<?php if($tourBooking['TourBooking']['status']==0):?>
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