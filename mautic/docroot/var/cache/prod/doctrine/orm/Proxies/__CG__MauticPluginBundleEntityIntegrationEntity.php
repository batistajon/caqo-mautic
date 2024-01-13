<?php

namespace Proxies\__CG__\Mautic\PluginBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class IntegrationEntity extends \Mautic\PluginBundle\Entity\IntegrationEntity implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'id', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'integration', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'integrationEntity', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'integrationEntityId', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'dateAdded', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'lastSyncDate', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'internalEntity', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'internalEntityId', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'internal', 'changes', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'id', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'integration', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'integrationEntity', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'integrationEntityId', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'dateAdded', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'lastSyncDate', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'internalEntity', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'internalEntityId', '' . "\0" . 'Mautic\\PluginBundle\\Entity\\IntegrationEntity' . "\0" . 'internal', 'changes', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (IntegrationEntity $proxy) {
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
    public function getId()
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
    public function getIntegration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegration', []);

        return parent::getIntegration();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegration($integration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegration', [$integration]);

        return parent::setIntegration($integration);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegrationEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegrationEntity', []);

        return parent::getIntegrationEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegrationEntity($integrationEntity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegrationEntity', [$integrationEntity]);

        return parent::setIntegrationEntity($integrationEntity);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntegrationEntityId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntegrationEntityId', []);

        return parent::getIntegrationEntityId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntegrationEntityId($integrationEntityId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntegrationEntityId', [$integrationEntityId]);

        return parent::setIntegrationEntityId($integrationEntityId);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSyncDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSyncDate', []);

        return parent::getLastSyncDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSyncDate($lastSyncDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSyncDate', [$lastSyncDate]);

        return parent::setLastSyncDate($lastSyncDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalEntity', []);

        return parent::getInternalEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalEntity($internalEntity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalEntity', [$internalEntity]);

        return parent::setInternalEntity($internalEntity);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalEntityId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalEntityId', []);

        return parent::getInternalEntityId();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalEntityId($internalEntityId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalEntityId', [$internalEntityId]);

        return parent::setInternalEntityId($internalEntityId);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternal', []);

        return parent::getInternal();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternal($internal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternal', [$internal]);

        return parent::setInternal($internal);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        return parent::setChanges($changes);
    }

}
