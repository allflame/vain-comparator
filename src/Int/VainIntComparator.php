<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:02 PM
 */

namespace Vain\Comparator\Int;

use Vain\Comparator\AbstractVainComparator;

class VainIntComparator extends AbstractVainComparator
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