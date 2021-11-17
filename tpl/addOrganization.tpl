<!-- Our BLog Section -->
<section class="Material-blog-section section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Добавить организацию</h1>
            </div>
        </div>
        <!-- SignUp Section -->
        <section id="reg" class="Material-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title -->
                    <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                        <p class="form-desc">Если вы являетесь благотворительной организацией, мы будем рады предоставить наш сервис для ваших предложений о помощи.</p>
                        <p class="form-desc">Вместе мы сделаем этот мир лучше</p>
                    </div>
                    <!-- contact form -->
                    <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                        <form action="index.php" class="shake" role="form" enctype="multipart/form-data" method="post" id="addOrganization" name="contact-form"
                              data-toggle="validator">
                            <!-- Name -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="name">Название</label>
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
                                <label class="control-label" for="description">Основная деятельнось</label>
                                <input class="form-control" id="description" type="text" name="description"
                                       data-error="Пожалуйста, напишите описание">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- contacts -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="contacts">Контакты</label>
                                <input class="form-control" id="contacts" type="text" name="contacts"
                                       data-error="Пожалуйста, добавьте контакты">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- logo -->
                            <div id="logo-load" class="form-group label-floating">
                                <label class="control-label" for="contacts">Логотип</label>
                                <input class="form-control" id="contacts" type="file" name="logo"
                                       data-error="Пожалуйста, добавьте логотип">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group label-floating">
                                <p>Рекомендуемое разрешение 300px*300px</p>
                            </div>
                            <input type="hidden" name="addOrganization" value="true" class="form-submit mt-5 hidden">
                            <!-- Form Submit -->
                            <div class="form-submit mt-5">
                                <button class="btn btn-common" type="submit" id="addOrganization"><i
                                            class="material-icons mdi mdi-account-plus"></i> Добавить
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