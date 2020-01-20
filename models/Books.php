<?php

class Books{

    /**
     * Returns single books item by id
     * @param integer $id
     */
    public static function getBooksItemById($id){
        $id = intval($id);

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT * from books WHERE id='. $id);

            $booksItem = $result->fetch();
    
            return $booksItem;
        }

    }

    /**
     * Returns an array of books by author
     */
    public static function getBooksItemByAuthor($id){
        $id = intval($id);

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT * from authors WHERE id='. $id);

            $booksItem = $result->fetch();
    
            return $booksItem;
        }
    }

    /**
     * Returns an array of books items
     */
    public static function getBooksList(){
        
        $db = Db::getConnection();

        $booksList = array();

        $result = $db->query('SELECT id, name, description, price, author_id, genre_id, image FROM books');
        $i = 0;

        while($row = $result->fetch()){
            $booksList[$i]['id'] = $row['id'];
            $booksList[$i]['name'] = $row['name'];
            $booksList[$i]['description'] = $row['description'];
            $booksList[$i]['price'] = $row['price'];
            $booksList[$i]['author_id'] = $row['author_id'];
            $booksList[$i]['genre_id'] = $row['genre_id'];
            $booksList[$i]['image'] = $row['image'];
            $i++;
        }

        return $booksList;
    }

    public static function getBookAuthorsList(){

        $db = Db::getConnection();

        $authorList = array();

        $result = $db->query('SELECT * from authors');
        $i = 0;

        while($row = $result->fetch()){
            $authorList[$i]['id'] = $row['id'];
            $authorList[$i]['name'] = $row['name'];
            $authorList[$i]['information'] = $row['information'];
            $i++;
        }

        return $authorList;
        
    }

    public static function getBooksListById($id){
        $id = intval($id);

        if($id){
            $db = Db::getConnection();

             $booksList = array();

            $result = $db->query('SELECT * from books WHERE author_id='. $id);

        $i = 0;

        while($row = $result->fetch()){
            $booksList[$i]['id'] = $row['id'];
            $booksList[$i]['name'] = $row['name'];
            $booksList[$i]['description'] = $row['description'];
            $booksList[$i]['price'] = $row['price'];
            $booksList[$i]['author_id'] = $row['author_id'];
            $booksList[$i]['genre_id'] = $row['genre_id'];
            $booksList[$i]['image'] = $row['image'];
            $i++;
        }

        return $booksList;
        }

    }
}