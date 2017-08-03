<?php

namespace PhpBoletoZf2\Controller\Factory;

use Interop\Container\ContainerInterface;
use PhpBoletoZf2\Controller\ItauController;
use Zend\ServiceManager\Factory\FactoryInterface;

class ItauControllerFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ItauController($container);
    }
}
