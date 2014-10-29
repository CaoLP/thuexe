<?php
setlocale (LC_MONETARY, 'vi_VN');
?>
<?php
$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
$images = array ($post_metas['thumbnail']['meta_value']);
$temp_img = explode (';', $post_metas['images']['meta_value']);
$temp_img = array_filter ($temp_img);
if (count ($temp_img) > 0) $images = $temp_img;
?>
<div class="row">
	<div class="col-md-12 p-r-15">
		<a href="<?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', $type));
		?>">
			<h3 class="f-left">THÔNG TIN XE</h3>
		</a>
	</div>
</div>
<div class="col-md-9 p-zero">

	<div class="row">
		<div class="col-md-12 p-r-15">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="tour-title">
					<?php echo $post['Post']['title'] ?>
				</div>
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php foreach ($images as $key => $image) {
						?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>"
							class="<?php if ($key == 1) echo 'active'; ?>"></li>
					<?php
					}?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php foreach ($images as $key => $image) {
						?>
						<div class="item <?php if ($key == 1) echo 'active'; ?>">
							<img src="<?php echo '/' . $this->Image->resizedUrl ($image, 711, 392, 100, WWW_ROOT);; ?>">
						</div>
					<?php
					}?>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<?php if(!empty($post['Post']['excerpt'])):?>
		<div class="col-md-12 p-r-15">
			<blockquote>
				<div class="excerpt-info"><?php echo $post['Post']['excerpt'];?></div>
			</blockquote>
		</div>
		<?php endif;?>
		<?php echo $this->element('fb');?>
	</div>
	<div class="row">
		<div class="col-md-12 p-r-15">
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li class="active"><a href="#c-1" role="tab" data-toggle="tab">Thông tin xe</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="c-1">
					<?php
					echo $post['Post']['body'];
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
	echo $this->element ('contact_info');
	?>
</div>
<div class="col-md-3 p-zero">
	<div class="panel panel-default tour-right-panel">
		<!-- Default panel contents -->
		<div class="panel-heading header-style">Thông tin xe</div>
		<div class="panel-body">

			<ul class="ul-list-style-none tour-right-details">
				<li>
					<table>
						<tbody>
						<tr>
							<td><strong>Đời xe:</strong></td>
							<td>
								<span><?php echo$post_metas['modem']['meta_value'] ?></span>
							</td>
						</tr>
						<tr>
							<td><strong>Loại xe:</strong></td>
							<td><span><?php echo $carTypes[$post_metas['car_type']['meta_value']] ?></span></td>
						</tr>
						</tbody>
					</table>
				</li>
				<li><br></li>
				<li><strong>Tư vấn:</strong><span class="f-right date-text"><?php echo Configure::read('W.Site.help_phone');?></span></li>
				<li><br></li>
				<li><a href="<?php echo $this->Html->url(array('controller'=>'contacts','action'=>'contact'))?>"><img src="/img/contact_sm.png" width="239" height="50"></a>
				</li>
			</ul>
		</div>

	</div>
	<?php echo $this->element('home_ads_1')?>
	<?php echo $this->element('home_ads_2')?>
</div>
