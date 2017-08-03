<?php

namespace PhpBoletoZf2\Controller\Factory;

use Interop\Container\ContainerInterface;
use PhpBoletoZf2\Controller\CaixaSigcbController;
use Zend\ServiceManager\Factory\FactoryInterface;

class CaixaSigcbControllerFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new CaixaSigcbController($container);
    }
}
