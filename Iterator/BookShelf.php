<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2017/09/12
 * Time: 19:48
 */

namespace Iterator;


class BookShelf implements Aggregate
{
    /**
     * @var Book array
     */
    private $books = [];

    /**
     * @var int
     */
    private $last = 0;

    /**
     * @param $index int
     * @return Book
     */
    public function getBookAt(int $index) :Book
    {
        return $this->books[$index];
    }

    /**
     * @param Book $book
     */
    public function add(Book $book) :void
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * @return int
     */
    public function getLength() :int
    {
        return $this->last;
    }

    /**
     * @return Iterator
     */
    public function iterator() :Iterator
    {
        return new BookShelfIterator($this);
    }
}