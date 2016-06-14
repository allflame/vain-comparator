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
    private $difference;

    /**
     * ComparableResult constructor.
     * @param bool $status
     * @param mixed $difference
     */
    public function __construct($status = true, $difference= 0)
    {
        $this->difference = $difference;
        parent::__construct($status);
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
    public function serialize()
    {
        return json_encode(['difference' => serialize($this->difference), 'parent' => parent::serialize()]);
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
        $serializedData = json_decode($serialized);
        $this->difference = unserialize($serializedData->difference);

        return parent::unserialize($serializedData->parent);
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        if (false === $this->isSuccessful()) {
            return sprintf('Failed. %s short', $this->difference);
        }

        return sprintf('Successful. %s over', $this->difference);
    }
}