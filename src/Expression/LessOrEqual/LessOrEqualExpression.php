<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-expression
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-expression
 */
namespace Vain\Comparator\Expression\LessOrEqual;

use Vain\Comparator\Expression\AbstractComparisonExpression;

/**
 * Class LessOrEqualExpression
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LessOrEqualExpression extends AbstractComparisonExpression
{
    /**
     * @inheritDoc
     */
    public function interpret(\ArrayAccess $context = null)
    {
        return $this->getComparator()->lte(
            $this->getWhat()->interpret($context),
            $this->getAgainst()->interpret($context)
        );
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return sprintf('%s <= %s', $this->getWhat(), $this->getAgainst());
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return ['lte' => parent::toArray()];
    }
}