<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:02 PM
 */

namespace Vain\Comparator\Basic;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;

class BasicComparator extends AbstractComparator
{
    /**
     * @inheritDoc
     */
    public function eq($what, $against)
    {
        return new ComparatorResult($what === $against, $what, $against, abs($what - $against));
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against)
    {
        return new ComparatorResult($what !== $against, $what, $against, abs($what - $against));
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        return new ComparatorResult($what < $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        return new ComparatorResult($what <= $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        return new ComparatorResult($what > $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        return new ComparatorResult($what >= $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against)
    {
        return new ComparatorResult((bool)array_search($what, $against), $what, $against, $against);
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against)
    {
        return new ComparatorResult(false, $what, $against, $against);
    }
}