<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sensor extends \App\Entity\Sensor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'valueMin', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'valueMax', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'dataType', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'module', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'histories'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'valueMin', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'valueMax', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'dataType', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'module', '' . "\0" . 'App\\Entity\\Sensor' . "\0" . 'histories'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sensor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getValueMin(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValueMin', []);

        return parent::getValueMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setValueMin(int $valueMin): \App\Entity\Sensor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValueMin', [$valueMin]);

        return parent::setValueMin($valueMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getValueMax(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValueMax', []);

        return parent::getValueMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setValueMax(int $valueMax): \App\Entity\Sensor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValueMax', [$valueMax]);

        return parent::setValueMax($valueMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataType(): ?\App\Entity\DataType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataType', []);

        return parent::getDataType();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataType(?\App\Entity\DataType $dataType): \App\Entity\Sensor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataType', [$dataType]);

        return parent::setDataType($dataType);
    }

    /**
     * {@inheritDoc}
     */
    public function getModule(): ?\App\Entity\Module
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModule', []);

        return parent::getModule();
    }

    /**
     * {@inheritDoc}
     */
    public function setModule(?\App\Entity\Module $module): \App\Entity\Sensor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModule', [$module]);

        return parent::setModule($module);
    }

    /**
     * {@inheritDoc}
     */
    public function getHistories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHistories', []);

        return parent::getHistories();
    }

    /**
     * {@inheritDoc}
     */
    public function addHistory(\App\Entity\History $history): \App\Entity\Sensor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHistory', [$history]);

        return parent::addHistory($history);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHistory(\App\Entity\History $history): \App\Entity\Sensor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHistory', [$history]);

        return parent::removeHistory($history);
    }

}