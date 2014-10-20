<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand p-top-20 home-icon" href="/"><i class="glyphicon glyphicon-home"></i></a>
</div>
<div class="navbar-collapse  collapse">
	<ul class="nav navbar-nav">
		<li class="<?php
		if ($this->request->action == 'car_rental')
			echo 'active';
		?> w-t"><a href="<?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'car_rental')); ?>">THÔNG
				TIN XE</a></li>
		<li class="<?php
		if (isset($type) && $type == 'rental_option')
			echo 'active';
		?> w-t">
			<a href="<?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', 'rental_option')); ?>">BÁO
				GIÁ XE</a></li>
		<li class="<?php
		if (isset($type) && $type == 'daily_tour')
			echo 'active';
		?> w-t">
			<a href="<?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', 'daily_tour')); ?>">TOUR
				HẰNG NGÀY</a></li>
		<li class="<?php
		if (isset($type) && $type == 'weekly_tour')
			echo 'active';
		?> w-t">
			<a href="<?php echo $this->Html->url (array ('controller' => 'posts', 'action' => 'index', 'weekly_tour')); ?>">TOUR
				HẰNG TUẦN</a></li>
		<li class="<?php
		if ($this->request->action == 'contact')
			echo 'active';
		?> w-t"><a href="<?php echo $this->Html->url (array ('controller' => 'contacts', 'action' => 'contact')); ?>">LIÊN
				HỆ</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a href="#" data-toggle="modal" data-target="#myModal">
				<i class="glyphicon glyphicon-envelope"></i>
			</a>
		</li>
		<li>
			<a href="#" data-toggle="modal" data-target="#myModal">
				<i class="glyphicon glyphicon-phone"></i>
			</a>
		</li>
		<li class="custom-drop">
			<a>
				<i class="glyphicon glyphicon-search"></i>
			</a>
			<ul class="dropdown-menu container" role="menu" aria-labelledby="dLabel">
				<form action="<?php echo $this->Html->url(array('controller'=>'posts','action'=>'search'))?>" method="post">
				<li class="col-lg-12">
					<div class="input-group">
						<input type="text" name="data[q]" class="form-control">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="submit">Tìm kiếm</button>
						  </span>
					</div><!-- /input-group -->
				</li>
				</form>
			</ul>
		</li>
	</ul>

</div>