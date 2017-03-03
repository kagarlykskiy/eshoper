<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <div class="signup-form"><!--sign up form-->
                    <h2>Вход на сайт</h2>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form><hr>
                    <?php if (isset($errors) && is_array($errors)): ?>
                            <?php foreach ($errors as $error): ?>
                                <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <?=$error?>
                                </div>
                            <?php endforeach; ?>
                    <?php endif; ?>
                </div><!--/sign up form-->
                <br/><br/>
                <br/><br/><br/><br/><br/><br/>
            </div>
        </div>
    </div>
</section>
