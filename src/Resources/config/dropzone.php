<?php
namespace Emrdev\SymfonyDropzone\DependencyInjection\Configuration;

use Emrdev\SymfonyDropzone\Form\DropzoneType;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function(ContainerConfigurator $configurator) {

    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure() ;
    $services->set(DropzoneType::class)
        ->autowire();
};