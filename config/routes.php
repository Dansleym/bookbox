<?php

return array(
    'books/([0-9]+)' => 'books/view/$1',
    'author/([0-9]+)' => 'books/author/$1',
    'books' => 'books/index',
 
    'catalog/([0-9]+)' => 'catalog/view/$1',
    'catalog' => 'catalog/index',

    'buyform/([0-9]+)' => 'mainpage/buyform/$1',

    'admin/([0-9]+)' => 'admin/view/$1',
    'admin/updbook/([0-9]+)' => 'admin/updbook/$1',
    'admin/addbook' => 'admin/addBook',

    'admin' => 'admin/index',

    
    '' => 'mainpage/index',   
);