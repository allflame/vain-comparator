<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 11:59 AM
 */

namespace Vain\Comparator;

use Vain\Comparator\Result\ComparableResultInterface;

interface ComparatorInterface
{
    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function eq($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function neq($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function lt($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function lte($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function gt($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function gte($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function in($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function like($what, $against);

    /**
     * @param string $shortcut
     * @param mixed $what
     * @param mixed $against
     *
     * @return ComparableResultInterface
     */
    public function compare($shortcut, $what, $against);
}