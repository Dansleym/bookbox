<?php

class AdminController{

    public function actionIndex(){
        $booksList = array();
        $booksList = Books::getBooksList();

        require_once(ROOT.'/views/admin/index.php');

        return true;
    }

    public function actionView($id){
        if($id){
            $checkR = Genres::getGenresList();
            if($id == '2'){
                $id=1000;
                require_once(ROOT.'/views/admin/view.php');
            }
             else{
                require_once(ROOT.'/views/admin/view.php');
             }
        }
        return true;
    }

    public function actionBook($id){
        if($id){
            $booksItem = Books::getBooksItemById($id);

            $genresList = array();
            $genresList = Genres::getGenresList();

            require_once(ROOT.'/views/admin/book.php');
        }
        return true;
    }
}