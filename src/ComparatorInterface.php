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

use Vain\Comparator\Result\ComparatorResultInterface;

/**
 * Interface ComparatorInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface ComparatorInterface
{
    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function eq($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function neq($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function lt($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function lte($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function gt($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function gte($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function in($what, $against) : ComparatorResultInterface;

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function like($what, $against) : ComparatorResultInterface;

    /**
     * @param string $shortcut
     * @param mixed  $what
     * @param mixed  $against
     *
     * @return ComparatorResultInterface
     */
    public function compare(string $shortcut, $what, $against) : ComparatorResultInterface;
}