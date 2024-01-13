<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Entity/AuditLog.php */
class __TwigTemplate_1ad0a89a31475bbaf8b5c7364a614bf6b3182ac46c04a17bb58d846663335b83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class AuditLog.
 */
class AuditLog
{
    /**
     * @var int
     */
    protected \$id;

    /**
     * @var int
     */
    protected \$userId;

    /**
     * @var string
     */
    protected \$userName;

    /**
     * @var string
     */
    protected \$bundle;

    /**
     * @var string
     */
    protected \$object;

    /**
     * @var int
     */
    protected \$objectId;

    /**
     * @var string
     */
    protected \$action;

    /**
     * @var array
     */
    protected \$details = [];

    /**
     * @var \\DateTime
     */
    protected \$dateAdded;

    /**
     * @var string
     */
    protected \$ipAddress;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('audit_log')
            ->setCustomRepositoryClass('Mautic\\CoreBundle\\Entity\\AuditLogRepository')
            ->addIndex(['object', 'object_id'], 'object_search')
            ->addIndex(['bundle', 'object', 'action', 'object_id'], 'timeline_search')
            ->addIndex(['date_added'], 'date_added_index');

        \$builder->addBigIntIdField();

        \$builder->createField('userId', 'integer')
            ->columnName('user_id')
            ->build();

        \$builder->createField('userName', 'string')
            ->columnName('user_name')
            ->build();

        \$builder->createField('bundle', 'string')
            ->length(50)
            ->build();

        \$builder->createField('object', 'string')
            ->length(50)
            ->build();

        \$builder->addBigIntIdField('objectId', 'object_id', false);

        \$builder->createField('action', 'string')
            ->length(50)
            ->build();

        \$builder->createField('details', 'array')
            ->nullable()
            ->build();

        \$builder->addDateAdded();

        \$builder->createField('ipAddress', 'string')
            ->columnName('ip_address')
            ->length(45)
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set userId.
     *
     * @param int \$userId
     *
     * @return AuditLog
     */
    public function setUserId(\$userId)
    {
        \$this->userId = \$userId;

        return \$this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return \$this->userId;
    }

    /**
     * Set object.
     *
     * @param string \$object
     *
     * @return AuditLog
     */
    public function setObject(\$object)
    {
        \$this->object = \$object;

        return \$this;
    }

    /**
     * Get object.
     *
     * @return string
     */
    public function getObject()
    {
        return \$this->object;
    }

    /**
     * Set objectId.
     *
     * @param int \$objectId
     *
     * @return AuditLog
     */
    public function setObjectId(\$objectId)
    {
        \$this->objectId = \$objectId;

        return \$this;
    }

    /**
     * Get objectId.
     *
     * @return int
     */
    public function getObjectId()
    {
        return \$this->objectId;
    }

    /**
     * Set action.
     *
     * @param string \$action
     *
     * @return AuditLog
     */
    public function setAction(\$action)
    {
        \$this->action = \$action;

        return \$this;
    }

    /**
     * Get action.
     *
     * @return string
     */
    public function getAction()
    {
        return \$this->action;
    }

    /**
     * Set details.
     *
     * @return AuditLog
     */
    public function setDetails(array \$details)
    {
        \$this->details = \$details;

        return \$this;
    }

    /**
     * Get details.
     *
     * @return array
     */
    public function getDetails()
    {
        return \$this->details;
    }

    /**
     * Set dateAdded.
     *
     * @param \\DateTime \$dateAdded
     *
     * @return AuditLog
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * Get dateAdded.
     *
     * @return \\DateTime
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * Set ipAddress.
     *
     * @param string \$ipAddress
     *
     * @return AuditLog
     */
    public function setIpAddress(\$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;

        return \$this;
    }

    /**
     * Get ipAddress.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * Set bundle.
     *
     * @param string \$bundle
     *
     * @return AuditLog
     */
    public function setBundle(\$bundle)
    {
        \$this->bundle = \$bundle;

        return \$this;
    }

    /**
     * Get bundle.
     *
     * @return string
     */
    public function getBundle()
    {
        return \$this->bundle;
    }

    /**
     * Set userName.
     *
     * @param string \$userName
     *
     * @return AuditLog
     */
    public function setUserName(\$userName)
    {
        \$this->userName = \$userName;

        return \$this;
    }

    /**
     * Get userName.
     *
     * @return string
     */
    public function getUserName()
    {
        return \$this->userName;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/AuditLog.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Entity/AuditLog.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/AuditLog.php");
    }
}
