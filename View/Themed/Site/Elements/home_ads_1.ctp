<div class="panel panel-default tour-right-panel">
	<!-- Default panel contents -->
	<div class="panel-heading header-style">Tour ngày mai</div>
	<div class="panel-body">
		<ul class="media-list">
			<li class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="..." alt="...">
				</a>
				<div class="media-body">
					<span class="media-heading">Media heading Media headingMedia headingMedia headingMedia headingMedia headingMedia headingMedia headingMedia heading Media headingMedia headingMedia heading</span>
					...
				</div>
			</li>
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
				<img class="img-responsive" src="<?php echo $d['picInput']; ?>" alt="<?php echo $d['title']; ?>">
			</a>
			<hr>
		<?php
		}
		?>
	</div>

</div>