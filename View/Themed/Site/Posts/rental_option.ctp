<?php
setlocale(LC_MONETARY, 'vi_VN');
?>
<div class="col-md-12 p-zero">
    <div class="row">
        <div class="col-md-12 p-r-15">
            <h2 class="feature-title-tour f-left">Dịch vụ thuê xe du lịch</h2>

            <img class="f-right" src="http://cdn.dulichhe.com/images/2014/goi-tu-van.gif" width="239"
                 height="50" alt="Goi tu van">
        </div>
        <hr>
    </div>
    <div class="col-md-12 p-r-15">
        <div class="header-fixed-table">
            <div class="outer">
                <div class="inner">
                    <table class="table table-bordered table-hover table-striped table-t">
                        <tbody>
                        <tr>
                            <th class="td-responsive th" style="background-color: #0066CC">Lịch trình</th>
                            <td class="td" style="background-color: #0066CC;"><strong>Ngày</strong></td>
                            <?php
                            foreach ($car_types as $type) {
                                echo '<td class="will-hide td"  style="background-color:  #FFCC00"><strong>' . $type . '</strong></td>';
                            }
                            ?>

                        </tr>
                        <?php
                        $count = 0;
                        foreach ($rental_options as $post_id => $rental_option) {
                            ?>
                            <tr>
                                <th class="th">
									<?php echo $rental_option; ?>
									<br>
									<table class="will-show">
										<tr>
											<?php
											foreach ($car_types as $type_id => $type) {
												?>
													<th style="background-color:  #FFCC00"><?php echo $type; ?></th>
											<?php
											}
											?>
										</tr>
										<tr>
											<?php
											foreach ($car_types as $type_id => $type) {
												$price = $carTypeCars[$post_id . '_' . $type_id]['CarTypeCar']['price'];
												?>
													<td><span class="price-text"><?php echo  money_format('%.0n', $price) ;?></span></td>

											<?php
											}
											?>
										</tr>
									</table>

								</th>
                                <td style="text-align: right" class="td">
                                    <strong><?php
                                        echo $days_vi[$opts[$post_id]];
                                        ?></strong>
                                </td>
                                <?php
                                foreach ($car_types as $type_id => $type) {
                                    $price = $carTypeCars[$post_id . '_' . $type_id]['CarTypeCar']['price'];
                                    ?>
                                    <td style="text-align: right; width:100px" class="will-hide td">
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
