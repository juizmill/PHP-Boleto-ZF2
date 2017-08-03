<?php

namespace PhpBoletoZf2\Controller\Factory;

use Interop\Container\ContainerInterface;
use PhpBoletoZf2\Controller\BBController;
use Zend\ServiceManager\Factory\FactoryInterface;

class BBControllerFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new BBController($container);
    }
}
