<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder0ae20 = null;
    private $initializera98ac = null;
    private static $publicProperties030ad = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getList', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getInstalledModules', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getMustBeConfiguredModules', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getUpgradableModules', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getModule', array('moduleName' => $moduleName), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'setActionUrls', array('collection' => $collection), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializera98ac = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder0ae20) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder0ae20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder0ae20->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__get', ['name' => $name], $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        if (isset(self::$publicProperties030ad[$name])) {
            return $this->valueHolder0ae20->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ae20;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder0ae20;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ae20;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder0ae20;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__isset', array('name' => $name), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ae20;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder0ae20;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__unset', array('name' => $name), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ae20;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder0ae20;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__clone', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        $this->valueHolder0ae20 = clone $this->valueHolder0ae20;
    }
    public function __sleep()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__sleep', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return array('valueHolder0ae20');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera98ac = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera98ac;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'initializeProxy', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0ae20;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0ae20;
    }
}
