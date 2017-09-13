<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2017/09/12
 * Time: 19:52
 */

namespace Iterator;


interface Iterator
{
    /**
     * @return bool
     */
    public function hasNext() :bool;

    /**
     * @return object
     */
    public function next();
}