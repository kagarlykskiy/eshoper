<?php

class News
{
    //возвращает массив новостей
    public static function getNewsList()
    {
        $db = Db::getConnection();

        $newsList = array();
        $result = $db->query("SELECT id,title,date,short_content,author_name FROM news ORDER BY date ASC LIMIT 5;");

        $i = 0;

        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $i++;
        }

        return $newsList;
    }

    //возвращает новость по переданному id
    public static function getNewsById($id)
    {
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();

            $result = $db->query("SELECT * from news WHERE id=".$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
}