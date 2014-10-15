<div class="col-md-9 p-zero">
	<div class="row">
		<div class="col-md-12 p-r-15">
			<h2 class="feature-title-tour f-left">DỊCH VỤ THUÊ XE</h2>

			<img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
				 height="50" alt="Goi tu van">
		</div>
	</div>
	<div class="col-md-12 p-r-15">
		<?php
		foreach ($posts as $key => $post) {
			$post_metas = Set::combine ($post['Postmetum'], '{n}.meta_key', '{n}');
			?>
			<div class="col-sm-6 col-md-4 p-zero">
				<div class="thumbnail">
					<a href="<?php
					echo $this->Html->url (
						array (
							  'controller' => 'posts',
							  'action' => 'view',
							  $type,
							  'url' => $post['Post']['url']
						)
					);
					?>">
						<img src="<?php echo '/'.$this->Image->resizedUrl ($post_metas['thumbnail']['meta_value'], 235, 150, 100, WWW_ROOT); ?>"
							 alt="<?php echo $post['Post']['title'] ?>">
					</a>

					<div class="caption">
						<a href="<?php
						echo $this->Html->url (
							array (
								  'controller' => 'posts',
								  'action' => 'view',
								  $type,
								  'url' => $post['Post']['url']
							)
						);
						?>"><h3><?php echo $post['Post']['title'] ?></h3></a>

						<p><strong>Đời xe:</strong> <?php echo $post_metas['modem']['meta_value']; ?></p>
					</div>
				</div>
			</div>
		<?php
		}
		?>

	</div>
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
