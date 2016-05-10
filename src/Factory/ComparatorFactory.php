<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:14 PM
 */

namespace Vain\Comparator\Factory;

use Vain\Comparator\Basic\BasicComparator;
use Vain\Comparator\String\StringComparator;
use Vain\Comparator\Value\ValueComparator;

class ComparatorFactory implements ComparatorFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function create($type)
    {
        switch ($type) {
            case 'string':
                return new StringComparator();
                break;
            case 'value':
                return new ValueComparator();
            break;
            default:
                return new BasicComparator();
        }
    }
}