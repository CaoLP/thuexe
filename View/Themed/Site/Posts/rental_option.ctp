<?php
setlocale(LC_MONETARY, 'vi_VN');
?>
<div class="col-md-12 p-zero">
    <div class="row">
        <div class="col-md-12 p-r-15">
            <h2 class="feature-title-tour f-left">BÁO GIÁ XE CÁC CHẶN</h2>

            <img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
                 height="50" alt="Goi tu van">
        </div>
    </div>
    <div class="col-md-12 p-r-15">
        <div class="header-fixed-table">
            <div class="outer">
                <div class="inner">
                    <table class="table table-bordered table-hover table-striped ">
                        <tbody>
                        <tr>
                            <th>#</th>
                            <?php
                            foreach ($car_types as $type) {
                                echo '<td style="text-align: right; width:100px">' . $type . '</td>';
                            }
                            ?>

                        </tr>
                        <?php
                        $count = 0;
                        foreach ($rental_options as $post_id => $rental_option) {
                            ?>
                            <tr>
                                <th><?php echo $rental_option; ?></th>
                                <?php
                                foreach ($car_types as $type_id => $type) {
                                    $price = $carTypeCars[$post_id . '_' . $type_id]['CarTypeCar']['price'];
                                    ?>
                                    <td style="text-align: right; width:100px">
                                        <span class="price-text"><?php echo money_format('%.0n', $price) ?></span>
                                    </td>
                                <?php
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
        </div>
    </div>
</div>
