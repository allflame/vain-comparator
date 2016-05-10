<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/10/16
 * Time: 10:01 AM
 */

namespace Vain\Comparator\Value;

use Vain\Comparator\AbstractComparator;
use Vain\Value\ValueObjectInterface;

class ValueComparator extends AbstractComparator
{
    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function eq($what, $against)
    {
        return ValueObjectInterface::EQUAL === $what->compare($against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function neq($what, $against)
    {
        return ValueObjectInterface::EQUAL !== $what->compare($against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function lt($what, $against)
    {
        return ValueObjectInterface::LESS === $what->compare($against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function lte($what, $against)
    {
        return !$this->gt($what, $against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function gt($what, $against)
    {
        return ValueObjectInterface::GREATER === $what->compare($against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function gte($what, $against)
    {
        return !$this->lt($what, $against);
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface[] $against
     *
     * @return bool
     */
    public function in($what, $against)
    {
        foreach ($against as $againstItem) {
            if ($this->eq($what, $againstItem)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param ValueObjectInterface $what
     * @param ValueObjectInterface $against
     *
     * @return bool
     */
    public function like($what, $against)
    {
        return false;
    }
}