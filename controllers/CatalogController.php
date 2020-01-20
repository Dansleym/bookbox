<?php

include_once ROOT . '/models/Catalog.php';
include_once ROOT . '/models/Genres.php';
include_once ROOT . '/models/Books.php';

class CatalogController{

    public function actionIndex(){
        $catalogList = array();
        $catalogList = Catalog::getCatalogsList();

        require_once(ROOT.'/views/catalog/index.php');

        return true;
    }

    public function actionView($catalog){
        if($catalog){
            $catalogItems = Catalog::getCatalogItemById($catalog);

            $genresList = array();
            $genresList = Genres::getGenresList();

            $authorsList = Books::getBookAuthorsList();
            
            require_once(ROOT.'/views/catalog/view.php');
        }
        return true;
    }
}