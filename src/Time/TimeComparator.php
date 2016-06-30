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
namespace Vain\Comparator\Time;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;
use Vain\Time\TimeInterface;

/**
 * Class TimeComparator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class TimeComparator extends AbstractComparator
{
    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function eq($what, $against)
    {
        return new ComparatorResult($what === $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function neq($what, $against)
    {
        return new ComparatorResult($what !== $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function lt($what, $against)
    {
        return new ComparatorResult($what < $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function lte($what, $against)
    {
        return new ComparatorResult($what <= $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function gt($what, $against)
    {
        return new ComparatorResult($what > $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function gte($what, $against)
    {
        return new ComparatorResult($what >= $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface[] $against
     *
     * @return ComparatorResult
     */
    public function in($what, $against)
    {
        list ($start, $end) = $against;

        return new ComparatorResult($what->between($start, $end), $what, $start, min($what->diff($start, true), $what->diff($end, true)));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResult
     */
    public function like($what, $against)
    {
        return new ComparatorResult(false, $what, $against);
    }
}