<div class="panel panel-default tour-right-panel">
	<!-- Default panel contents -->
	<div class="panel-heading header-style">Kết nối với chúng tôi</div>
	<div class="panel-body" style="overflow-x: hidden">
		<div class="fb-like-box"
			 data-href="<?php echo Configure::read('W.Social.facebook');?>"
			 data-colorscheme="light"
			 data-show-faces="true"
			 data-header="true"
			 data-stream="false"
			 data-show-border="false"
			 data-width="234"></div>
	</div>

</div>
<div class="panel panel-default tour-right-panel">
	<!-- Default panel contents -->
	<div class="panel-heading header-style">Lựa chọn khác</div>
	<div class="panel-body">
		<?php
		$ads = Configure::read ('W.ads');
		?>
		<?php
		foreach ($ads as $ad) {
			$d = json_decode ($ad, true);
			?>
			<a href="<?php echo $d['link']; ?>">
				<img class="img-responsive" src="<?php echo  $d['picInput']; ?>" alt="<?php echo $d['title']; ?>">
			</a>
			<hr>
		<?php
		}
		?>
	</div>

</div>