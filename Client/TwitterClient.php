<?php

namespace Sniper\Bundle\TechBundle\Client;

/**
 * Class TwitterClient
 */
class TwitterClient
{
    /**
     * @var int
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * TwitterClient constructor.
     *
     * @param int $clientId
     * @param string $clientSecret
     */
    public function __construct(int $clientId, string $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }
}
