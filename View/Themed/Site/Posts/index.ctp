<?php
setlocale (LC_MONETARY, 'vi_VN');
?>
<div class="col-md-9 p-zero">
	<div class="row">
		<div class="col-md-12 p-r-15">
			<h2 class="feature-title-tour f-left"><?php echo $type=='weekly_tour'?'TOUR HẰNG TUẦN':$type=='daily_tour'?'TOUR HẰNG NGÀY':'BẢNG BÁO GIÁ';?></h2>

			<img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
				 height="50" alt="Goi tu van">
		</div>
	</div>
	<?php
	foreach ($posts as $key => $post) {
		$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
		$start_date = $post_metas['start_date']['meta_value'];
		$temp_array = array();
		$everyday = false;
		foreach ($start_date as $val) {
			$temp_array[] = $days_viet[$val];
			if ($val == 7) $everyday = true;
		}
		?>
		<div class="row">
			<div class="col-md-7 p-zero">
				<table>
					<?php if ($key == 0): ?>
						<thead>
						<tr>
							<th>
								Tên tour
							</th>
						</tr>
						</thead>
					<?php endif; ?>
					<tbody>
					<tr>
						<td>
							<div class="media">
								<a href="<?php
								echo $this->Html->url(
									array(
										 'controller'=>'posts',
										 'action'=>'view',
										 $type,
										 'url'=>$post['Post']['url']
									)
								);
								?>">
									<h3 class="media-heading"><?php echo $post['Post']['title'] ?></h3>
								</a>
								<a class="pull-left" href="<?php
								echo $this->Html->url(
									array(
										 'controller'=>'posts',
										 'action'=>'view',
										 $type,
										 'url'=>$post['Post']['url']
									)
								);
								?>" title="<?php echo $post['Post']['title'] ?>">
									<img class="media-object"
										 src="<?php echo '/'.$this->Image->resizedUrl($post_metas['thumbnail']['meta_value'],200,119,100,WWW_ROOT);?>"
										 alt="<?php echo $post['Post']['title'] ?>">
								</a>

								<div class="media-body">
									<ul class="ul-list-style-none">
										<li>
											<strong>
												<i class="glyphicon glyphicon-arrow-right"></i> Khởi hành từ <?php echo $post_metas['startlocate']['meta_value'];?>
											</strong>
										</li>
										<li><strong>Thời gian:</strong> <?php
											echo $days_vi[$post_metas['total_days']['meta_value']];
											if(!empty($post_metas['total_nights']['meta_value']))
												echo ' '. $nights_vi[$post_metas['total_nights']['meta_value']];
											?></li>
										<li><strong>Phương tiện:</strong> <?php echo $post_metas['transport']['meta_value'];?></li>
										<li>
											<strong>Khởi hành:</strong>
											<?php
											echo implode(', ',$temp_array);
											?></li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-5 p-r-15">
				<table>
					<?php if ($key == 0): ?>
						<thead>
						<tr>
							<th style="width: 35%;" class="text-center">Ngày đi</th>
							<th style="width: 35%;" class="text-center">Giá</th>
							<th style="width: 30%;" class="text-right">Đặt tour</th>
						</tr>
						</thead>
					<?php endif; ?>
					<tbody>
					<tr>
						<td colspan="3">
							<table>
								<tr style="height: 15px">
									<td style="width: 35%;" class="text-center"></td>
									<td style="width: 35%;" class="text-center"></td>
									<td style="width: 30%;"></td>
								</tr>
								<?php

								$total = count ($temp_array);
								$d = round (4 / $total);
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
										<td class="text-center"><span class="date-text"><?php echo date ('d-m-Y', $val)?></span></td>
										<td class="text-center"><span class="price-text"><?php echo money_format ('%.0n', $post_metas['price']['meta_value']) ?></span></td>
										<td><a href="<?php
											echo $this->Html->url(
												array(
													 'controller'=>'tour_bookings',
													 'action'=>'add',
													 '?'=>array(
														 'post_id' =>$post['Post']['id'],
														 'booking_date'=> $val
													 )
												)
											);
											?>" data-id="<?php echo $post['Post']['id']?>" data-date="<?php echo $val?>" class="btn-sm btn-success f-right">Đặt tour</a></td>
									</tr>
								<?php
								}
								?>
							</table>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<a class="f-right" href="<?php
							echo $this->Html->url(
								array(
									 'controller'=>'posts',
									 'action'=>'view',
									 $type,
									 'url'=>$post['Post']['url']
								)
							);
							?>">Xem thêm</a>
						</td>
					</tr>
					</tbody>
				</table>

			</div>
		</div>

	<?php
	}
	?>
	<div class="row">
		<div class="col-md-12 p-r-15">
			<ul class="pagination f-right">
				<?php
				echo $this->Paginator->prev(__('&laquo;'), array('tag' => 'li','escape'=>false), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a','escape'=>false));
				echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
				echo $this->Paginator->next(__('&raquo;'), array('tag' => 'li','currentClass' => 'disabled','escape'=>false), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a','escape'=>false));
				?>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-3 p-zero">

	<?php echo $this->element('home_ads_1')?>
	<?php echo $this->element('home_ads_2')?>
</div>
