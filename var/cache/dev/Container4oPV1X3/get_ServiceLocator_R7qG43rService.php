<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.R7qG43r' shared service.

return $this->privates['.service_locator.R7qG43r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'technicienRepository' => ['privates', 'App\\Repository\\TechnicienRepository', 'getTechnicienRepositoryService.php', true],
], [
    'technicienRepository' => 'App\\Repository\\TechnicienRepository',
]);