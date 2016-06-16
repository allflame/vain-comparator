<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/26/16
 * Time: 11:36 AM
 */

namespace Vain\Comparator\Result;

use Vain\Core\Result\AbstractResult;

class ComparatorResult extends AbstractResult implements ComparatorResultInterface
{
    private $expected;

    private $actual;

    private $difference;

    /**
     * ComparableResult constructor.
     * @param bool $status
     * @param mixed $actual
     * @param mixed $expected
     * @param mixed $difference
     */
    public function __construct($status, $actual, $expected, $difference = 0)
    {
        $this->actual = $actual;
        $this->expected = $expected;
        $this->difference = $difference;
        parent::__construct($status);
    }

    /**
     * @return mixed
     */
    public function getExpected()
    {
        return $this->expected;
    }

    /**
     * @return mixed
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
    public function interpret(\ArrayAccess $context = null)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        if (false === $this->isSuccessful()) {
            return sprintf('Failed. Expected %s actual %s (%s short)', $this->expected, $this->actual, $this->difference);
        }

        return sprintf('Successful. Expected %s actual %s (%s over)', $this->expected, $this->actual, $this->difference);
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return ['comparator_result', array_merge(parent::toArray(), ['expected' => json_encode($this->expected), 'actual' => json_encode($this->actual), 'difference' => json_encode($this->difference)])];
    }
}