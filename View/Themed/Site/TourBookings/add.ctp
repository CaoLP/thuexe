<?php
setlocale (LC_MONETARY, 'vi_VN');
?>
<div class="col-md-9 p-zero">
	<div class="row">
		<div class="col-md-12 p-r-15">
			<h2 class="feature-title-tour f-left">ĐẶT TOUR</h2>

			<img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
				 height="50" alt="Goi tu van">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 p-r-15">
			<?php echo $this->Form->create('TourBooking', array('class'=>'form-horizontal')); ?>
			<?php
			$this->Form->inputDefaults (array (
											  'div'=>array('class'=>'form-group'),
											  'class'=>'form-control'
										));

			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('phone');
			echo $this->Form->input('phone1');
			echo $this->Form->input('address');

			echo $this->Form->hidden('tour_schedule_id');
			echo $this->Form->input('tour_date');
			echo $this->Form->input('adults');
			echo $this->Form->input('childs');
			echo $this->Form->input('special_requirements');
			echo $this->Form->hidden('total_price');
			?>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>
<div class="col-md-3 p-zero">
	<?php echo $this->element('home_ads_1')?>
	<?php echo $this->element('home_ads_2')?>
</div>
