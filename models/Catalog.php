<?php

class Catalog{

    /**
     * Returns single books item by id
     * @param integer $id
     */
    public static function getCatalogItemById($id){

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT * from books WHERE genre_id='. $id);

            $catalogItems = array();
            $i = 0;

            while($row = $result->fetch()){
                $catalogItems[$i]['id'] = $row['id'];
                $catalogItems[$i]['name'] = $row['name'];
                $catalogItems[$i]['description'] = $row['description'];
                $catalogItems[$i]['price'] = $row['price'];
                $catalogItems[$i]['author_id'] = $row['author_id'];
                $catalogItems[$i]['genre_id'] = $row['genre_id'];
                $catalogItems[$i]['image'] = $row['image'];
                $i++;
            }
    
            return $catalogItems;
        }
    }
}