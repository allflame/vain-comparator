<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:02 PM
 */

namespace Vain\Comparator;


use Vain\Comparator\Exception\UnknownShortcutComparatorException;

abstract class AbstractComparator implements ComparatorInterface
{
    /**
     * @inheritDoc
     */
    public function compare($shortcut, $what, $against)
    {
        switch ($shortcut) {
            case 'eq':
                return $this->eq($what, $against);
                break;
            case 'neq':
                return $this->neq($what, $against);
                break;
            case 'gt':
                return $this->gt($what, $against);
                break;
            case 'gte':
                return $this->gte($what, $against);
                break;
            case 'lt':
                return $this->lt($what, $against);
                break;
            case 'lte':
                return $this->lte($what, $against);
                break;
            case 'in':
                return $this->in($what, $against);
                break;
            case 'like':
                return $this->like($what, $against);
                break;
            default:
                throw new UnknownShortcutComparatorException($this, $shortcut);
        }
    }
}