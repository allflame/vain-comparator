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

namespace Vain\Comparator\Expression\In;

use Vain\Comparator\Expression\AbstractComparisonExpression;
use Vain\Comparator\Result\ComparatorResultInterface;

/**
 * Class InExpression
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class InExpression extends AbstractComparisonExpression
{
    /**
     * @inheritDoc
     */
    public function interpret(\ArrayAccess $context = null) : ComparatorResultInterface
    {
        return $this->getComparator()->in(
            $this->getWhat()->interpret($context),
            $this->getAgainst()->interpret($context)
        );
    }

    /**
     * @inheritDoc
     */
    public function __toString() : string
    {
        return sprintf('%s in [%s]', $this->getWhat(), $this->getAgainst());
    }

    /**
     * @inheritDoc
     */
    public function toArray() : array
    {
        return ['in' => parent::toArray()];
    }
}