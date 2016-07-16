<?php /* @var $this Controller */ 
   
$this->pageTitle=Yii::app()->name;
?>

        <!-- Section - Our menu / Starts -->
        <section id="our-menu" class="our-menu">

            <!-- Container / Starts -->
            <div class="container">
                <h2 class="text-center wow fadeInDown">Чай</h2>

                <?php 
                  $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'template'=>'{summary}{items}{pager}',
                    'id'=>'tea-list',
                    'itemView'=>'_view',
                    'pagerCssClass'=>'items-pager',
                  )); 
                ?>                

                <!-- Row / Ends -->

            </div>
            <!-- Container / Ends -->

        </section>
        <!-- Section - Our menu / Ends -->