<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:14 PM
 */

namespace Vain\Comparator\Factory;

use Vain\Comparator\Factory\Exception\UnknownTypeComparatorFactoryException;
use Vain\Comparator\Int\IntComparator;
use Vain\Comparator\String\StringComparator;
use Vain\Comparator\Time\TimeComparator;

class ComparatorFactory implements ComparatorFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function create($type)
    {
        switch ($type) {
            case 'int':
                return new IntComparator();
                break;
            case 'string':
                return new StringComparator();
                break;
            case 'time':
                return new TimeComparator();
                break;
            default:
                throw new UnknownTypeComparatorFactoryException($this, $type);
        }
    }
}