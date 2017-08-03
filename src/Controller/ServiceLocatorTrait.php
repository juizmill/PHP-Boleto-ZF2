<?php

namespace PhpBoletoZf2\Controller;

use Interop\Container\ContainerInterface;

trait ServiceLocatorTrait
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    protected function getServiceLocator()
    {
        return $this->container;
    }
}
