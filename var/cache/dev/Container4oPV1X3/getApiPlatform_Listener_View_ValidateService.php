<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.listener.view.validate' shared service.

include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Validator\\EventListener\\ValidateListener.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Validator\\ValidatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\api-platform\\core\\src\\Bridge\\Symfony\\Validator\\Validator.php';

return $this->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Core\Validator\EventListener\ValidateListener(new \ApiPlatform\Core\Bridge\Symfony\Validator\Validator(($this->services['validator'] ?? $this->getValidatorService()), $this), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
