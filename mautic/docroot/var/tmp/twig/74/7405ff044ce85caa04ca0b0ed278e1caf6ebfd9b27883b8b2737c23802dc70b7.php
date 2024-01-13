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

/* @bundles/UserBundle/Entity/Role.php */
class __TwigTemplate_c71f9c0062a7b6270661c6115b99fb05ed55b15ab1658b10693d219a1c535503 extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Class Role.
 */
class Role extends FormEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string
     */
    private \$description;

    /**
     * @var bool
     */
    private \$isAdmin = false;

    /**
     * @var ArrayCollection
     */
    private \$permissions;

    /**
     * @var array
     */
    private \$rawPermissions;

    /**
     * @var ArrayCollection
     */
    private \$users;

    /**
     * Constructor.
     */
    public function __construct()
    {
        \$this->permissions = new ArrayCollection();
        \$this->users       = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('roles')
            ->setCustomRepositoryClass('Mautic\\UserBundle\\Entity\\RoleRepository');

        \$builder->addIdColumns();

        \$builder->createField('isAdmin', 'boolean')
            ->columnName('is_admin')
            ->build();

        \$builder->createOneToMany('permissions', 'Permission')
            ->orphanRemoval()
            ->mappedBy('role')
            ->cascadePersist()
            ->cascadeRemove()
            ->fetchExtraLazy()
            ->build();

        \$builder->createField('rawPermissions', 'array')
            ->columnName('readable_permissions')
            ->build();

        \$builder->createOneToMany('users', 'User')
            ->mappedBy('role')
            ->fetchExtraLazy()
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank(
            ['message' => 'mautic.core.name.required']
        ));
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('role')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'description',
                    'isAdmin',
                    'rawPermissions',
                ]
            )
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
     * Set name.
     *
     * @param string \$name
     *
     * @return Role
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Add permissions.
     *
     * @return Role
     */
    public function addPermission(Permission \$permissions)
    {
        \$permissions->setRole(\$this);

        \$this->permissions[] = \$permissions;

        return \$this;
    }

    /**
     * Remove permissions.
     */
    public function removePermission(Permission \$permissions)
    {
        \$this->permissions->removeElement(\$permissions);
    }

    /**
     * Get permissions.
     *
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getPermissions()
    {
        return \$this->permissions;
    }

    /**
     * Set description.
     *
     * @param string \$description
     *
     * @return Role
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Set isAdmin.
     *
     * @param bool \$isAdmin
     *
     * @return Role
     */
    public function setIsAdmin(\$isAdmin)
    {
        \$this->isChanged('isAdmin', \$isAdmin);
        \$this->isAdmin = \$isAdmin;

        return \$this;
    }

    /**
     * Get isAdmin.
     *
     * @return bool
     */
    public function getIsAdmin()
    {
        return \$this->isAdmin;
    }

    /**
     * Get isAdmin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return \$this->getIsAdmin();
    }

    /**
     * Simply used to store a readable format of permissions for the changelog.
     */
    public function setRawPermissions(array \$permissions)
    {
        \$this->isChanged('rawPermissions', \$permissions);
        \$this->rawPermissions = \$permissions;
    }

    /**
     * Get rawPermissions.
     *
     * @return array
     */
    public function getRawPermissions()
    {
        return \$this->rawPermissions;
    }

    /**
     * Add users.
     *
     * @return Role
     */
    public function addUser(User \$users)
    {
        \$this->users[] = \$users;

        return \$this;
    }

    /**
     * Remove users.
     */
    public function removeUser(User \$users)
    {
        \$this->users->removeElement(\$users);
    }

    /**
     * Get users.
     *
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getUsers()
    {
        return \$this->users;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/Role.php";
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
        return new Source("", "@bundles/UserBundle/Entity/Role.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Entity/Role.php");
    }
}
