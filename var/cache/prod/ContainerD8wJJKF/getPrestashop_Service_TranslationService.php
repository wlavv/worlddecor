<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.service.translation' shared service.

$this->services['prestashop.service.translation'] = $instance = new \PrestaShopBundle\Service\TranslationService();

$instance->container = $this;

return $instance;
