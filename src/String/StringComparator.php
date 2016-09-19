<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-comparator
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-comparator
 */
declare(strict_types = 1);

namespace Vain\Comparator\String;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;
use Vain\Comparator\Result\ComparatorResultInterface;

/**
 * Class StringComparator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
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
    public function eq($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what === $against, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what !== $against, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(strcmp($what, $against) < 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(strcmp($what, $against) <= 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(strcmp($what, $against) > 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(strcmp($what, $against) >= 0, $what, $against, levenshtein($what, $against));
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult((bool)array_search($what, $against), $what, $against);
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult((bool)preg_match("/$what/", $against), $what, $against);
    }
}