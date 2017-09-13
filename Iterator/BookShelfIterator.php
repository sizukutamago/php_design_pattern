<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2017/09/12
 * Time: 19:53
 */

namespace Iterator;


class BookShelfIterator implements Iterator
{
    /**
     * @var BookShelf
     */
    private $bookShelf;

    /**
     * @var int
     */
    private $index;

    /**
     * BookShelfIterator constructor.
     * @param BookShelf $bookShelf
     */
    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    /**
     * @return Book
     */
    public function next() :Book
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }

    /**
     * @return bool
     */
    public function hasNext() :bool
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }
}