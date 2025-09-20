<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder0ae20 = null;
    private $initializera98ac = null;
    private static $publicProperties030ad = [
        
    ];
    public function getConnection()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getConnection', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getMetadataFactory', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getExpressionBuilder', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'beginTransaction', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getCache', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getCache();
    }
    public function transactional($func)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'transactional', array('func' => $func), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'wrapInTransaction', array('func' => $func), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'commit', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->commit();
    }
    public function rollback()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'rollback', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getClassMetadata', array('className' => $className), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'createQuery', array('dql' => $dql), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'createNamedQuery', array('name' => $name), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'createQueryBuilder', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'flush', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'clear', array('entityName' => $entityName), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->clear($entityName);
    }
    public function close()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'close', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->close();
    }
    public function persist($entity)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'persist', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'remove', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'refresh', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'detach', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'merge', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getRepository', array('entityName' => $entityName), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'contains', array('entity' => $entity), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getEventManager', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getConfiguration', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'isOpen', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getUnitOfWork', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getProxyFactory', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'initializeObject', array('obj' => $obj), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'getFilters', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'isFiltersStateClean', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, 'hasFilters', array(), $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        return $this->valueHolder0ae20->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera98ac = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder0ae20) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0ae20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder0ae20->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera98ac && ($this->initializera98ac->__invoke($valueHolder0ae20, $this, '__get', ['name' => $name], $this->initializera98ac) || 1) && $this->valueHolder0ae20 = $valueHolder0ae20;
        if (isset(self::$publicProperties030ad[$name])) {
            return $this->valueHolder0ae20->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
