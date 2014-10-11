<nav class="navbar navbar-inverse" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-cog"></i>
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url(array('controller'=>'dashboard','action'=>'dashboard'));?>">Base Admin 3.0</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>

                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>
                        <?php echo $this->Session->read ('Auth.User.name');?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout'));?>">
                    <i class="icon-power-off"></i>
                    Logout
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>


