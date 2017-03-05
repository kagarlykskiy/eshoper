<?php include ROOT . '/views/layouts/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin">Админпанель</a></li>
                        <li><a href="/admin/product">Управление товарами</a></li>
                        <li class="active">Добавить новый товар</li>
                    </ol>
                </div>
                <hr>

                <h4>Добавить новый товар</h4>

                <br/>

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="col-lg-5">
                    <div class="login-form">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <p>Название товара</p>
                            <input class="form-control" type="text" name="name" placeholder="" value="" required>

                            <p>Артикул</p>
                            <input class="form-control" type="text" name="code" placeholder="" value="" required>

                            <p>Стоимость, $</p>
                            <input class="form-control" type="text" name="price" placeholder="" value="" required>

                            <p>Категория</p>
                            <select class="form-control" name="category_id">
                                <?php if (is_array($categoriesList)): ?>
                                    <?php foreach ($categoriesList as $category): ?>
                                        <option value="<?php echo $category['id']; ?>">
                                            <?php echo $category['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>

                            <br/>

                            <p>Производитель</p>
                            <input class="form-control" type="text" name="brand" placeholder="" value="" required>

                            <p>Изображение товара</p>
                            <input type="file" name="image" placeholder="" value="" class="input-file">

                            <p>Детальное описание</p>
                            <textarea class="form-control" rows="6" name="description" required></textarea>
                            <br/>

                            <p>Наличие на складе</p>
                            <select class="form-control" name="availability">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>

                            <br/><br/>

                            <p>Новинка</p>
                            <select class="form-control" name="is_new">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>

                            <br/><br/>

                            <p>Рекомендуемые</p>
                            <select class="form-control" name="is_recommended">
                                <option value="1" selected="selected">Да</option>
                                <option value="0">Нет</option>
                            </select>

                            <br/><br/>

                            <p>Статус</p>
                            <select class="form-control" name="status">
                                <option value="1" selected="selected">Отображается</option>
                                <option value="0">Скрыт</option>
                            </select>

                            <br/><br/>

                            <input class="form-control btn btn-default" type="submit" name="submit" value="Сохранить">

                            <br/><br/>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>