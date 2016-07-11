<?php /* @var $this Controller */ 
   
$this->pageTitle=Yii::app()->name;
?>

        <!-- Section - Our menu / Starts -->
        <section id="our-menu" class="our-menu">

            <!-- Container / Starts -->
            <div class="container">
                <h2 class="text-center wow fadeInDown">Чай</h2>

                <?php foreach ($tea_categories as $tea_category): ?>

                    <h3><?php echo $tea_category['name']; ?></h3>

                    <!-- Row / Starts -->
                    <div class="row">

                    <!-- Tea List / Starts -->                                                                                   
                        
                        <?php foreach ($tea_category['tea'] as $tea): ?>
                        <div class="col-md-6 col-xs-12">
                                
                            <div class="wow fadeInLeft">
                                
                                <ul> 
                                    <li>
                                        <h4 class="clearfix">
                                            <?= mb_substr($tea['name'], 0, 1); ?><em><?= mb_substr($tea['name'], 1); ?></em>

                                            <span> 
                                                <?= number_format($tea['price'], 0, ',', ' '); ?><i class="fa fa-rub"></i>
                                            </span>
                                        </h4>
                                        <p> <?= $tea['description']; ?> </p>
                                    </li>        
                                </ul>
                            </div>
                        </div>

                        <?php endforeach ?>

                    
                     <!-- Tea List / Ends -->

                    </div>
                    <?php endforeach ?>
                </div>
                <!-- Row / Ends -->

            </div>
            <!-- Container / Ends -->

        </section>
        <!-- Section - Our menu / Ends -->