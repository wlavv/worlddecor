<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.team.employee.configuration.options_checker' shared service.

return $this->services['prestashop.core.team.employee.configuration.options_checker'] = new \PrestaShop\PrestaShop\Core\Team\Employee\Configuration\OptionsChecker(($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->load('getMultistoreFeatureService.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())));
