<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.cDFwGPK' shared service.

return $this->privates['.service_locator.cDFwGPK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'clientIntervention' => ['privates', '.errored..service_locator.cDFwGPK.App\\Entity\\ClientIntervention', NULL, 'Cannot autowire service ".service_locator.cDFwGPK": it references class "App\\Entity\\ClientIntervention" but no such service exists.'],
], [
    'clientIntervention' => 'App\\Entity\\ClientIntervention',
]);