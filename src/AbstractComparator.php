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
declare(strict_types = 1);

namespace Vain\Comparator;

use Vain\Comparator\Exception\UnknownShortcutComparatorException;
use Vain\Comparator\Result\ComparatorResultInterface;

/**
 * Class AbstractComparator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractComparator implements ComparatorInterface
{
    private $name;

    /**
     * AbstractComparator constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function compare(string $shortcut, $what, $against) : ComparatorResultInterface
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