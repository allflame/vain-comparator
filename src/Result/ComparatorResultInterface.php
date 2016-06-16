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
namespace Vain\Comparator\Result;

use Vain\Expression\Boolean\Result\BooleanResultInterface;

/**
 * Interface ComparatorResultInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
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