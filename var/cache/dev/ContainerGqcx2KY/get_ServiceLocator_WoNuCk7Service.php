<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.woNuCk7' shared service.

return $this->privates['.service_locator.woNuCk7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'technicien' => ['privates', '.errored..service_locator.woNuCk7.App\\Entity\\Technicien', NULL, 'Cannot autowire service ".service_locator.woNuCk7": it references class "App\\Entity\\Technicien" but no such service exists.'],
], [
    'technicien' => 'App\\Entity\\Technicien',
]);
