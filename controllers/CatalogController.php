<?php

class CatalogController
{
    /**
     * @return bool
     */
    public function actionIndex() {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(8);

        require_once(ROOT.'/views/catalog/index.php');
        return true;
    }

    /**
     * @param int $categoryId
     * @param int $page
     * @return bool
     */
    public function actionCategory($categoryId, $page = 1) {
        $categories = array();
        $categories = Category::getCategoryList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT.'/views/catalog/category.php');
        return true;
    }

}