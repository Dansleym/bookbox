<?php

class Admin{

    /**
     * Returns books list by genre id
     * @param integer $id
     */
    public static function setBook($name_book,$description,$price,$author_id,$genre_id){

        $db = Db::getConnection();
        echo "<br>name_book " . $name_book;
        echo "<br>description " . $description;
        echo "<br>price " . $price;
        echo "<br>author_id " . $author_id;
        echo "<br>genre_id " . $genre_id . "<br>";

        try {
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT into books(name_book, description, price, author_id, genre_id, image)
            VALUES ('$name_book', '$description', '$price', '$author_id', '$genre_id', '10.jpg')";
            
            $db->exec($sql);
            $last_id = $db->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $db = null;
    }

    public static function delBook($id){

        $db = Db::getConnection();

        try {
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM books WHERE id=$id";
            
            $db->exec($sql);

            echo "Record deleted successfully";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $db = null;
    }

    public static function updBook($id,$name_book,$description,$price,$author_id,$genre_id){

        $db = Db::getConnection();

        try {
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE books SET name_book='$name_book', description='$description', price='$price', 
                    author_id='$author_id', genre_id='$genre_id', image='10.jpg' WHERE id=$id";
                   
            $db->exec($sql);

            echo "Record deleted successfully";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $db = null;
    }
}


