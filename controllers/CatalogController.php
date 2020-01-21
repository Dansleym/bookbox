<?php

class CatalogController{

    public function actionIndex(){
        $genresList = array();
        $genresList = Genres::getGenresList();

        $catalogList = array();
        $catalogList = Books::getBooksList();

        require_once(ROOT.'/views/catalog/index.php');

        return true;
    }

    public function actionView($catalog){
        if($catalog){
            $catalogItems = Catalog::getCatalogItemById($catalog);

            $genresList = array();
            $genresList = Genres::getGenresList();
            
            require_once(ROOT.'/views/catalog/view.php');
        }
        return true;
    }

    public function getAuthor($catalog){
        if($catalog){
            $catalogItems = Catalog::getCatalogItemById($catalog);

            $genresList = array();
            $genresList = Genres::getGenresList();
            
            require_once(ROOT.'/views/catalog/view.php');
        }
        return true;
    }
}