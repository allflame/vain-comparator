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
declare(strict_types=1);

namespace Vain\Comparator\Value;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;
use Vain\Comparator\Result\ComparatorResultInterface;
use Vain\Value\ValueObjectInterface;

/**
 * Class ValueComparator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ValueComparator extends AbstractComparator
{
    /**
     * ValueComparator constructor.
     */
    public function __construct()
    {
        parent::__construct('value');
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function eq($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(
            ValueObjectInterface::EQUAL === $what->compare($against),
            $what,
            $against,
            $what->diff($against)
        );
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function neq($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(
            ValueObjectInterface::EQUAL !== $what->compare($against),
            $what,
            $against,
            $what->diff($against)
        );
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function lt($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(
            ValueObjectInterface::LESS === $what->compare($against),
            $what,
            $against,
            $what->diff($against)
        );
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function lte($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(
            ValueObjectInterface::GREATER !== $what->compare($against),
            $what,
            $against,
            $what->diff($against)
        );
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function gt($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(
            ValueObjectInterface::GREATER === $what->compare($against),
            $what,
            $against,
            $what->diff($against)
        );
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function gte($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(
            ValueObjectInterface::LESS !== $what->compare($against),
            $what,
            $against,
            $what->diff($against)
        );
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface[] $against
     *
     * @return ComparatorResultInterface
     */
    public function in($what, $against) : ComparatorResultInterface
    {
        foreach ($against as $againstItem) {
            $result = $this->eq($what, $againstItem);
            if ($result->getStatus()) {
                return $result;
            }
        }

        return new ComparatorResult(false, $what, $against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResultInterface
     */
    public function like($what, $against) : ComparatorResultInterface
    {
        return new ComparatorResult(false, $what, $against);
    }
}