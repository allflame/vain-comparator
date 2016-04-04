<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:14 PM
 */

namespace Vain\Comparator\Factory;

use Vain\Comparator\Factory\Exception\VainComparatorFactoryUnknownTypeException;
use Vain\Comparator\Int\VainIntComparator;
use Vain\Comparator\String\VainStringComparator;

class VainComparatorFactory implements VainComparatorFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function create($type)
    {
        switch ($type) {
            case 'int':
                return new VainIntComparator();
                break;
            case 'string':
                return new VainStringComparator();
                break;
            default:
                throw new VainComparatorFactoryUnknownTypeException($this, $type);
        }
    }
}