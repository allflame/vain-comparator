<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/26/16
 * Time: 11:36 AM
 */

namespace Vain\Comparator\Result;

use Vain\Core\Result\AbstractResult;

class ComparableResult extends AbstractResult implements ComparableResultInterface
{
    private $expected;

    private $actual;

    private $difference;

    /**
     * ComparableResult constructor.
     * @param bool $status
     * @param mixed $expected
     * @param mixed $actual
     * @param mixed $difference
     */
    public function __construct($status, $expected = null, $actual = null, $difference = null)
    {
        $this->expected = $expected;
        $this->actual = $actual;
        $this->difference = $difference;
        parent::__construct($status);
    }

    /**
     * @inheritDoc
     */
    public function getExpected()
    {
        return $this->expected;
    }

    /**
     * @inheritDoc
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * @inheritDoc
     */
    public function getDifference()
    {
        return $this->difference;
    }
}