<?php

$this->Html->addCrumb ($title_for_layout, array ('action' => 'index'));
if ($this->request->params['action'] == 'admin_add') {
	$this->Html->addCrumb (__ ('New ') . (isset($type) ? $type : 'TourBooking'), '/' . $this->request->url);
} else {
	$this->Html->addCrumb ($this->request->data['TourBooking']['name'], '/' . $this->request->url);
}

?>
<div class="col-md-9">

	<div class="widget stacked ">

		<div class="widget-header">
			<i class="icon-user"></i>

			<h3><?php echo isset($title_for_layout) ? $title_for_layout : 'TourBooking'; ?></h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tourBookings" data-toggle="tab"><?php echo __ ('Contents'); ?></a>
					</li>
				</ul>
				<br>

				<div class="tab-content">
					<div class="tab-pane active" id="tourBookings">
						<div class="posts">
							<?php echo $this->Form->create ('TourBooking', array ('class' => 'col-md-12')); ?>
							<?php
							$this->Form->inputDefaults (array (

															  'div' => array ('class' => 'form-group'),

															  'class' => 'form-control'

														));

							echo $this->Form->input ('status',array('options'=>$status));
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-3">
	<div class="widget widget-plain">
		<div class="widget-content">
			<div class="form-group">
				<?php echo $this->Form->button ('Save', array ('class' => 'btn btn-primary btn-support-ask form-control')); ?>
			</div>
		</div>
		<!-- /widget-content -->
	</div>
	<!-- /widget -->
</div>
<?php echo $this->Form->end (); ?>
