<?php

require_once __DIR__ . '/../vendor/autoload.php';

$book_shelf = new \Iterator\BookShelf();

$book_shelf->add(new \Iterator\Book('デザインパターン'));
$book_shelf->add(new \Iterator\Book('パーフェクトPHP'));
$book_shelf->add(new \Iterator\Book('リーダブルコード'));

$book_shelf_iterator = $book_shelf->iterator();

while ($book_shelf_iterator->hasNext()) {
    echo $book_shelf_iterator->next()->getName() . PHP_EOL;
}
