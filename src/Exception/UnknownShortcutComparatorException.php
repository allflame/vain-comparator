<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:06 PM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\ComparatorInterface;

class UnknownShortcutComparatorException extends ComparatorException
{
    /**
     * VainComparatorUnknownShortcutException constructor.
     * @param ComparatorInterface $comparator
     * @param string $shortcut
     */
    public function __construct(ComparatorInterface $comparator, $shortcut)
    {
        parent::__construct($comparator, sprintf('Cannot compare variables by unknown shortcut %s', $shortcut), 0, null);
    }
}