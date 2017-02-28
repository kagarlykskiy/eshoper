<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-3 padding-right">
                
                <?php if (isset($result) && $result): ?>
                    <div class="alert alert-success" role="alert">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        Данные успешно измененны!
                    </div>
                <?php else: ?>
                    <div class="signup-form"><!--sign up form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>">
                            
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Введите новый пароль">
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" >
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
                
                <?php endif; ?>
                <br><br><br><br>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>