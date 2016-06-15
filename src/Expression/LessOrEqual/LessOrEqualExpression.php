<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 9:43 AM
 */

namespace Vain\Comparator\Expression\LessOrEqual;

use Vain\Comparator\Expression\AbstractComparisonExpression;

class LessOrEqualExpression extends AbstractComparisonExpression
{
    /**
     * @inheritDoc
     */
    public function interpret(\ArrayAccess $context = null)
    {
        return $this->getComparator()->lte($this->getWhat()->interpret($context), $this->getAgainst()->interpret($context));
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return sprintf('%s <= %s', $this->getWhat(), $this->getAgainst());
    }
}