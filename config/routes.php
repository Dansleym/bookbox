<?php

return array(
    'books/([0-9]+)' => 'books/view/$1',
    'author/([0-9]+)' => 'books/author/$1',
    'books' => 'books/index',

    'catalog/([0-9]+)' => 'catalog/view/$1',

    '' => 'mainpage/index',
);