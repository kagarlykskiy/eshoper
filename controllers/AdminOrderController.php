<?php

class AdminOrderController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();

        $ordersList = Order::getOrderList();

        require_once(ROOT . '/views/admin_order/index.php');
        return true;
    }


    /**
     * Action для страницы "Просмотр заказа"
     */
    public function actionView($id)
    {
    // Проверка доступа
    self::checkAdmin();
    // Получаем данные о конкретном заказе
    $order = Order::getOrderById($id);
    // Получаем массив с идентификаторами и количеством товаров
    $productsQuantity = json_decode($order['products'], true);
    // Получаем массив с индентификаторами товаров
    $productsIds = array_keys($productsQuantity);
    // Получаем список товаров в заказе
    $products = Product::getProdustsByIds($productsIds);
    // Подключаем вид
    require_once(ROOT . '/views/admin_order/view.php');
    return true;
     }

     public function actionUpdate($id)
     {
         // Проверка доступа
         self::checkAdmin();

         // Получаем данные о конкретном заказе
         $order = Order::getOrderById($id);

         if (isset($_POST['submit'])) {
             // Если форма отправлена
             // Получаем данные из формы
             $userName = $_POST['userName'];
             $userPhone = $_POST['userPhone'];
             $userComment = $_POST['userComment'];
             $date = $_POST['date'];
             $status = $_POST['status'];
             // Сохраняем изменения
             Order::updateOrderById($id, $userName, $userPhone, $userComment, $date, $status);
             // Перенаправляем пользователя на страницу управлениями заказами
             header("Location: /admin/order/view/$id");
         }

         require_once(ROOT . '/views/admin_order/update.php');
         return true;
     }

    /**
     * Action для страницы "Удалить заказ"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем заказ
            Order::deleteOrderById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/order");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }


}