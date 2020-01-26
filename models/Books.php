<?php

class Books{

    public static function getBooksListByAuthor($id){

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT books.id, books.name_book, books.description, books.price, 
                                 books.image, authors.name_author, authors.information 
                                 FROM books 
                                 INNER JOIN authors ON books.author_id=authors.id 
                                 WHERE books.id='. $id);
              
            $catalogItems = array();
            $i = 0;

            while($row = $result->fetch()){
                $catalogItems[$i]['id'] = $row['id'];
                $catalogItems[$i]['name_book'] = $row['name_book'];
                $catalogItems[$i]['description'] = $row['description'];
                $catalogItems[$i]['price'] = $row['price'];
                $catalogItems[$i]['image'] = $row['image'];
                $catalogItems[$i]['name_author'] = $row['name_author'];
                $catalogItems[$i]['information'] = $row['information'];
                $i++;
            }
    
            return $catalogItems;
        }
    }

    /**
     * Returns single books item by id
     * @param integer $id
     */
    public static function getBooksItemById($id){
        $id = intval($id);

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT books.id, books.name_book, books.description, books.price, books.genre_id,
                                 books.image, books.author_id, authors.name_author, authors.information 
                                 FROM books INNER JOIN authors ON books.author_id=authors.id 
                                 WHERE books.id='. $id);

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

        $result = $db->query('SELECT books.id, books.name_book, books.description, 
                             books.price, books.image, authors.name_author 
                             FROM books 
                             INNER JOIN authors ON books.author_id=authors.id');

        $i = 0;

        while($row = $result->fetch()){
            $booksList[$i]['id'] = $row['id'];
            $booksList[$i]['name_book'] = $row['name_book'];
            $booksList[$i]['description'] = $row['description'];
            $booksList[$i]['price'] = $row['price'];
            $booksList[$i]['image'] = $row['image'];
            $booksList[$i]['name_author'] = $row['name_author'];
   
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
            $authorList[$i]['name_author'] = $row['name_author'];
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
            $booksList[$i]['name_book'] = $row['name_book'];
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