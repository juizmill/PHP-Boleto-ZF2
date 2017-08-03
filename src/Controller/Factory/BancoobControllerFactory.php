<?php

namespace PhpBoletoZf2\Controller\Factory;

use Interop\Container\ContainerInterface;
use PhpBoletoZf2\Controller\BancoobController;
use Zend\ServiceManager\Factory\FactoryInterface;

class BancoobControllerFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new BancoobController($container);
    }
}
