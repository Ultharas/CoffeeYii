<div class="view">

    <h3><?php echo $data->name; ?></h3>

    <!-- Row / Starts -->
    <div class="row">

    <!-- Tea List / Starts -->                                                                                   
        
        <?php foreach ($data->tea as $tea): ?>
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

</div>