<div class="view">
    
    <div class="wow fadeInLeft">
        <a href="<?= Yii::app()->request->baseUrl; ?>/article/cafe/<?= rtrim(preg_replace('/[\+\.]/', '-', urlencode($data->name)), "-") ?>">
            <h3><?= $data->name; ?></h3>
        </a>
        <ul>
            <div class="options">
                <div class="options-left">
                    Мощность: <br>
                    Объем резервуара для воды: <br>
                    Возможность подключения к водопроводу: <br>
                    Размеры (Ш*В*Г) см: <br>
                    Вес:<br>
                </div>
                <div class="options-right">
                    <?= $data->power; ?> Вт<br>
                    <?= $data->water_tank_volume; ?> л<br>
                    <?= $data->ability_connections_for_water_supply; ?><br>
                    <?= $data->width . '*' .  $data->height . '*' . $data->depth; ?><br>
                    <?= $data->weight; ?><br>
                </div>
            </div>
            <div class="machine-pic">
                <img src="<?= Yii::app()->request->baseUrl; ?>/images/coffee-machine/<?= $data->img; ?>" alt="<?= $data->name ?>">
            </div>
            <li>
                <p> 
                    <strong>Включает в себя:</strong><br>
                    <?= $data->includes; ?>   
                </p>
            </li>
            <a href="<?= Yii::app()->request->baseUrl; ?>/coffee_machine/cafe/<?= rtrim(preg_replace('/[\+\.]/', '-', urlencode($data->name)), "-") ?>">
                <img src="<?= Yii::app()->request->baseUrl; ?>/images/basket.png" alt="basket">
            </a>
            <h4 class="clearfix"><span><?= $data->price; ?><i class="fa fa-rub"></i></span></h4>
        </ul>
    </div>

</div>