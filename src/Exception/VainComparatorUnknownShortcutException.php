<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:06 PM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\VainComparatorInterface;

class VainComparatorUnknownShortcutException extends VainComparatorException
{
    /**
     * VainComparatorUnknownShortcutException constructor.
     * @param VainComparatorInterface $comparator
     * @param string $shortcut
     */
    public function __construct(VainComparatorInterface $comparator, $shortcut)
    {
        parent::__construct($comparator, sprintf('Cannot compare variables by unknown shortcut %s', $shortcut), 0, null);
    }
}