<?php

namespace MyBuilder\Library\WhenIWork\Repository;

use JMS\Serializer\SerializerInterface;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;

/**
* Fetches data from WhenIWork API and deserializes these to Model objects
*/
abstract class WhenIWorkRepository
{
    /**
     * @var WhenIWorkApi
     */
    protected $whenIWorkApi;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(
        WhenIWorkApi $whenIWorkApi,
        SerializerInterface $serializer
    ) {
        $this->whenIWorkApi = $whenIWorkApi;
        $this->serializer = $serializer;
    }

    /**
     * @param $data
     * @param $modelType
     *
     * @return array|\JMS\Serializer\scalar|object
     */
    protected function deserializeModel($data, $modelType)
    {
        return $this->serializer->deserialize(json_encode($data), $modelType, 'json');
    }

}
