<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 6/14/16
 * Time: 6:07 AM
 */

namespace Vain\Comparator\Expression;

use Vain\Comparator\ComparatorInterface;
use Vain\Expression\ExpressionInterface;

abstract class AbstractComparisonExpression implements ComparisonExpressionInterface
{
    private $what;

    private $against;

    private $comparator;

    /**
     * AbstractComparisonExpression constructor.
     * @param ExpressionInterface $what
     * @param ExpressionInterface $against
     * @param ComparatorInterface $comparator
     */
    public function __construct(ExpressionInterface $what, ExpressionInterface $against, ComparatorInterface $comparator)
    {
        $this->what = $what;
        $this->against = $against;
        $this->comparator = $comparator;
    }

    /**
     * @return ExpressionInterface
     */
    public function getWhat()
    {
        return $this->what;
    }

    /**
     * @return ExpressionInterface
     */
    public function getAgainst()
    {
        return $this->against;
    }

    /**
     * @return ComparatorInterface
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return ['what' => $this->what->toArray(), 'against' => $this->against->toArray(), 'comparator' => $this->comparator->getName()];
    }
}