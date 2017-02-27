<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
            <?php if(isset($result) && $result): ?>
                <div class="alert alert-success" role="alert">
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                  Вы успешно зарегестрированы!
                </div>
            <?php else: ?>
                <div class="signup-form">
                    <h2 style='text-align: center;'><b>Регистрация на сайте</b></h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Имя" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];} else {echo '';}?>">
                        <input type="email" name="email" placeholder="E-mail" value="<?php if(isset($_POST['email'])) {echo $_POST['email'];} else {echo '';}?>">
                        <input type="password" name="password" placeholder="Пароль" value="<?php if(isset($_POST['password'])) {echo $_POST['password'];} else {echo '';}?>">
                        <input type="submit" name="submit" class="btn btn-default" value="Регистрация">
                    </form><hr>
                    <?php if(isset($errors) && is_array($errors)): ?>
                        <?php foreach ($errors as $error): ?>
                            <div class="alert alert-danger" role="alert">
                                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                  <?=$error?>
                             </div>
                        <?php endforeach; ?>
                   <?php endif; ?>
            <?php endif; ?>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>
