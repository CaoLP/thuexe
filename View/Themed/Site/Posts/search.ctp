<?php
setlocale (LC_MONETARY, 'vi_VN');
?>
<div class="col-md-9 p-zero">
	<div class="row">
		<div class="col-md-12 p-r-15">
			<h2 class="feature-title-tour f-left">KẾT QUẢ TÌM KIẾM</h2>

			<img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
				 height="50" alt="Goi tu van">
		</div>
	</div>
	<div class="row">
		<ul class="media-list">
			<?php
			foreach ($posts as $key => $post) {
				$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
				?>

				<li class="media">
					<a class="pull-left" href="<?php
					echo $this->Html->url (
						array (
							  'controller' => 'posts',
							  'action' => 'view',
							  $post['Post']['type'],
							  'url' => $post['Post']['url']
						)
					);
					?>" title="<?php echo $post['Post']['title'] ?>">
						<img class="media-object"
							 src="<?php echo '/' . $this->Image->resizedUrl ($post_metas['thumbnail']['meta_value'], 125, 74, 100, WWW_ROOT); ?>"
							 alt="<?php echo $post['Post']['title'] ?>">
					</a>

					<div class="media-body">
						<a class="pull-left" href="<?php
						echo $this->Html->url (
							array (
								  'controller' => 'posts',
								  'action' => 'view',
								  $post['Post']['type'],
								  'url' => $post['Post']['url']
							)
						);
						?>" title="<?php echo $post['Post']['title'] ?>">
							<h4 class="media-heading"><?php echo $post['Post']['title'] ?></h4>
							<?php echo $post['Post']['excerpt'] ?>
					</div>
					</a>
				</li>


			<?php
			}
			?>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12 p-r-15">
			<ul class="pagination f-right">
				<?php
				echo $this->Paginator->prev (__ ('&laquo;'), array ('tag' => 'li', 'escape' => false), null, array ('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a', 'escape' => false));
				echo $this->Paginator->numbers (array ('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
				echo $this->Paginator->next (__ ('&raquo;'), array ('tag' => 'li', 'currentClass' => 'disabled', 'escape' => false), null, array ('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a', 'escape' => false));
				?>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-3 p-zero">

	<?php echo $this->element ('home_ads_1') ?>
	<?php echo $this->element ('home_ads_2') ?>
</div>
