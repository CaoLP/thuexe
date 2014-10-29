<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo $this->Html->url ('/', true) ?></loc>
		<lastmod><?php echo date ('c', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.5</priority>
	</url>
	<url>
		<loc><?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'car_rental'), true); ?></loc>
		<lastmod><?php echo date ('c', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.5</priority>
	</url>
	<url>
		<loc><?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', 'rental_option'), true); ?></loc>
		<lastmod><?php echo date ('c', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.5</priority>
	</url>
	<url>
		<loc><?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', 'daily_tour'), true); ?></loc>
		<lastmod><?php echo date ('c', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.5</priority>
	</url>
	<url>
		<loc><?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', 'weekly_tour'), true); ?></loc>
		<lastmod><?php echo date ('c', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.5</priority>
	</url>
	<url>
		<loc><?php echo $this->Html->url (array ('controller' => 'contacts', 'action' => 'contact'), true); ?></loc>
		<lastmod><?php echo date ('c', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.5</priority>
	</url>
	<?php
	foreach ($posts as $post) {
		?>
		<url>
			<loc><?php echo $this->Html->url (array (
													'controller' => 'posts',
													'action' => 'view',
													$post['Post']['type'],
													'url' => $post['Post']['url']
											  ), true); ?></loc>
			<lastmod><?php echo date ('c', time()); ?></lastmod>
			<changefreq>daily</changefreq>
			<priority>0.5</priority>
		</url>
	<?php
	}
	?>
</urlset>