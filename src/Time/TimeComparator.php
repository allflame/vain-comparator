<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/5/16
 * Time: 12:21 PM
 */

namespace Vain\Comparator\Time;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\ComparatorInterface;

class TimeComparator extends AbstractComparator implements ComparatorInterface
{
    /**
     * @inheritDoc
     */
    public function eq($what, $against)
    {
        return $what === $against;
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against)
    {
        return $what != $against;
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        return $what < $against;
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        return $what <= $against;
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        return $what > $against;
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        return $what >= $against;
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against)
    {
        return array_search($what, $against); 
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against)
    {
        return false;
    }
}