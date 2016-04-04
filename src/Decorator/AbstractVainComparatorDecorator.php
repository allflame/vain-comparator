<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:19 PM
 */

namespace Vain\Comparator\Decorator;


use Vain\Comparator\VainComparatorInterface;

class AbstractVainComparatorDecorator implements VainComparatorInterface
{
    private $comparator;

    public function __construct(VainComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @inheritDoc
     */
    public function eq($what, $against)
    {
        // TODO: Implement eq() method.
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against)
    {
        // TODO: Implement neq() method.
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against)
    {
        // TODO: Implement lt() method.
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against)
    {
        // TODO: Implement lte() method.
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against)
    {
        // TODO: Implement gt() method.
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against)
    {
        // TODO: Implement gte() method.
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against)
    {
        // TODO: Implement in() method.
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against)
    {
        // TODO: Implement like() method.
    }

    /**
     * @inheritDoc
     */
    public function compare($shortcut, $what, $against)
    {
        return $this->comparator->compare($shortcut, $what, $against);
    }


}