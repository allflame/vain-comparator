<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:19 PM
 */

namespace Vain\Comparator\Decorator;

use Vain\Comparator\ComparatorInterface;

abstract class AbstractComparatorDecorator implements ComparatorInterface
{
    private $comparator;

    /**
     * AbstractComparatorDecorator constructor.
     * @param ComparatorInterface $comparator
     */
    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->comparator->getName();
    }

    /**
     * @inheritDoc
     */
    public function eq($what, $against)
    {
        return $this->comparator->eq($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against)
    {
        return $this->comparator->neq($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        return $this->comparator->lt($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        return $this->comparator->lte($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        return $this->comparator->gt($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        return $this->comparator->gte($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against)
    {
        return $this->comparator->in($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against)
    {
        return $this->comparator->like($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function compare($shortcut, $what, $against)
    {
        return $this->comparator->compare($shortcut, $what, $against);
    }
}