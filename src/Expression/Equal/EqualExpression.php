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
namespace Vain\Comparator\Expression\Equal;

use Vain\Comparator\Expression\AbstractComparisonExpression;

/**
 * Class EqualExpression
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class EqualExpression extends AbstractComparisonExpression
{
    /**
     * @inheritDoc
     */
    public function interpret(\ArrayAccess $context = null)
    {
        return $this->getComparator()->eq(
            $this->getWhat()->interpret($context),
            $this->getAgainst()->interpret($context)
        );
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return sprintf('%s = %s', $this->getWhat(), $this->getAgainst());
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return ['eq' => parent::toArray()];
    }
}