<?php

namespace PhpBoletoZf2\Controller\Factory;

use Interop\Container\ContainerInterface;
use PhpBoletoZf2\Controller\BradescoController;
use Zend\ServiceManager\Factory\FactoryInterface;

class BradescoControllerFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new BradescoController($container);
    }
}
