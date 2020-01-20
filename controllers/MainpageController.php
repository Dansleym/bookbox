<?php

include_once ROOT . '/models/Books.php';
include_once ROOT . '/models/Genres.php';

class MainpageController{
    public function actionIndex(){

        $booksList = array();
        $booksList = Books::getBooksList();

        $genresList = array();
        $genresList = Genres::getGenresList();

        require_once(ROOT. '/views/mainpage/index.php');

        return true;
    }
}