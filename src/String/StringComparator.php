<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:10 PM
 */

namespace Vain\Comparator\String;

use Vain\Comparator\AbstractComparator;

class StringComparator extends AbstractComparator
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
        return $what !== $against;
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        return strcmp($what, $against) < 0;
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        return strcmp($what, $against) <= 0;
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        return strcmp($what, $against) > 0;
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        return strcmp($what, $against) >= 0;
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
        return 1 === preg_match("/$what/", $against);
    }
}