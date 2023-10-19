<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2c1fd = null;
    private $initializerfed20 = null;
    private static $publicProperties2c8d4 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getList', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getInstalledModules', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getMustBeConfiguredModules', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getUpgradableModules', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'setActionUrls', array('collection' => $collection), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerfed20 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder2c1fd) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder2c1fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder2c1fd->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__get', ['name' => $name], $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        if (isset(self::$publicProperties2c8d4[$name])) {
            return $this->valueHolder2c1fd->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c1fd;
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
        $targetObject = $this->valueHolder2c1fd;
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
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c1fd;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2c1fd;
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
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__isset', array('name' => $name), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c1fd;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2c1fd;
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
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__unset', array('name' => $name), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c1fd;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2c1fd;
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
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__clone', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        $this->valueHolder2c1fd = clone $this->valueHolder2c1fd;
    }
    public function __sleep()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__sleep', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return array('valueHolder2c1fd');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfed20 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfed20;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'initializeProxy', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c1fd;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c1fd;
    }
}
