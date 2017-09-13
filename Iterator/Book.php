<?php

namespace Iterator;

/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2017/09/12
 * Time: 19:47
 */
class Book
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }
}