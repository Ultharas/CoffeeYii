<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

        <!-- Slider Section Starts -->
        <section class="slider clearfix">
            <div id="camera_wrap_1" class="camera_wrap">

                <!-- Slide #1 Starts -->
                <div data-src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/slide1.jpg">
                    <div class="camera_caption fadeFromBottom hidden-xs">
                        <h1>Мы рады видеть Вас на страницах сайта Компании «Mskcofe»</h1>
                        <p>
                            Мы работаем в сфере кофейного оборудования и напитков с 2001 года. За долгий путь своего становления и развития мы видели, с чего начиналось рождение данной индустрии в нашей стране, помним времена, когда кофемашина считалась небывалой роскошью, и мало кто мог позволить себе такое устройство.  
                        </p>
                    </div>
                </div>
                <!-- Slide #1 Ends -->

                <!-- Slide #2 Starts -->
                <div data-src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/slide2.jpg">
                    <div class="camera_caption fadeFromBottom hidden-xs">
                        <h1>Доступные цены, гибкие условия сотрудничества, профессионализм</h1>
                        <p>
                            Как истинные поклонники своего дела мы выбираем для Вас только лучшее, предоставляя свои услуги на самых выгодных условиях, нам важен индивидуальный подход к каждому, учитываем желания и потребности нашей аудитории. Мы готовы предложить Вам только качественную, надежную, проверенную временем продукцию.
                        </p>
                    </div>
                </div>
                <!-- Slide #2 Ends -->

            </div>
        </section>
        <!-- Slider Section Ends -->

        <!-- Featured Block Starts -->
        <div class="featured-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <a id="tea-anchor" href="/tea">
                            <div class="wow bounceInUp">
                                <img class="img-responsive new-pic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/menu_icons/tea-anchor.png" alt="Regular coffee">
                                <h3>Чай</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <a id="coffee-machine-anchor">
                            <div class="wow bounceIn">
                                <img class="img-responsive new-pic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/menu_icons/coffee-machine-anchor.png" alt="Desserts menu">
                                <h3>Кофейные аппараты</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <a id="coffee-anchor" href="/coffee">
                            <div class="wow bounceInDown">
                                <img class="img-responsive new-pic" src="<?php echo Yii::app()->request->baseUrl; ?>/images/index/menu_icons/coffee-anchor.png" alt="Daily specials">
                                <h3>Кофе</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Block Ends -->

        <!-- About Section Starts -->
        <section id="about" class="about">

            <!-- Container Starts -->
            <div class="container">

                <!-- Welcome Block Starts -->
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="wow bounceInLeft">
                            <br><br><br><br>
                            <h2>Аренда кофемашин</h2>
                            <p class="lead">
                                Себестоимость порции кофе+сахар+посуда +сервисное обслуживание = <span>8.70
                                <i class="fa fa-rub"></i></span><br>
                                <span>1 кг</span> кофе = <span>125 - 145</span> чашек кофе
                            </p>
                            <p>
                                Бесплатное тех. обслуживание и обучение Ваших сотрудников<br>
                                Предоставляется посуда под: американо, эспрессо и капучино<br>
                                На каждый кг. кофе 1 кг. пакетированного сахара<br>
                                Доставка кофе по Москве  <span class="free">бесплатная!</span><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="wow bounceInRight">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/about-img1(new).png" alt="Welcome! To Coffee House">
                        </div>
                    </div>
                </div>
                <!-- Welcome Block Ends -->

                <!-- Today's Special Box Starts -->
                <div class="spl-box wow bounceInUp">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/about/about-img2(new).png" alt="One stop for your traditional coffee">
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <br><br>
                            <h2>Элитные сорта чая</h2>
                            <p class="lead">
                                Представляем Вашему вниманию только лучшие сорта чая от известных производителей
                            </p>
                            <p>
                                Желтый, белый, зеленый, пуэр… Какой же выбрать? Вы можете ознакомиться с полезными свойствами чая и выбрать желаемый, прочитав интересную информацию о чае. А мы, в свою очередь, обеспечим качественную поставку различных сортов чая. Ввиду того, что ассортимент столь велик и постоянно пополняется новыми видами, за более подробной информацией обращайтесь по телефону (495) 669-86-56. С нашей продукцией чайная церемония превратится в незабываемое удовольствие неповторимого вкуса и аромата!
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Today's Special Box / Ends -->

            </div>
            <!-- Container / Ends -->

        </section>
        <!-- About Section / Ends -->
    

        <!-- Coffee-Machine / Starts -->

        <section id="coffee-machine" class="coffee-machine">

            <? if ($cafe_machines || $office_machines): ?>
        
                <!-- Container / Starts -->
                <div class="container">
                    
                    <!-- Cafe Coffee Machines / Starts -->
                    <? if ($cafe_machines): ?>

                        <h2 class="text-center wow fadeInDown">Профессиональное кофейное оборудование для кафе и ресторанов</h2>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">

                                <? foreach($cafe_machines as $coffee_machine): ?>

                                    <div class="wow fadeInLeft">
                                        <a href="<?= Yii::app()->request->baseUrl; ?>/article/cafe/<?= rtrim(preg_replace('/[\+\.]/', '-', urlencode($coffee_machine['name'])), "-") ?>">
                                            <h3><?= $coffee_machine['name']; ?></h3>
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
                                                    <?= $coffee_machine['power']; ?> Вт<br>
                                                    <?= $coffee_machine['water_tank_volume']; ?> л<br>
                                                    <?= $coffee_machine['ability_connections_for_water_supply']; ?><br>
                                                    <?= $coffee_machine['width'] . '*' .  $coffee_machine['height'] . '*' . $coffee_machine['depth']; ?><br>
                                                    <?= $coffee_machine['weight']; ?><br>
                                                </div>
                                            </div>
                                            <div class="machine-pic">
                                                <img src="<?= Yii::app()->request->baseUrl; ?>/images/coffee-machine/<?= $coffee_machine['img']; ?>" alt="<?= $coffee_machine['name'] ?>">
                                            </div>
                                            <li>
                                                <p> 
                                                    <strong>Включает в себя:</strong><br>
                                                    <?= $coffee_machine['includes']; ?>   
                                                </p>
                                            </li>
                                            <a href="<?= Yii::app()->request->baseUrl; ?>/coffee_machine/cafe/<?= rtrim(preg_replace('/[\+\.]/', '-', urlencode($coffee_machine['name'])), "-") ?>">
                                                <img src="<?= Yii::app()->request->baseUrl; ?>/images/basket.png" alt="basket">
                                            </a>
                                            <h4 class="clearfix"><span><?= $coffee_machine['price']; ?><i class="fa fa-rub"></i></span></h4>
                                        </ul>
                                    </div>  

                                <? endforeach ?>

                            </div>
                        </div>

                    <? endif ?>
                    <!-- Cafe Coffee Machines / Ends -->
                    
                    <!-- Office Coffee Machine / Starts -->
                    <? if ($office_machines): ?>
                        
                        <h2 class="text-center wow fadeInDown">Аренда кофемашин в офис</h2>
                
                        <? foreach ($office_machines as $coffee_machine): ?>
                    
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="wow zoomIn">
                                    <a href="<?= URL ?>article/office/<?= $office['url_name']; ?>">
                                        <h3 class="text-center"><?= $coffee_machine['name']; ?></h3>
                                    </a>
                                    <div class="office-machines">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/coffee-machine/<?= $coffee_machine['img']; ?>" alt="<?= $coffee_machine['name']; ?>">  
                                    </div>
                                    <a href="<?= URL ?>coffee_machine/office/<?= rtrim(preg_replace('/[\+\.]/', '-', urlencode($coffee_machine['name'])), "-") ?>">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/basket.png" alt="basket">
                                    </a>
                                </div>
                            </div>                  

                        <? endforeach ?>             

                    <? endif ?>
                    <!-- Office Coffee Machine / Ends -->
                
                </div>
                <!-- Container / ENDS -->

            <? endif ?>
            
            <? $coffee_little_pic = '<img src="' . Yii::app()->request->baseUrl . '/images/alta_espresso1.png" alt="кофе"> ' ?>

            <h3 class="text-center wow fadeInDown somemargin">Цены на аренду кофемашин в офис</h3>
            <table class="rent-table">
                <tr>
                    <th></th>
                    <th>Кол-во кофе</th>
                    <th>Цена</th>
                    <th>Сахар</th>
                    <th>Себестоимость порции</th>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?= $coffee_little_pic ?>
                    </td>
                    <td>1 кг.кофе</td>
                    <td>2700 <i class="fa fa-rub"></i>/мес</td>
                    <td>нет</td>
                    <td>20 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 2; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>2 кг.кофе</td>
                    <td>3300 <i class="fa fa-rub"></i>/мес</td>
                    <td>нет</td>
                    <td>12 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 3; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>3 кг.кофе</td>
                    <td>4000 <i class="fa fa-rub"></i>/мес</td>
                    <td>нет</td>
                    <td>10 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 4; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>4 кг.кофе</td>
                    <td>5000 <i class="fa fa-rub"></i>/мес</td>
                    <td>нет</td>
                    <td>9,3 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 5; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>5 кг.кофе</td>
                    <td>6000 <i class="fa fa-rub"></i>/мес</td>
                    <td>5 кг. сахара</td>
                    <td>9 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 6; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>6 кг.кофе</td>
                    <td>6600 <i class="fa fa-rub"></i>/мес</td>
                    <td>6 кг. сахара</td>
                    <td>8,25 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 7; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>7 кг.кофе</td>
                    <td>7350 <i class="fa fa-rub"></i>/мес</td>
                    <td>7 кг. сахара</td>
                    <td>7,8 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 8; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>8 кг.кофе</td>
                    <td>8000 <i class="fa fa-rub"></i>/мес</td>
                    <td>8 кг. сахара</td>
                    <td>7,5 <i class="fa fa-rub"></i></td>
                </tr>
                <tr>
                    <td class="coffee-count">
                        <?php for($i = 0; $i < 9; $i++) echo $coffee_little_pic; ?>
                    </td>
                    <td>более 8 кг</td>
                    <td>цена договорная</td>
                    <td>9 кг. сахара</td>
                    <td>&lt; 7,5 <i class="fa fa-rub"></i></td>
                </tr>
            </table>

        </section>
        <!-- Coffee-Machine / Ends -->
