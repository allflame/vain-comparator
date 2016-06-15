<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 6/15/16
 * Time: 11:15 AM
 */

namespace Vain\Comparator\Result;

use Vain\Expression\Boolean\Result\BooleanResultInterface;

interface ComparatorResultInterface extends BooleanResultInterface
{
    /**
     * @return mixed
     */
    public function getActual();

    /**
     * @return mixed
     */
    public function getExpected();

    /**
     * @return mixed
     */
    public function getDifference();
}