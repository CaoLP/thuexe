<div class="panel panel-default tour-right-panel">
	<!-- Default panel contents -->
	<div class="panel-heading header-style">Tour ngày mai</div>
	<div class="panel-body">
		<ul class="media-list">
			<?php
			foreach ($tomorrow as $key => $post) {
			$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
			$thumb = $post_metas['thumbnail']['meta_value'];
			?>
			<li class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="<?php echo '/'.$this->Image->resizedUrl($post_metas['thumbnail']['meta_value'],80,48,100,WWW_ROOT);?>" alt="<?php echo $post['Post']['title'];?>">
				</a>
				<div class="media-body">
					<span class="feature-title m-0"><?php echo $post['Post']['title'];?></span>
				</div>
			</li>
			<?php
			}
			?>
		</ul>
	</div>

</div>
<div class="panel panel-default tour-right-panel">
	<!-- Default panel contents -->
	<div class="panel-heading header-style">Khuyến mãi</div>
	<div class="panel-body">
		<?php
		$promotes = Configure::read ('W.promote');
		?>
		<?php
		if(is_array($promotes))
		foreach ($promotes as $promote) {
			$d = json_decode ($promote, true);
			?>
			<a href="<?php echo $d['link']; ?>">
				<img class="img-responsive" src="<?php echo '/'. $d['picInput']; ?>" alt="<?php echo $d['title']; ?>">
			</a>
			<hr>
		<?php
		}
		?>
	</div>

</div>