<section class="containerClimate marginDownDefault">
    <?php
        $api = new \models\climateModel;
        $response = $api->climate();
        $response->results;
        $image = $api->climate();
        $image = \models\climateModel::imageTime($response->results->condition_code);
    ?>
    <div class="wrap itemsFlex flexWrap alignCenter justCenter">
        <figure class="w100 imgBiggerTime textCenter">
            <img src="<?php echo BASE_TIMES; ?><?php echo $image; ?>" />
        </figure>
        <div class="content w90 center">
            <div class="row textCenter marginDownSmall">
                <h2 class="titleStrong"><?php echo $response->results->temp; ?>º</h2>
                <h4 class="marginDownSmallIn"><?php echo $response->results->city_name; ?></h4>
                <p class="paragraphOptionTwo"><?php echo $response->results->date; ?></p>
            </div>
            <div class="row itemsFlex alignCenter justSpaceEvenly">
                <div class="col textCenter w30">
                    <i data-feather="wind"></i>
                    <h6><?php echo $response->results->wind_speedy; ?></h6>
                    <p class="paragraphOptionTwo">Wind</p>
                </div>
                <div class="col textCenter w30">
                    <i data-feather="droplet"></i>
                    <h6><?php echo $response->results->humidity; ?>%</h6>
                    <p class="paragraphOptionTwo">Humidity</p>
                </div>
                <div class="col textCenter w30">
                    <i data-feather="thermometer"></i>
                    <h6><?php echo $response->results->temp; ?>º</h6>
                    <p class="paragraphOptionTwo">Degress</p>
                </div>
            </div>
        </div>
    </div>
    <?php //} ?>
</section>

<section class="listContainerClimate">
    <div class="wrap w90 center">
        <div class="text marginDownSmall itemsFlex alignCenter justSpaceBetween">
            <h4 class="w50">Today</h4>
            <p class="w50 textRight" href="<?php echo BASE; ?>days-time">6 days</p>
        </div>
        <div class="slide">
            <ul class="itemsFlex">
            <?php
                $api = new \models\climateModel;
                $response = $api->climate();
                for($i = 0; $i < 7; $i++){
                foreach($response->results->forecast[$i] as $key){
                    if($i == $i){  $i++; }
                    $images = $api->climate();
                    $images = \models\climateModel::imageTime($response->results->forecast[$i]->condition);
                ?>
                <li class="boxSmall textCenter marginRightSmall">
                    <h6><?php echo $response->results->forecast[$i]->max ?>º</h6>
                    <figure class="w100 imgSmallInTime textCenter">
                        <img src="<?php echo BASE_TIMES; ?><?php echo $images; ?>" />
                    </figure>
                    <p><?php echo $response->results->forecast[$i]->weekday ?></p>
                </li>
            <?php }} ?>
            </ul>
        </div>
    </div>
</section>