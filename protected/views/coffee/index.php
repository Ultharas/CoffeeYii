<?php /* @var $this Controller */ 
   
$this->pageTitle=Yii::app()->name;
?>

<!-- Section - Coffee menu / Starts -->
<section class="our-menu coffee-menu">

    <!-- Container / Starts -->
    <div class="container">
        <h2 class="text-center wow fadeInDown">Кофе</h2>

        <!-- Row / Starts -->

        <?php 
          $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'template'=>'{summary}{items}{pager}',
            'id'=>'coffee-list',
            'itemView'=>'_view',
            'pagerCssClass'=>'items-pager',
            'itemsCssClass'=>'items row',
          )); 
        ?>

        <!-- Row / Ends -->

    </div>
    <!-- Container Ends -->
    
</section>
<!-- Section - Coffee menu / Ends -->          