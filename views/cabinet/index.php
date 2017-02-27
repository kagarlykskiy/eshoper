<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
            <div class="row">
                <h2>Кабинет пользователя</h2><br>
                <div class="col-md-3">
                    <h4>Привет, <?php echo $user['name'];?></h4>
                    <hr>
                    <div class="list-group">
                        <a href="/cabinet/edit" class="list-group-item">Редактировать данные</a>
                        <a href="/cabinet/history" class="list-group-item">Список покупок</a>
                    </div>
                </div>

            </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>