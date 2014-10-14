<div class="row">
	<div class="col-lg-12 feature">
		<div class="row">
			<div class="well-sm div-text-run">
				<i class="glyphicon glyphicon-arrow-left f-left"></i>
				<span class="top-text-run">Chiêm ngưỡng mùa thu trong nước. Khởi hành từ TP.HCM và Hà Nội.</span>
				<i class="glyphicon glyphicon-arrow-right f-right"></i>
			</div>
		</div>
		<div class="row">
			<h2 class="feature-title">TIÊU ĐIỂM</h2>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1410936347_6784.jpg" alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407142214_5921.jpg" alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407215215_6524.jpg" alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="http://cdn.dulichhe.com/data/gallery/fullsize/resize_1_235x150_1407212357_5649.jpg" alt="...">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>...</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="row">
	<h2 class="feature-title-ct">DỊCH VỤ THUÊ XE</h2>
</div>
<div class="row">
	<div class="col-md-9 p-zero">
		<div c<?php
		foreach ($cars as $key => $post) {
			$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
			?>
			<div class="col-sm-6 col-md-4 p-zero">
				<div class="thumbnail">
					<a href="<?php
					echo $this->Html->url(
						array(
							 'controller'=>'posts',
							 'action'=>'view',
							 'type'=> $post['Post']['type'],
							 $post['Post']['url']
						)
					);
					?>">
						<img src="<?php echo $this->Image->resizedUrl($post_metas['thumbnail']['meta_value'],235,150,100,WWW_ROOT);?>" alt="<?php echo $post['Post']['title'] ?>">
					</a>
					<div class="caption">
						<a href="<?php
						echo $this->Html->url(
							array(
								 'controller'=>'posts',
								 'action'=>'view',
								 'type'=>$post['Post']['type'],
								 $post['Post']['url']
							)
						);
						?>"><h3><?php echo $post['Post']['title'] ?></h3></a>

						<p><strong>Đời xe:</strong> <?php echo $post_metas['modem']['meta_value'];?></p>
					</div>
				</div>
			</div>
		<?php
		}
		?>


	</div>
	<div class="col-md-3 p-zero">
		<div class="list-group">
			<a href="#" class="list-group-item">
				Cras justo odio
			</a>
			<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			<a href="#" class="list-group-item">Morbi leo risus</a>
			<a href="#" class="list-group-item">Porta ac consectetur ac</a>
			<a href="#" class="list-group-item">Vestibulum at eros</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-9 p-zero">
		<div class="col-lg-6 p-zero">
			<h2 class="feature-title-ct">TOUR HẰNG NGÀY</h2>
			<hr>
			<ul>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11105" class="link-level4">Saigontourist đón 4.500 khách tàu Voyager of the Seas</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11104" class="link-level4">Saigontourist - thương hiệu LỮ HÀNH HÀNG ĐẦU</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11103" class="link-level4">Saigontourist tiên phong triển khai chùm tour Thanh Hóa</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11102" class="link-level4">Saigontourist mang “chăn ấm mùa đông” đến vùng cao</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11100" class="link-level4">Mở tour khai thác đường bay mới Phú Quốc - Singapore</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11099" class="link-level4">Khám phá Angkor huyền bí, tiết kiệm gần 2,2 triệu đồng</a></li>
			</ul>
			<a class="link-level4" href="tinsaigontourist.php">Xem thêm</a>
		</div>
		<div class="col-lg-6 p-zero">
			<h2 class="feature-title-ct">TOUR HẰNG TUẦN</h2>
			<hr>
			<ul>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11105" class="link-level4">Saigontourist đón 4.500 khách tàu Voyager of the Seas</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11104" class="link-level4">Saigontourist - thương hiệu LỮ HÀNH HÀNG ĐẦU</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11103" class="link-level4">Saigontourist tiên phong triển khai chùm tour Thanh Hóa</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11102" class="link-level4">Saigontourist mang “chăn ấm mùa đông” đến vùng cao</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11100" class="link-level4">Mở tour khai thác đường bay mới Phú Quốc - Singapore</a></li>
				<li><a href="tinsaigontourist_chitiet.php?newsID=11099" class="link-level4">Khám phá Angkor huyền bí, tiết kiệm gần 2,2 triệu đồng</a></li>
			</ul>
			<a class="link-level4" href="tinsaigontourist.php">Xem thêm</a>
		</div>
	</div>
	<div class="col-md-3 p-zero">
		<img src="http://cdn.dulichhe.com/images/2014/banner-tour-rieng.gif">
	</div>
</div>