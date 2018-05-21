<?php

namespace MyBuilder\Library\WhenIWork\Repository;

use MyBuilder\Library\WhenIWork\Model\Position;

class PositionRepository extends WhenIWorkRepository
{
    /**
     * @param $positionId
     *
     * @return Position
     */
    public function findById($positionId)
    {
        $position =  $this->whenIWorkApi->positionsGetExistingPosition($positionId);

        return $this->deserializeModel($position, Position::class);
    }

    /**
     * @return Position[]
     */
    public function findAll(): array
    {
        $positionsRaw  = $this->whenIWorkApi->positionsListingPositions();

        return $this->deserializeModel($positionsRaw, 'ArrayCollection<MyBuilder\Library\WhenIWork\Model\Position>');
    }

}
