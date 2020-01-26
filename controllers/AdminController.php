<?php

class AdminController{
  
    public function __construct(){
        $_SESSION['admin']=1;
    }

    public function actionIndex(){
        $booksList = array();
        $booksList = Books::getBooksList();

        $genresList = array();
        $genresList = Genres::getGenresList();

        require_once(ROOT.'/views/admin/updbook.php');
        return true;
    }

    public function actionUpdBook($id){

        if($id){
            $booksItem = Books::getBooksItemById($id);

            $genresList = array();
            $genresList = Genres::getGenresList();

            require_once(ROOT.'/views/admin/updbook.php'); 
        }
        return true; 
    }

    public function actionAddBook(){
        $genresList = array();
        $genresList = Genres::getGenresList();
        require_once(ROOT.'/views/admin/addbook.php');

        return true; 
    }

}