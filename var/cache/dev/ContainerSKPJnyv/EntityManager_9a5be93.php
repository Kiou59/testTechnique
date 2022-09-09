<?php

namespace ContainerSKPJnyv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3646 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera692c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f215 = [
        
    ];

    public function getConnection()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getConnection', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getMetadataFactory', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getExpressionBuilder', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'beginTransaction', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getCache', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getCache();
    }

    public function transactional($func)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'transactional', array('func' => $func), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'wrapInTransaction', array('func' => $func), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'commit', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->commit();
    }

    public function rollback()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'rollback', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getClassMetadata', array('className' => $className), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'createQuery', array('dql' => $dql), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'createNamedQuery', array('name' => $name), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'createQueryBuilder', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'flush', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'clear', array('entityName' => $entityName), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->clear($entityName);
    }

    public function close()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'close', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->close();
    }

    public function persist($entity)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'persist', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'remove', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'refresh', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'detach', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'merge', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getRepository', array('entityName' => $entityName), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'contains', array('entity' => $entity), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getEventManager', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getConfiguration', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'isOpen', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getUnitOfWork', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getProxyFactory', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'initializeObject', array('obj' => $obj), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'getFilters', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'isFiltersStateClean', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'hasFilters', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return $this->valueHoldera3646->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera692c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera3646) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3646 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3646->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, '__get', ['name' => $name], $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        if (isset(self::$publicProperties6f215[$name])) {
            return $this->valueHoldera3646->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3646;

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

        $targetObject = $this->valueHoldera3646;
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
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3646;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3646;
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
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, '__isset', array('name' => $name), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3646;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3646;
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
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, '__unset', array('name' => $name), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3646;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3646;
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
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, '__clone', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        $this->valueHoldera3646 = clone $this->valueHoldera3646;
    }

    public function __sleep()
    {
        $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, '__sleep', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;

        return array('valueHoldera3646');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera692c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera692c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera692c && ($this->initializera692c->__invoke($valueHoldera3646, $this, 'initializeProxy', array(), $this->initializera692c) || 1) && $this->valueHoldera3646 = $valueHoldera3646;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3646;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3646;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
