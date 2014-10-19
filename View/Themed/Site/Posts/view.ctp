<?php
setlocale (LC_MONETARY, 'vi_VN');
?>
<?php

$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
$images = array ($post_metas['thumbnail']['meta_value']);
$temp_img = explode (';', $post_metas['images']['meta_value']);
$temp_img = array_filter ($temp_img);
if (count ($temp_img) > 0) $images = $temp_img;
$start_date = $post_metas['start_date']['meta_value'];
$temp_array = array ();
$everyday = false;
foreach ($start_date as $val) {
	$temp_array[] = $days_viet[$val];
	if ($val == 7) $everyday = true;
}
?>
<div class="row">
	<div class="col-md-12 p-r-15">
		<a href="<?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', $type));
		?>">
			<h3 class="f-left"><?php echo $type == 'weekly_tour' ? 'TOUR HẰNG TUẦN' : $type == 'daily_tour' ? 'TOUR HẰNG NGÀY' : 'BẢNG BÁO GIÁ'; ?></h3>
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
		<?php if (!empty($post['Post']['excerpt'])): ?>
			<div class="col-md-12 p-r-15">
				<blockquote>
					<div class="excerpt-info"><?php echo $post['Post']['excerpt']; ?></div>
				</blockquote>
			</div>
		<?php endif; ?>
	</div>
	<div class="row">
		<div class="col-md-12 p-r-15">
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li class="active"><a href="#c-1" role="tab" data-toggle="tab">Chương trình tour</a></li>
				<li><a href="#c-2" role="tab" data-toggle="tab">Điều khoản</a></li>
				<li><a href="#c-3" role="tab" data-toggle="tab">Giá tour</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="c-1">
					<?php
					echo $post['Post']['body'];
					?>
				</div>
				<div class="tab-pane" id="c-2">
					<?php
					echo $post_metas['more_info']['meta_value'];
					?>
				</div>
				<div class="tab-pane" id="c-3">
					<?php
					echo $post_metas['price_info']['meta_value'];
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
		<div class="panel-heading header-style">Khởi hành
			từ <?php echo $post_metas['startlocate']['meta_value']; ?></div>
		<div class="panel-body">

			<ul class="ul-list-style-none tour-right-details">
				<li>
					<table>
						<tbody>
						<tr>
							<td><strong>Thời gian:</strong></td>
							<td>
								<?php
								echo $days_vi[$post_metas['total_days']['meta_value']];
								if (!empty($post_metas['total_nights']['meta_value']))
									echo ' ' . $nights_vi[$post_metas['total_nights']['meta_value']];
								?>
							</td>
						</tr>
						<tr>
							<td><strong>Giá từ:</strong></td>
							<td>
								<span class="price-text"><?php echo money_format ('%.0n', $post_metas['price']['meta_value']) ?></span>
							</td>
						</tr>
						<tr>
							<td><strong>Phương tiện:</strong></td>
							<td><?php echo $post_metas['transport']['meta_value']; ?></td>
						</tr>
						<tr>
							<td><strong>Khởi hành:</strong></td>
							<td>
								<?php
								echo implode (', ', $temp_array);
								?>
							</td>
						</tr>
						</tbody>
					</table>
				</li>
				<li><br></li>
				<li><strong>Tư vấn:</strong><span class="f-right date-text"><?php echo Configure::read('W.Site.help_phone');?></span></li>
				<li><br></li>
				<li class="text-center"><img src="http://cdn.dulichhe.com/images/2014/ban-muon-sgt-goi-lai.gif" width="239" height="50">
				</li>
			</ul>
		</div>

	</div>
	<div class="panel panel-default tour-right-panel">
		<!-- Default panel contents -->
		<div class="panel-heading header-style">Giá & lịch khởi hành</div>
		<div class="panel-body">
			<table>
				<thead>
				<tr>
					<th style="width: 35%;" class="text-center">Ngày đi</th>
					<th style="width: 35%;" class="text-center">Giá</th>
					<th style="width: 30%;" class="text-right">Đặt tour</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$total = count ($temp_array);
				$d = round (15 / $total);
				$array_dates = array();
				if(!$everyday){
					$array_collect = array();
					foreach($start_date as $val){
						$array_collect[] = strtotime('next '. $days_en[$val]);
					}
					sort($array_collect,SORT_NUMERIC );

				}
				for($i = 0; $i < $d; $i++) {
					if($everyday){
						$array_dates[] =strtotime (($i+1) . ' days');
					}else{
						foreach($array_collect as $key=>$val){
							$array_dates[] =  strtotime (($i * 7) . ' days',$val);
						}
					}
				}
				foreach($array_dates as $val) {
						?>
						<tr>
							<td class="text-center"><span
										class="date-text"><?php echo date ('d-m-Y', $val) ?></span></td>
							<td class="text-center"><span
										class="price-text"><?php echo money_format ('%.0n', $post_metas['price']['meta_value']) ?></span>
							</td>
							<td><a href="<?php
								echo $this->Html->url (
									array (
										  'controller' => 'tour_bookings',
										  'action' => 'add',
										  '?' => array (
											  'post_id' => $post['Post']['id'],
											  'booking_date' => $val
										  )
									)
								);
								?>" data-id="<?php echo $post['Post']['id'] ?>"
								   data-date="<?php echo $val ?>"
								   class="btn-sm btn-success f-right">Đặt tour</a></td>
						</tr>
				<?php
				}
				?>
				</tbody>
			</table>
		</div>

	</div>
	<?php echo $this->element('home_ads_2')?>
</div>
