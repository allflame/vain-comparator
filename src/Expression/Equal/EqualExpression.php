<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/1/16
 * Time: 9:32 AM
 */

namespace Vain\Comparator\Expression\Equal;

use Vain\Comparator\Expression\AbstractComparisonExpression;

class EqualExpression extends AbstractComparisonExpression
{
    /**
     * @inheritDoc
     */
    public function interpret(\ArrayAccess $context = null)
    {
        return $this->getComparator()->eq($this->getWhat()->interpret($context), $this->getAgainst()->interpret($context));
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