<?php
    return array(
        'product/([0-9]+)' => 'product/view/$1',
        'catalog' => 'catalog/index',
        'category/([0-9]+)' => 'catalog/category/$1',
        '' => 'site/index'
    );