<?php

class Genres{

    /**
     * Returns an array of genres items
     */
    public static function getGenresList(){

        $db = Db::getConnection();

        $genresList = array();

        $result = $db->query('SELECT id, name_genre FROM genres');
        $i = 0;

        while($row = $result->fetch()){
            $genresList[$i]['id'] = $row['id'];
            $genresList[$i]['name_genre'] = $row['name_genre'];
            $i++;
        }

        return $genresList;
    }
}