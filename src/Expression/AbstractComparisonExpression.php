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
namespace Vain\Comparator\Expression;

use Vain\Comparator\ComparatorInterface;
use Vain\Expression\Binary\AbstractBinaryExpression;
use Vain\Expression\ExpressionInterface;

/**
 * Class AbstractComparisonExpression
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractComparisonExpression extends AbstractBinaryExpression implements ComparisonExpressionInterface
{
    private $comparator;

    /**
     * AbstractComparisonExpression constructor.
     *
     * @param ExpressionInterface $what
     * @param ExpressionInterface $against
     * @param ComparatorInterface $comparator
     */
    public function __construct(
        ExpressionInterface $what,
        ExpressionInterface $against,
        ComparatorInterface $comparator
    ) {
        $this->comparator = $comparator;
        parent::__construct($what, $against);
    }

    /**
     * @return ExpressionInterface
     */
    public function getWhat()
    {
        return $this->getFirstExpression();
    }

    /**
     * @return ExpressionInterface
     */
    public function getAgainst()
    {
        return $this->getSecondExpression();
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
        return array_merge(parent::toArray(), ['comparator' => $this->comparator->getName()]);
    }
}