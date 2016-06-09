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
    public function __construct($status, $actual = null, $expected = null, $difference = null)
    {
        $this->actual = $actual;
        $this->expected = $expected;
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

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        if (false === $this->getStatus()) {
            return sprintf('Failed. Expected %s actual %s (%s short)', $this->expected, $this->actual, $this->difference);
        }

        return sprintf('Successful. Expected %s actual %s (%s over)', $this->expected, $this->actual, $this->difference);
    }
}