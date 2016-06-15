<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:10 PM
 */

namespace Vain\Comparator\String;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;

class StringComparator extends AbstractComparator
{
    /**
     * StringComparator constructor.
     */
    public function __construct()
    {
        parent::__construct('string');
    }

    /**
     * @inheritDoc
     */
    public function eq($what, $against)
    {
        return new ComparatorResult($what === $against, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against)
    {
        return new ComparatorResult($what !== $against, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        return new ComparatorResult(strcmp($what, $against) < 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        return new ComparatorResult(strcmp($what, $against) <= 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        return new ComparatorResult(strcmp($what, $against) > 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        return new ComparatorResult(strcmp($what, $against) >= 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against)
    {
        return new ComparatorResult((bool)array_search($what, $against), $what, $against);
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against)
    {
        return new ComparatorResult((bool)preg_match("/$what/", $against), $what, $against);
    }
}