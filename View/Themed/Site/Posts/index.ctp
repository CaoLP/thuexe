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
	foreach($start_date as $val){
		$temp_array[] = $days_viet[$val];
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
									 src="<?php echo $this->Image->resizedUrl($post_metas['thumbnail']['meta_value'],200,119,100,WWW_ROOT);?>"
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
							<tr>
								<td class="text-center"><span class="date-text">30/03/2015</span></td>
								<td class="text-center"><span class="price-text">3.750.000</span></td>
								<td><a href="javascript:;" class="btn-sm btn-success f-right">Đặt tour</a></td>
							</tr>
							<tr>
								<td class="text-center"><span class="date-text">30/03/2015</span></td>
								<td class="text-center"><span class="price-text">3.750.000</span></td>
								<td><a href="javascript:;" class="btn-sm btn-success f-right">Đặt tour</a></td>
							</tr>

						</table>
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
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</div>
</div>