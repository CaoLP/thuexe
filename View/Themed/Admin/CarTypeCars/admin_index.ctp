<div class="col-md-12">

    <div class="widget stacked">

        <div class="widget-header">
            <i class="icon-pushpin"></i>

            <h3><?php echo $title_for_layout; ?></h3>
        </div>
        <!-- /widget-header -->
        <div class="widget-content">
            <?php echo $this->Form->create('CarTypeCar'); ?>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <?php
                            foreach ($car_types as $type) {
                                echo '<th>' . $type . '</th>';
                            }
                            ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count =0;
                        foreach ($rental_options as $post_id=>$rental_option) {
                            ?>
                            <tr>
                                <td><?php echo $rental_option; ?></td>
                                <?php
                                foreach ($car_types as $type_id=>$type) {
                                    echo '<td>';
                                    $price = 0;
                                    if(in_array($post_id.'_'.$type_id,array_keys($carTypeCars))){
                                        $price = $carTypeCars[$post_id.'_'.$type_id]['CarTypeCar']['price'];
                                        echo $this->Form->hidden($count.'.id',array('value'=>$carTypeCars[$post_id.'_'.$type_id]['CarTypeCar']['id']));
                                    }
                                    echo $this->Form->input($count.'.price',
                                        array(
                                            'div' => false,
                                            'label' => false,
                                            'required'=>false,
                                            'class'=>'num-only',
                                            'type'=>'text',
                                            'value'=>$price
                                        )
                                    );
                                    echo $this->Form->hidden($count.'.post_id',array('value'=>$post_id));
                                    echo $this->Form->hidden($count.'.car_type_id',array('value'=>$type_id));
                                    echo '</td>';
                                    $count++;
                                }
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <?php echo $this->Form->button('Save', array('class' => 'btn btn-primary btn-support-ask form-control')); ?>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
<?php
$this->Html->scriptStart(array('inline' => false));
?>
$(document).ready(function(){
    $('.num-only').on('change',function(){
        $(this).val($(this).val().replace(/[^0-9\\.]+/g, ""));
    });
    $('.num-only').on('keyup',function(){
        $(this).val($(this).val().replace(/[^0-9\\.]+/g, ""));
    });
});
<?php
$this->Html->scriptEnd();
?>