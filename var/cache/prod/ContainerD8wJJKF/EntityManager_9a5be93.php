<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2c1fd = null;
    private $initializerfed20 = null;
    private static $publicProperties2c8d4 = [
        
    ];
    public function getConnection()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getConnection', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getMetadataFactory', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getExpressionBuilder', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'beginTransaction', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getCache', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getCache();
    }
    public function transactional($func)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'transactional', array('func' => $func), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'commit', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->commit();
    }
    public function rollback()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'rollback', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getClassMetadata', array('className' => $className), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'createQuery', array('dql' => $dql), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'createNamedQuery', array('name' => $name), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'createQueryBuilder', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'flush', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'clear', array('entityName' => $entityName), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->clear($entityName);
    }
    public function close()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'close', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->close();
    }
    public function persist($entity)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'persist', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'remove', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'refresh', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'detach', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'merge', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'contains', array('entity' => $entity), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getEventManager', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getConfiguration', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'isOpen', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getUnitOfWork', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getProxyFactory', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'initializeObject', array('obj' => $obj), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'getFilters', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'isFiltersStateClean', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, 'hasFilters', array(), $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        return $this->valueHolder2c1fd->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerfed20 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2c1fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c1fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2c1fd->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerfed20 && ($this->initializerfed20->__invoke($valueHolder2c1fd, $this, '__get', ['name' => $name], $this->initializerfed20) || 1) && $this->valueHolder2c1fd = $valueHolder2c1fd;
        if (isset(self::$publicProperties2c8d4[$name])) {
            return $this->valueHolder2c1fd->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
