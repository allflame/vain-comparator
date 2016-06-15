<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/10/16
 * Time: 10:01 AM
 */

namespace Vain\Comparator\Value;

use Vain\Comparator\AbstractComparator;
use Vain\Comparator\Result\ComparatorResult;
use Vain\Value\ValueObjectInterface;

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
     * @return ComparatorResult
     */
    public function eq($what, $against)
    {
        return new ComparatorResult(ValueObjectInterface::EQUAL === $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResult
     */
    public function neq($what, $against)
    {
        return new ComparatorResult(ValueObjectInterface::EQUAL !== $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResult
     */
    public function lt($what, $against)
    {
        return new ComparatorResult(ValueObjectInterface::LESS === $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResult
     */
    public function lte($what, $against)
    {
        return new ComparatorResult(ValueObjectInterface::GREATER !== $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResult
     */
    public function gt($what, $against)
    {
        return new ComparatorResult(ValueObjectInterface::GREATER === $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return ComparatorResult
     */
    public function gte($what, $against)
    {
        return new ComparatorResult(ValueObjectInterface::LESS !== $what->compare($against), $what, $against, $what->diff($against));
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface[] $against
     *
     * @return ComparatorResult
     */
    public function in($what, $against)
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
     * @return ComparatorResult
     */
    public function like($what, $against)
    {
        return new ComparatorResult(false, $what, $against);
    }
}