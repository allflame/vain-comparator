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

namespace Vain\Comparator\Decorator;

use Vain\Comparator\ComparatorInterface;
use Vain\Comparator\Result\ComparatorResultInterface;

/**
 * Class AbstractComparatorDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractComparatorDecorator implements ComparatorInterface
{
    private $comparator;

    /**
     * AbstractComparatorDecorator constructor.
     *
     * @param ComparatorInterface $comparator
     */
    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @inheritDoc
     */
    public function getName() : string
    {
        return $this->comparator->getName();
    }

    /**
     * @inheritDoc
     */
    public function eq($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->eq($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function neq($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->neq($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function lt($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->lt($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function lte($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->lte($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function gt($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->gt($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function gte($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->gte($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function in($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->in($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function like($what, $against) : ComparatorResultInterface
    {
        return $this->comparator->like($what, $against);
    }

    /**
     * @inheritDoc
     */
    public function compare(string $shortcut, $what, $against) : ComparatorResultInterface
    {
        return $this->comparator->compare($shortcut, $what, $against);
    }
}