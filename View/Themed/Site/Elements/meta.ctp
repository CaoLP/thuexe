<meta name="keywords" content="<?php echo Configure::read('W.Meta.keywords');?>">
<meta name="description" content="<?php echo Configure::read('W.Meta.description');?>">
<meta name="robots" content="<?php echo Configure::read('W.Meta.robots');?>">

<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo Configure::read('W.Site.name');?> | <?php echo $title_for_layout?>" />
<meta property="og:description" content="<?php echo Configure::read('W.Meta.description');?>" />
<meta property="og:url" content="<?php echo $this->Html->url($this->here,true);?>" />
<meta property="og:site_name" content="<?php echo Configure::read('W.Site.name');?>" />