<div class="view">

        <div class="col-md-6 col-xs-12">

            <!-- Coffee List / Starts -->
            <div class="wow fadeInLeft">
                <h3>
                    <?= $data->name; ?></h3>
                <ul>
                    <img src="/images/coffee/<?= $data->img; ?>">
                    <li>
                        <p>
                            <span>Расфасовка</span>
                            :
                            <?= $data->packing; ?> кг
                            <br>
                            <span>Упаковка</span>
                            :
                            <?= $data->wrapping; ?>
                            <br>
                            <span>Срок хранения</span>
                            :
                            <?= $data->storage; ?> месяцев
                            <br>
                            <?= $data->roast; ?> обжарка
                            <br>                    
                            <span>Купаж</span>
                            :
                            <?= $data->blend; ?>
                            <br>
                            <span>Описание</span>
                            :
                            <?= $data->description; ?>
                        </p>
                    </li>
                </ul>
            </div>
            <!-- Coffee List / Ends -->
        </div>
    
</div>