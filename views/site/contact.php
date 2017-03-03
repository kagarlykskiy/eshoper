<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <div class="alert alert-success" role="alert">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        Сообщение отправлено! Мы ответим Вам на указанный email.
                    </div>
                <?php else: ?>
                     <div class="signup-form"><!--sign up form-->
                        <h2>Обратная связь</h2>
                        <h5>Есть вопрос? Напишите нам</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" required value="<?php echo $userEmail; ?>"/>
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Сообщение" required value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                         <hr>
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


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
<!--
--><?php /*include ROOT . '/views/layouts/footer.php'; */?>