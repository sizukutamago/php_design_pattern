<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2017/09/12
 * Time: 19:51
 */

namespace Iterator;


interface Aggregate
{
    /**
     * @return Iterator
     */
    public function iterator() :Iterator;
}