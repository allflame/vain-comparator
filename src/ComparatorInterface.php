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
    public function getName();

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function eq($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function neq($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function lt($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function lte($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function gt($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function gte($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function in($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparatorResultInterface
     */
    public function like($what, $against);

    /**
     * @param string $shortcut
     * @param mixed  $what
     * @param mixed  $against
     *
     * @return ComparatorResultInterface
     */
    public function compare($shortcut, $what, $against);
}