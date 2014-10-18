<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo Configure::read('W.Site.name');?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');

    echo $this->Html->css(
        array(
            'cake.generic',
            'bootstrap.min',
            'bootstrap-responsive.min',
            'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600',
            'font-awesome.min',
            '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css',
//            'jquery-ui-1.10.0.custom.min',
            'base-admin-3',
            'base-admin-3-responsive',
            'dashboard',
            'bootstrap-multiselect',
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

<?php
echo $this->element('nav_top');
echo $this->element('menu');
?>

<div class="main">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo $this->Html->getCrumbList(array('class' => 'breadcrumb'), array('text' => 'Dashboard', 'url' => '/admin'));
                ?>
            </div>
        </div>
        <div class="row">


            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>

    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
<?php
echo $this->Html->script(
    array(
//        'jquery-1.9.1.min',
        '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
        '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js',
//        'jquery-ui-1.10.0.custom.min',
        'bootstrap.min',
        'Application',
        'ckeditor/ckeditor',
        'jquery.slug',
        'bootstrap-multiselect',
        'admin'
    )
);
echo $this->fetch('script');
?>
</html>

