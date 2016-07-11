<?php /* @var $this Controller */ 
   
$this->pageTitle=Yii::app()->name;
?>

<!-- Section - Coffee menu / Starts -->
<section class="our-menu coffee-menu">

    <!-- Container / Starts -->
    <div class="container">
        <h2 class="text-center wow fadeInDown">Кофе</h2>

        <!-- Row / Starts -->
        <div class="row">
            
            <?php $coffee_both_sides = array_chunk($coffee_list, round(sizeof($coffee_list) / 2)) ?>

            <?php foreach ($coffee_both_sides as $coffee_one_side): ?>

            <div class="col-md-6 col-xs-12">

                <!-- Coffee List / Starts -->
                <?php foreach ($coffee_one_side as $coffee): ?>
                <div class="wow fadeInLeft">
                    <h3>
                        <?= $coffee['name']; ?></h3>
                    <ul>
                        <img src="/images/coffee/<?= $coffee['img']; ?>">
                        <li>
                            <p>
                                <span>Расфасовка</span>
                                :
                                <?= $coffee['packing']; ?> кг
                                <br>
                                <span>Упаковка</span>
                                :
                                <?= $coffee['wrapping']; ?>
                                <br>
                                <span>Срок хранения</span>
                                :
                                <?= $coffee['storage']; ?> месяцев
                                <br>
                                <?= $coffee['roast']; ?> обжарка
                                <br>                    
                                <span>Купаж</span>
                                :
                                <?= $coffee['blend']; ?>
                                <br>
                                <span>Описание</span>
                                :
                                <?= $coffee['description']; ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <?php endforeach ?>
                <!-- Coffee List / Ends -->
            </div>
            <?php endforeach ?>

        </div>
        <!-- Row / Ends -->

    </div>
    <!-- Container Ends -->
    
</section>
<!-- Section - Coffee menu / Ends -->          