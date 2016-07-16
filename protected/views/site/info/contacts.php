<?php /* @var $this Controller */ 
   
$this->pageTitle=Yii::app()->name;
?>

<section id="contact" class="contact shadow_size">
      <div align="center" class="embed-responsive embed-responsive-16by9 trailer center-block">
                        <video autoplay loop class="embed-responsive-item someopacity">
                            <source src="<?php echo Yii::app()->request->baseUrl; ?>/video/beans.mp4" type="video/mp4">
                            <source src="<?php echo Yii::app()->request->baseUrl; ?>/video/beans.ogg" type="video/ogg">
                            <source src="<?php echo Yii::app()->request->baseUrl; ?>/video/beans.webm" type="video/webm">
                        </video> 
        </div> 
<!-- Container Starts -->
    <div class="container showme2">
    <!-- Main Heading Starts -->
        <div class="text-center">
            <h2 class="wow bounceInLeft">Контакты</h2>
            <p class="wow bounceInRight">
                Нас объединяет любовь к прекрасному напитку - кофе. Насладитесь аромагией великолепного вкуса, дайте время заслуженному отдыху, а мы создадим все условия для этого. 
            </p>
        </div>
    <!-- Main Heading Starts -->
        <div class="spacer"></div>
        <div class="row">
            <div class="col-md-6 col-xs-12 wow fadeInLeft">
            <!-- Contact Form Starts -->
                <div class="status alert alert-success"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="zakazmessage.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                        <!-- Name Field Starts -->
                            <div class="form-group">
                                <label for="name" class="sr-only">Ваше имя: </label>
                                <input type="text" class="form-control" name="name" id="name"  required="required" placeholder="Ваше имя">
                            </div>
                        <!-- Name Field Ends -->
                        </div>
                        <div class="col-md-6">
                        <!-- Email Field Starts -->
                            <div class="form-group">
                                <label for="phone" class="sr-only">Телефон: </label>
                                <input type="text" class="form-control" name="phone" id="phone"  required="required" placeholder="Телефон">
                            </div>
                        <!-- Email Field Ends -->
                        </div>
                        <div class="col-xs-12">
                        <!-- Message Field Starts -->
                            <div class="form-group">
                                <label for="message" class="sr-only">Сообщение: </label>
                                <textarea class="form-control" rows="3" name="message" id="message"  required="required" placeholder="Сообщение"></textarea>
                            </div>
                        <!-- Message Field Ends -->
                        </div>
                        <div class="col-xs-12">
                            <input name="s_submit" type="submit" class="btn btn-lg" value="Отправить сообщение">
                        </div>
                    </div>
                </form>
            <!-- Contact Form Ends -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
            <!-- Address Block Starts -->
                <h4>Адрес</h4>
                <ul class="list-unstyled">
                    <li>Москва, ул.Перерва дом 9 стр.2 </li>
                </ul>
            <!-- Address Block Ends -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight">
            <!-- Phone Number Block Starts -->
                <h4>Телефон</h4>
                <ul class="list-unstyled">
                    <li>(495) 669-86-56 </li>
                    <li> 8 (926) 071-41-91</li>
                </ul>
            <!-- Phone Number Block Ends -->
            <!-- Email Block Starts -->
                <h4>Email</h4>
                <ul class="list-unstyled">
                    <li>mskcofe@ya.ru</li>
                </ul>
            <!-- Email Block Ends -->
            </div>
        </div>
    </div>
<!-- Container Ends -->
</section>
<!-- Contact Section Ends -->
<!-- Map Section Starts -->

<div id="mapZ" class="showme mapZ embed-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1125.5517070681458!2d37.724041342738325!3d55.65241024313517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab47552319a37%3A0xb50d6f371beaef60!2z0YPQuy4g0J_QtdGA0LXRgNCy0LAsIDksINCc0L7RgdC60LLQsCwgMTA5NjUx!5e0!3m2!1sru!2sru!4v1418666485608?wmode=transparent" wmode="opaque" width="100%" height="700" frameborder="0" style="border:0;  position: relative;"></iframe>
</div>