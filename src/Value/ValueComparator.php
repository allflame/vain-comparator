<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/10/16
 * Time: 10:01 AM
 */

namespace Vain\Comparator\Value;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparableResult;
use Vain\Comparator\Result\ComparableResultInterface;
use Vain\Value\ValueObjectInterface;

class ValueComparator extends AbstractComparator
{
    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function eq($what, $against)
    {
        return new ComparableResult(ValueObjectInterface::EQUAL === $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function neq($what, $against)
    {
        return new ComparableResult(ValueObjectInterface::EQUAL !== $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function lt($what, $against)
    {
        return new ComparableResult(ValueObjectInterface::LESS === $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function lte($what, $against)
    {
        return new ComparableResult(ValueObjectInterface::GREATER !== $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function gt($what, $against)
    {
        return new ComparableResult(ValueObjectInterface::GREATER === $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function gte($what, $against)
    {
        return new ComparableResult(ValueObjectInterface::LESS !== $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface[] $against
     *
     * @return ComparableResultInterface
     */
    public function in($what, $against)
    {
        foreach ($against as $againstItem) {
            $result = $this->eq($what, $againstItem);
            if ($result->getStatus()) {
                return $result;
            }
        }

        return new ComparableResult(false, $what, $against, $against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparableResultInterface
     */
    public function like($what, $against)
    {
        return new ComparableResult(false, $what, $against, $against);
    }
}