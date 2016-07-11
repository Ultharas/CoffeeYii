<?php /* @var $this Controller */ 
   
$this->pageTitle=Yii::app()->name;
?>

        <!-- Section - Our menu / Starts -->
        <section id="our-menu" class="our-menu">

            <!-- Container / Starts -->
            <div class="container">
                <h2 class="text-center wow fadeInDown">Чай</h2>

                <!-- Row / Starts -->
                <div class="row">

                    <!-- Split tea_categories array / Starts -->
                    <?php $tea_both_sides = array_chunk($tea_categories, round(sizeof($tea_categories) / 2)) ?>
                    <!-- Split tea_categories array / Ends -->

                    <?php foreach ($tea_both_sides as $tea_one_side): ?>

                        <div class="col-md-6 col-xs-12">
                    
                            <!-- Tea List / Starts -->                                                              
                            <?php foreach ($tea_one_side as $tea_category): ?>
                                
                                <div class="wow fadeInLeft">
                                    <h3><?php echo $tea_category['name']; ?></h3>
                                    <ul>                                        
                                        <?php foreach ($tea_category['tea'] as $tea_list): ?>
                                            <?php if ($tea_category['id'] == $tea_list['tea_category_id']): ?>
                                            <li>
                                                <h4 class="clearfix">
                                                    <?= mb_substr($tea_list['name'], 0, 1); ?><em><?= mb_substr($tea_list['name'], 1); ?></em>

                                                    <span> 
                                                        <?= $tea_list['price']; ?><i class="fa fa-rub"></i>
                                                    </span>
                                                </h4>
                                                <p> <?= $tea_list['description']; ?> </p>
                                            </li>   
                                            <?php endif ?>          
                                        <?php endforeach ?>

                                    </ul>
                                </div>
                            
                            <?php endforeach ?>
                            <!-- Tea List / Ends -->

                        </div>

                    <?php endforeach ?>

                    </div>
                </div>
                <!-- Row / Ends -->

            </div>
            <!-- Container / Ends -->

        </section>
        <!-- Section - Our menu / Ends -->