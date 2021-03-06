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
declare(strict_types = 1);

namespace Vain\Comparator\Result;

use Vain\Core\Result\AbstractResult;

/**
 * Class ComparatorResult
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ComparatorResult extends AbstractResult implements ComparatorResultInterface
{
    private $expected;

    private $actual;

    private $difference;

    /**
     * ComparableResult constructor.
     *
     * @param bool  $status
     * @param mixed $actual
     * @param mixed $expected
     * @param mixed $difference
     */
    public function __construct(bool $status, $actual, $expected, $difference = 0)
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
    public function __toString() : string
    {
        if (false === $this->isSuccessful()) {
            return sprintf(
                'Failed. Expected %s actual %s (%s short)',
                $this->expected,
                $this->actual,
                $this->difference
            );
        }

        return sprintf(
            'Successful. Expected %s actual %s (%s over)',
            $this->expected,
            $this->actual,
            $this->difference
        );
    }

    /**
     * @inheritDoc
     */
    public function toArray() : array
    {
        return [
            'comparator_result' => array_merge(
                parent::toArray(),
                [
                    'expected'   => json_encode($this->expected),
                    'actual'     => json_encode($this->actual),
                    'difference' => json_encode($this->difference),
                ]
            ),
        ];
    }
}