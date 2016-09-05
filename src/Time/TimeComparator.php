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

namespace Vain\Comparator\Time;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;
use Vain\Comparator\Result\ComparatorResultInterface;
use Vain\Time\TimeInterface;

/**
 * Class TimeComparator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class TimeComparator extends AbstractComparator
{
    /**
     * ValueComparator constructor.
     */
    public function __construct()
    {
        parent::__construct('time');
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function eq($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what === $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function neq($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what !== $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function lt($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what < $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function lte($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what <= $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function gt($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what > $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function gte($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult($what >= $against, $what, $against, $what->diff($against));
    }

    /**
     * @param TimeInterface   $what
     * @param TimeInterface[] $against
     *
     * @return ComparatorResultInterface
     */
    public function in($what, $against) : ComparatorResultInterface
    {
        list ($start, $end) = $against;

        return new ComparatorResult($what->between($start, $end), $what, $start, min($what->diff($start, true), $what->diff($end, true)));
    }

    /**
     * @param TimeInterface $what
     * @param TimeInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function like($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(false, $what, $against);
    }
}