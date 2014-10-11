<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>Dashboard :: Base Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');

    echo $this->Html->css(
        array(
            'bootstrap.min',
            'bootstrap-responsive.min',
            'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600',
            'font-awesome.min',
            'jquery-ui-1.10.0.custom.min',
            'base-admin-3',
            'base-admin-3-responsive',
            'signin',
            'custom'
        )
    );
    ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php
    echo $this->fetch('css');
    ?>
</head>

<body>
<div class="account-container stacked">

    <div class="content clearfix">
            <?php echo $this->fetch('content'); ?>

    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
<?php
echo $this->Html->script(
    array(
        'jquery-1.9.1.min',
        'jquery-ui-1.10.0.custom.min',
        'bootstrap.min',
        'Application',
    )
);
echo $this->fetch('script');
?>
</html>

