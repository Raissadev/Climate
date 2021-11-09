<section class="listContainerDaysTime marginDownDefault">
    <?php
        $api = new \models\climateModel;
        $response = $api->climate();
        $response->results;
        $image = $api->climate();
        $image = \models\climateModel::imageTime($response->results->condition_code);
    ?>
    <div class="wrap itemsFlex flexWrap alignCenter justCenter">
        <figure class="w50 imgMiddleTime textCenter">
            <img src="<?php echo BASE_TIMES; ?><?php echo $image; ?>" />
        </figure>
        <div class="content w50 center">
            <div class="row marginDownSmall">
                <h2 class="titleStrongIn"><?php echo $response->results->temp; ?>º</h2>
                <h4 class="marginDownSmallIn"><?php echo $response->results->city_name; ?></h4>
                <p class="paragraphOptionTwo"><?php echo $response->results->date; ?></p>
            </div>
        </div>
        <div class="row w90 center itemsFlex alignCenter justSpaceEvenly">
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
    <?php ?>
</section>

<section class="listContainerTime">
    <div class="wrap w90 center">
        <div class="slide">
            <ul>
            <?php
                $api = new \models\climateModel;
                $response = $api->climate();
                for($i = 0; $i < 7; $i++){
                    foreach($response->results->forecast[$i] as $key){
                        if($i == $i){  $i++; }
                        $images = $api->climate();
                        $images = \models\climateModel::imageTime($response->results->forecast[$i]->condition);
            ?>
                <li class="boxMiddle marginDownSmall itemsFlex alignCenter justCenter">
                    <div class="row w30 itemsFlex alignCenter">
                        <p><?php echo $response->results->forecast[$i]->weekday ?></p>
                    </div>
                    <div class="row w30 itemsFlex alignCenter justCenter">
                    <figure class="w50 imgTooSmallTime textCenter marginRightSmallIn">
                        <img src="<?php echo BASE_TIMES; ?><?php echo $images; ?>" />
                    </figure>
                    <p><?php echo $response->results->forecast[$i]->condition ?></p>
                    </div>
                    <div class="row w30 itemsFlex alignCenter justEnd">
                        <h6>+<?php echo $response->results->forecast[$i]->max ?>º</h6>
                        <p class="paragraphOptionThree marginLeftSmall">-<?php echo $response->results->forecast[$i]->min ?>º</p>
                    </div>
                </li>
            <?php }} ?>
            </ul>
        </div>
    </div>
</section>