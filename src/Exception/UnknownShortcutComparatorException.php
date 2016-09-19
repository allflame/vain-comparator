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

namespace Vain\Comparator\Exception;

use Vain\Comparator\ComparatorInterface;

/**
 * Class UnknownShortcutComparatorException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class UnknownShortcutComparatorException extends ComparatorException
{
    /**
     * VainComparatorUnknownShortcutException constructor.
     *
     * @param ComparatorInterface $comparator
     * @param string              $shortcut
     */
    public function __construct(ComparatorInterface $comparator, string $shortcut)
    {
        parent::__construct(
            $comparator,
            sprintf('Cannot compare variables by unknown shortcut %s', $shortcut),
            0,
            null
        );
    }
}