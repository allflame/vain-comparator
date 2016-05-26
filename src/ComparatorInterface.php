<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 11:59 AM
 */

namespace Vain\Comparator;

interface ComparatorInterface
{
    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function eq($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function neq($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function lt($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function lte($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function gt($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function gte($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function in($what, $against);

    /**
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function like($what, $against);

    /**
     * @param string $shortcut
     * @param mixed $what
     * @param mixed $against
     *
     * @return bool
     */
    public function compare($shortcut, $what, $against);
}