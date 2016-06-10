<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/26/16
 * Time: 11:36 AM
 */

namespace Vain\Comparator\Result;

use Vain\Core\Result\AbstractResult;
use Vain\Expression\Visitor\VisitorInterface;

class ComparatorResult extends AbstractResult implements ComparatorResultInterface
{
    private $actual;

    private $expected;

    private $difference;

    /**
     * ComparableResult constructor.
     * @param bool $status
     * @param mixed $actual
     * @param mixed $expected
     * @param mixed $difference
     */
    public function __construct($status = true, $actual = 0, $expected = 0, $difference = 0)
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
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->result($this);
    }

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return json_encode(['expected' => serialize($this->expected), 'actual' => serialize($this->actual), 'difference' => serialize($this->difference), 'parent' => parent::serialize()]);
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
        $serializedData = json_decode($serialized);
        $this->expected = unserialize($serializedData->expected);
        $this->actual = unserialize($serializedData->actual);
        $this->difference = unserialize($serializedData->difference);

        return parent::unserialize($serializedData->parent);
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
}