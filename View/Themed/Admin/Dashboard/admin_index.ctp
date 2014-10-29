<div class="col-md-12">

	<div class="widget stacked">

		<div class="widget-header">
			<i class="icon-pushpin"></i>
			<h3><?php echo $title_for_layout; ?></h3>
		</div>
		<!-- /widget-header -->
		<div class="widget-content">
			<div class="col-lg-12">
				<h3>Thông tin</h3>
				<ul class="statistics">
					<li>
						<div class="main-info">
							<a href="<?php echo $this->Html->url(array('controller'=>'tour_bookings','action'=>'index'))?>" class="jet-blue-bg" data-original-title="">
								<i class="icon icon-shopping-cart"></i>
							<strong><?php echo $total_booking;?></strong>
							</a>
						</div>
						<span>Đặt hàng mới</span>
					</li>
					<li>
						<div class="main-info">
							<a href="<?php echo $this->Html->url(array('controller'=>'contacts','action'=>'index'))?>" class="go-green-bg" data-original-title="">
								<i class="icon icon-envelope"></i>
							<strong><?php echo $total_contact;?></strong>
							</a>
						</div>
						<span>Liên hệ mới</span>
					</li>
				</ul>
			</div>
			<div class="col-lg-12">
				<h3>Đang trực tuyến</h3>
			</div>
			<div class="col-lg-12">
				<script id="_wau05u">var _wau = _wau || [];
					_wau.push(["colored", "h9zoto7c9vau", "05u", "ffc20e000000"]);
					(function() {var s=document.createElement("script"); s.async=true;
						s.src="http://widgets.amung.us/colored.js";
						document.getElementsByTagName("head")[0].appendChild(s);
					})();</script>

			</div>
			<div class="col-lg-12">
			<script id="_wauzol">var _wau = _wau || [];
				_wau.push(["map", "h9zoto7c9vau", "zol", "100%", "500", "natural", "heart-pink"]);
				(function () {
					var s = document.createElement("script");
					s.async = true;
					s.src = "http://widgets.amung.us/map.js";
					document.getElementsByTagName("head")[0].appendChild(s);
				})();</script>
				</div>
		</div>
	</div>
</div>
