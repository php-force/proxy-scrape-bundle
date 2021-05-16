<?php

namespace PhpForce\ProxyScrapeBundle\ProxyScrape;

class Factory
{
    protected static string $clientClass = Client::class;

    public static function create(array $parameters = [], array $options = []): ClientInterface
    {
        return new static::$clientClass($parameters, $options);
    }
}
