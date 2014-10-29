<footer>
	<div class="text-center">
		Kết nối với <strong><?php echo Configure::read('W.Site.name');?></strong>
	</div>
	<div class="text-center">
		<ul class="connect">
			<li><a href="<?php echo Configure::read('W.Social.facebook');?>"><img src="/img/social-fa.gif" alt="Saigontourist" width="50"
					 height="50"></a></li>
			<li><a href="<?php echo Configure::read('W.Social.googleplus');?>"><img src="/img/social-google-plus3.gif"
					 alt="Google+ Saigontourist" width="50" height="50"></a></li>
			<li><a href="<?php echo Configure::read('W.Social.twitter');?>"><img src="/img/social-twitter.gif" alt="Twitter Saigontourist"
					 width="50" height="50"></a></li>
			<li><a href="<?php echo Configure::read('W.Social.youtube');?>"><img src="/img/social-youtube.gif" width="50" height="50"
					 alt="Youtube"></a></li>
		</ul>
	</div>
</footer>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo Configure::read('W.Site.googleanalytics');?>', 'auto');
	ga('send', 'pageview');

</script>