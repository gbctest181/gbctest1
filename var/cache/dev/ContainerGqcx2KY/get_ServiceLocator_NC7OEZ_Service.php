<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.nC7OEZ.' shared service.

return $this->privates['.service_locator.nC7OEZ.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'formation' => ['privates', '.errored..service_locator.nC7OEZ..App\\Entity\\Formation', NULL, 'Cannot autowire service ".service_locator.nC7OEZ.": it references class "App\\Entity\\Formation" but no such service exists.'],
], [
    'formation' => 'App\\Entity\\Formation',
]);
