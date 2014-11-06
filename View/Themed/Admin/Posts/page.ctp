<?php
$edit = true;
?>
<script>
    var url = '<?php echo $this->Html->url(array(
				'plugin'=>'el_finder',
				'controller'=>'el_finder',
				'action' =>'browse'
			));?>'
</script>
<?php
$this->Html->addCrumb($title_for_layout, array('action' => 'index',$type));
if ($this->request->params['action'] == 'admin_add') {

    $this->Html->addCrumb((isset($typeName) ? $$typeName : __('New Post')), '/' . $this->request->url);
} else {
    $this->Html->addCrumb($this->request->data['Post']['title'], '/' . $this->request->url);
}
?>
<div class="col-md-9">
    <div class="widget stacked ">
        <div class="widget-header">
            <i class="icon-user"></i>

            <h3><?php echo isset($title_for_layout) ? $title_for_layout : 'Post'; ?></h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#posts" data-toggle="tab"><?php echo __('Contents'); ?></a>
                    </li>
					<li class="">
						<a href="#seo" data-toggle="tab"><?php echo __('Seo'); ?></a>
					</li>
                </ul>
                <br>

                <div class="tab-content">
                    <div class="tab-pane active" id="posts">
                        <div class="posts">
                            <?php echo $this->Form->create('Post', array('class' => 'col-md-12')); ?>
                            <?php
                            echo $this->Form->hidden('id');
                            $this->Form->inputDefaults(array(
                                'div' => array('class' => 'form-group'),
                                'class' => 'form-control'
                            ));
                            echo $this->Form->input('title',array('label'=>array('text'=>'Title')));
                            echo $this->Form->input('url', array('class' => 'form-control slug'));
                            //                            echo $this->Form->input('parent_id',array('label'=>array('text'=>'M?c cha')));
                            echo $this->Form->hidden('status', array('value' => 1));
                            echo $this->Form->hidden('type', array('value' => $type));
                            echo $this->Form->input('excerpt', array('label' => array('text' => 'Mô tả ngắn')));
                            echo $this->Form->input('body', array('label' => array('text' => 'Nội dung')));
                            ?>

                        </div>
                    </div>
					<div class="tab-pane" id="seo">
						<?php
						if(isset($this->request->data['Seo']['id']))
							echo $this->Form->hidden('Seo.id');
						echo $this->Form->hidden('Seo.post_id', array('value' =>$this->request->data['Post']['id']));
						echo $this->Form->input('Seo.meta_keywords');
						echo $this->Form->input('Seo.meta_description');
						echo $this->Form->input('Seo.meta_robots');
						echo $this->Form->input('Seo.changefreq');
						echo $this->Form->input('Seo.priority');
						?>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="widget widget-plain">
        <div class="widget-content">
            <div class="form-group">
                <?php echo $this->Form->button('Save', array('class' => 'btn btn-primary btn-support-ask form-control')); ?>
            </div>
        </div>
        <!-- /widget-content -->
    </div>
    <!-- /widget -->
</div>
<?php echo $this->Form->end(); ?>
<!-- Add this html to your page -->
<div class="modal fade" id="elfinder-dialog" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-original-title="">×
                </button>
                <h4 class="modal-title">Quản lý file</h4>
            </div>
            <div class="modal-body">
                <div class="well-sm">
                    <div id="elfinder-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
