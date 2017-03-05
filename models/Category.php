<?php

class Category
{
    public static function getCategoryList()
    {
        $db = Db::getConnection();

        $categoryList = array();
        $result = $db->query("SELECT id,name FROM category WHERE status = 1 ORDER BY sort_order ASC;");
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }

    /**
     * Возвращает массив категорий для списка в админпанеле <br>
     * (при этом в результат попадают и включенные и выключенные категории)
     * @return array <p>Массив категорий</p>
     */
    public static function getCategoriesListAdmin()
    {
        $db = Db::getConnection();

        $categoryList = array();
        $result = $db->query("SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC");
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }



}