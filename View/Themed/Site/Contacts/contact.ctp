<?php
setlocale (LC_MONETARY, 'vi_VN');
$this->Html->script (array (
						   '//maps.google.com/maps/api/js?sensor=false&ver=1.0',
						   'infobox',
						   'contact',
					 ), array ('inline' => false));
?>
<script>
	window.business_address_latitude = '16.0680739';
	window.business_address_longitude = '108.178525';
	window.company_address = '<h5>Thuê xe miền trung giá rẻ</h5>131 Dũng sĩ Thanh Khê, Đà Nẵng';
</script>
<div class="row">
	<div class="col-md-12 p-r-15">
		<h2 class="feature-title-tour f-left">LIÊN HỆ</h2>

		<img class="f-right" src="/img/call.png" width="239"
			 height="50" alt="Goi tu van">
	</div>
</div>
<div class="col-md-8 p-zero">
	<div class="gmap" id="map_canvas"></div>
</div>
<div class="col-md-4 p-zero">
	<div class="panel panel-default tour-right-panel">
		<!-- Default panel contents -->
		<div class="panel-heading header-style">Liên hệ với chúng tôi</div>
		<div class="panel-body">
			<?php echo $this->Form->create ('Contact', array ('class' => 'col-md-12')); ?>
			<?php
			$this->Form->inputDefaults (array (
											  'div' => array ('class' => 'form-group'),
											  'class' => 'form-control'
										));
			echo $this->Form->input('email');
			echo $this->Form->input('phone',array('label'=>array('text'=>'Số điện thoại')));
			echo $this->Form->input('title',array('label'=>array('text'=>'Tiêu đề')));
			echo $this->Form->input('body',array('label'=>array('text'=>'Nội dung')));
			$this->Captcha->render(array('model'=>'Contact','clabel'=>'Mã bảo mật','reload_txt'=>'Mã số khác'));
			echo $this->Form->button('Send', array('class' => 'btn btn-primary form-control'));
			?>
			<?php echo $this->Form->end (); ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 p-r-15">
		<?php
		echo $this->element('contact_info');
		?>
	</div>
</div>
<?php
$this->Html->scriptStart(array('inline' => false));
?>
	jQuery('.creload').on('click', function() {
	var mySrc = jQuery(this).prev().attr('src');
	var glue = '?';
	if(mySrc.indexOf('?')!=-1)  {
	glue = '&';
	}
	jQuery(this).prev().attr('src', mySrc + glue + new Date().getTime());
	return false;
	});
<?php
$this->Html->scriptEnd();
?>