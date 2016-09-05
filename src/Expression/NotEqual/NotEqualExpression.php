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

namespace Vain\Comparator\Expression\NotEqual;

use Vain\Comparator\Expression\AbstractComparisonExpression;
use Vain\Comparator\Result\ComparatorResultInterface;

/**
 * Class NotEqualExpression
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class NotEqualExpression extends AbstractComparisonExpression
{
    /**
     * @inheritDoc
     */
    public function interpret(\ArrayAccess $context = null) : ComparatorResultInterface
    {
        return $this->getComparator()->neq(
            $this->getWhat()->interpret($context),
            $this->getAgainst()->interpret($context)
        );
    }

    /**
     * @inheritDoc
     */
    public function __toString() : string
    {
        return sprintf('%s != %s', $this->getWhat(), $this->getAgainst());
    }

    /**
     * @inheritDoc
     */
    public function toArray() : array
    {
        return ['neq' => parent::toArray()];
    }
}