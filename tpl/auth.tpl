<div class="row">
    <!-- Section Titile -->
    <div class="col-md-3"></div>
    <div class="col-md-6 wow animated fadeInLeft" data-wow-delay=".2s">
        <h1 class="section-title">Авторизация для %form-name%</h1>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <!-- contact form -->
    <div class="col-md-3"></div>
    <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
        <form action="index.php" class="shake" role="form" method="post" id="auth" name="contact-form"
              data-toggle="validator">
            <!-- Name -->
            <div class="form-group label-floating">
                <label class="control-label" for="login">Логин</label>
                <input class="form-control" id="login" type="text" name="login" required
                       data-error="Пожалуйста, введите ваш логин">
                <div class="help-block with-errors"></div>
            </div>
            <!-- password -->
            <div class="form-group label-floating">
                <label class="control-label" for="password">Пароль</label>
                <input class="form-control" minlength="6" id="password" type="password" name="password" required
                       data-error="Пожалуйста, введите ваш пароль">
                <div class="help-block with-errors"></div>
            </div>
            <input type="hidden" name="auth" value="true" class="form-submit mt-5 hidden">
            <!-- Form Submit -->
            <div class="form-submit mt-5">
                <button class="btn btn-common" type="submit" id="auth"><i
                            class="material-icons mdi mdi-arrow-right-bold"></i> Войти
                </button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>