<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/26/16
 * Time: 11:33 AM
 */

namespace Vain\Comparator\Result;

use Vain\Core\Result\ResultInterface;
use Vain\Core\String\StringInterface;

/**
 * @method ComparableResultInterface invert
 */
interface ComparableResultInterface extends ResultInterface, StringInterface
{
    /**
     * @return mixed
     */
    public function getExpected();

    /**
     * @return mixed
     */
    public function getActual();

    /**
     * @return mixed
     */
    public function getDifference();
}