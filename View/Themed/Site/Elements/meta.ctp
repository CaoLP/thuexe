<?php if (isset($post['Seo']['meta_keywords']) && !empty($post['Seo']['meta_keywords'])) { ?>
	<meta name="keywords" content="<?php echo $post['Seo']['meta_keywords']; ?>">
<?php } else { ?>
	<meta name="keywords" content="<?php echo Configure::read ('W.Meta.keywords'); ?>">
<?php } ?>

<?php if (isset($post['Seo']['meta_description']) && !empty($post['Seo']['meta_description'])) { ?>
	<meta name="description" content="<?php echo $post['Seo']['meta_description']; ?>">
<?php } else { ?>
	<meta name="description" content="<?php echo Configure::read ('W.Meta.description'); ?>">
<?php } ?>

<?php if (isset($post['Seo']['meta_robots']) && !empty($post['Seo']['meta_robots'])) { ?>
	<meta name="robots" content="<?php echo $post['Seo']['meta_robots']; ?>">
<?php } else { ?>
	<meta name="robots" content="<?php echo Configure::read ('W.Meta.robots'); ?>">
<?php } ?>

<meta property="og:locale" content="vi_VN"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?php echo Configure::read ('W.Site.name'); ?> | <?php echo $title_for_layout ?>"/>
<?php if (isset($post['Seo']['meta_description']) && !empty($post['Seo']['meta_description'])) { ?>
	<meta property="og:description" content="<?php echo $post['Seo']['meta_description']; ?>"/>
<?php } else { ?>
	<meta property="og:description" content="<?php echo Configure::read ('W.Meta.description'); ?>"/>
<?php } ?>
<meta property="og:url" content="<?php echo $this->Html->url ($this->here, true); ?>"/>
<meta property="og:site_name" content="<?php echo Configure::read ('W.Site.name'); ?>"/>