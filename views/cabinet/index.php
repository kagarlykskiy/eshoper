<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <h2 class="cabinet">Кабинет пользователя</h2><br>
            <div class="row">


                <div class="col-md-4">
                    <h5>Привет, <?php echo $user['name'];?></h5>
                    <hr>
                    <div class="list-group">
                        <a href="/cabinet/edit" class="list-group-item">Редактировать данные</a>
                        <a href="/cabinet/history" class="list-group-item">Список покупок</a>
                    </div>
                </div>

            </div>
        <br><br><br><br><br><br>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>