<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:02 PM
 */

namespace Vain\Comparator\Basic;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparableResult;

class BasicComparator extends AbstractComparator
{
    /**
     * @inheritDoc
     */
    public function eq($what, $against)
    {
        return new ComparableResult($what === $against, $what, $against, abs($what - $against));
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against)
    {
        return new ComparableResult($what !== $against, $what, $against, abs($what - $against));
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        return new ComparableResult($what < $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        return new ComparableResult($what <= $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        return new ComparableResult($what > $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        return new ComparableResult($what >= $against, $what, $against, abs($against - $what));
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against)
    {
        return new ComparableResult((bool)array_search($what, $against), $what, $against, $against);
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against)
    {
        return new ComparableResult(false, $what, $against, $against);
    }
}