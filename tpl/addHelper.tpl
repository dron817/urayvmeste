<!-- Our BLog Section -->
<section class="Material-blog-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Предложить помощь</h1>
            </div>
        </div>
        <!-- SignUp Section -->
        <section id="reg" class="Material-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title -->
                    <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                        <p class="form-desc">Не можешь пройти мимо котенка на улице, всегда отзываешься на просьбы незнакомых людей.
                            Размести предложение о помощи, на нашем сайте, и оно не останется без внимания</p>
                        <p class="form-desc">Нажимая на кнопку "Предложить" вы соглашаетесь на обработку персональных данных  и передачу их третьим лицам</p>
                    </div>
                    <!-- contact form -->
                    <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                        <form action="index.php" class="shake" role="form" method="post" id="addHelper" name="contact-form"
                              data-toggle="validator">
                            <!-- Name -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="name">Имя</label>
                                <input class="form-control" id="name" type="text" name="name" required
                                       data-error="Пожалуйста, введите ваше имя">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- City -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="city">Город</label>
                                <input class="form-control" id="city" type="text" name="city"
                                       data-error="Пожалуйста, откуда вы">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Description -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="description">Чем вы можете помочь?</label>
                                <input class="form-control" id="description" type="text" name="description"
                                       data-error="Пожалуйста, напишите описание">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- email -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" required
                                       data-error="Пожалуйста, введите Email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- phone -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="phone">Телефон (не обязательно)</label>
                                <input class="form-control" id="phone" type="text" name="phone"
                                       data-error="Пожалуйста, введите номер телефона">
                                <div class="help-block with-errors"></div>
                            </div>
                            <input type="hidden" name="addHelper" value="true" class="form-submit mt-5 hidden">
                            <!-- Form Submit -->
                            <div class="form-submit mt-5">
                                <button class="btn btn-common" type="submit" id="addHelper"><i
                                            class="material-icons mdi mdi-account-plus"></i> Предложить
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- SignUp Section End -->
    </div>
</section>
<!-- Our BLog Section End -->