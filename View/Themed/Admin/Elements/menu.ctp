<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-reorder"></i>

            </a>

            <div class="collapse subnav-collapse">
                <ul class="mainnav">

                    <li class="">
                        <a href="<?php echo $this->Html->url(array('controller'=>'dashboard','action'=>'index'))?>">
                            <i class="icon-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-th"></i>
                            <span>Dịch vụ thuê xe</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'index','car_rental'))?>">Xe</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'index','rental_option'))?>">Chặn đi</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller'=>'car_types','action'=>'index'))?>">Loại xe</a></li>
                            <li><a href="<?php echo $this->Html->url(array('controller'=>'car_type_cars','action'=>'index'))?>">Sắp giá cho loại xe</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'index','daily_tour'))?>">
                            <i class="icon-circle"></i>
                            <span>Tour hằng ngày</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'index','weekly_tour'))?>">
                            <i class="icon-calendar"></i>
                            <span>Tour hằng tuần</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo $this->Html->url(array('controller'=>'options','action'=>'index'))?>">
                            <i class="icon-gear"></i>
                            <span>Tùy chỉnh</span>
                        </a>
                    </li>

                </ul>
            </div> <!-- /.subnav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
