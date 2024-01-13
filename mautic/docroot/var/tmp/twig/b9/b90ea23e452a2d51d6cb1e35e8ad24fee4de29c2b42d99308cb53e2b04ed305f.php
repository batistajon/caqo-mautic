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

/* @bundles/LeadBundle/Entity/LeadList.php */
class __TwigTemplate_f7e468f73c23160a36125bfbcc9281222752700ed66546e126c8d95d9f9c3e72 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\SegmentInUse;
use Mautic\\LeadBundle\\Form\\Validator\\Constraints\\UniqueUserAlias;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class LeadList extends FormEntity
{
    const TABLE_NAME = 'lead_lists';

    /**
     * @var int|null
     */
    private \$id;

    /**
     * @var string|null
     */
    private \$name;

    /**
     * @var string|null
     */
    private \$publicName;

    /**
     * @var Category
     **/
    private \$category;

    /**
     * @var string
     */
    private \$description;

    /**
     * @var string|null
     */
    private \$alias;

    /**
     * @var array
     */
    private \$filters = [];

    /**
     * @var bool
     */
    private \$isGlobal = true;

    /**
     * @var bool
     */
    private \$isPreferenceCenter = false;

    /**
     * @var ArrayCollection
     */
    private \$leads;

    /**
     * @var \\DateTime|null
     */
    private \$lastBuiltDate;

    public function __construct()
    {
        \$this->leads = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(LeadListRepository::class)
            ->addLifecycleEvent('initializeLastBuiltDate', 'prePersist');

        \$builder->addIdColumns();

        \$builder->addField('alias', 'string');

        \$builder->createField('publicName', 'string')
            ->columnName('public_name')
            ->build();

        \$builder->addCategory();

        \$builder->addField('filters', 'array');

        \$builder->createField('isGlobal', 'boolean')
            ->columnName('is_global')
            ->build();

        \$builder->createField('isPreferenceCenter', 'boolean')
            ->columnName('is_preference_center')
            ->build();

        \$builder->createOneToMany('leads', 'ListLead')
            ->setIndexBy('id')
            ->mappedBy('list')
            ->fetchExtraLazy()
            ->build();

        \$builder->createField('lastBuiltDate', 'datetime')
            ->columnName('last_built_date')
            ->nullable()
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank(
            ['message' => 'mautic.core.name.required']
        ));

        \$metadata->addConstraint(new UniqueUserAlias([
            'field'   => 'alias',
            'message' => 'mautic.lead.list.alias.unique',
        ]));

        \$metadata->addConstraint(new SegmentInUse());
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('leadList')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'publicName',
                    'alias',
                    'description',
                    'category',
                ]
            )
            ->addProperties(
                [
                    'filters',
                    'isGlobal',
                    'isPreferenceCenter',
                ]
            )
            ->build();
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param string|null \$name
     *
     * @return LeadList
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string|null \$description
     *
     * @return LeadList
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Set category.
     */
    public function setCategory(Category \$category = null): LeadList
    {
        \$this->isChanged('category', \$category);
        \$this->category = \$category;

        return \$this;
    }

    /**
     * Get category.
     */
    public function getCategory(): ?Category
    {
        return \$this->category;
    }

    /**
     * Get publicName.
     *
     * @return string|null
     */
    public function getPublicName()
    {
        return \$this->publicName;
    }

    /**
     * @param string|null \$publicName
     *
     * @return LeadList
     */
    public function setPublicName(\$publicName)
    {
        \$this->isChanged('publicName', \$publicName);
        \$this->publicName = \$publicName;

        return \$this;
    }

    /**
     * @return LeadList
     */
    public function setFilters(array \$filters)
    {
        \$this->isChanged('filters', \$filters);
        \$this->filters = \$filters;

        return \$this;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        if (is_array(\$this->filters)) {
            return \$this->addLegacyParams(\$this->filters);
        }

        return \$this->filters;
    }

    /**
     * @param bool \$isGlobal
     *
     * @return LeadList
     */
    public function setIsGlobal(\$isGlobal)
    {
        \$this->isChanged('isGlobal', (bool) \$isGlobal);
        \$this->isGlobal = (bool) \$isGlobal;

        return \$this;
    }

    /**
     * @return bool
     */
    public function getIsGlobal()
    {
        return \$this->isGlobal;
    }

    /**
     * Proxy function to getIsGlobal().
     *
     * @return bool
     */
    public function isGlobal()
    {
        return \$this->getIsGlobal();
    }

    /**
     * @param string|null \$alias
     *
     * @return LeadList
     */
    public function setAlias(\$alias)
    {
        \$this->isChanged('alias', \$alias);
        \$this->alias = \$alias;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    /**
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    /**
     * Clone entity with empty contact list.
     */
    public function __clone()
    {
        parent::__clone();

        \$this->id    = null;
        \$this->leads = new ArrayCollection();
        \$this->setIsPublished(false);
        \$this->setAlias('');
        \$this->lastBuiltDate = null;
    }

    /**
     * @return bool
     */
    public function getIsPreferenceCenter()
    {
        return \$this->isPreferenceCenter;
    }

    /**
     * @param bool \$isPreferenceCenter
     */
    public function setIsPreferenceCenter(\$isPreferenceCenter)
    {
        \$this->isChanged('isPreferenceCenter', (bool) \$isPreferenceCenter);
        \$this->isPreferenceCenter = (bool) \$isPreferenceCenter;
    }

    /**
     * @deprecated remove after several of years.
     *
     * This is needed go keep BC after we moved 'filter' and 'display' params
     * to the 'properties' array.
     */
    private function addLegacyParams(array \$filters): array
    {
        return array_map(
            function (array \$filter) {
                \$filter['filter'] = \$filter['properties']['filter'] ?? \$filter['filter'] ?? null;
                \$filter['display'] = \$filter['properties']['display'] ?? \$filter['display'] ?? null;

                return \$filter;
            },
            \$filters
        );
    }

    public function getLastBuiltDate(): ?\\DateTime
    {
        return \$this->lastBuiltDate;
    }

    public function setLastBuiltDate(?\\DateTime \$lastBuiltDate): void
    {
        \$this->lastBuiltDate = \$lastBuiltDate;
    }

    public function setLastBuiltDateToCurrentDatetime(): void
    {
        \$now = (new DateTimeHelper())->getUtcDateTime();
        \$this->setLastBuiltDate(\$now);
    }

    public function initializeLastBuiltDate(): void
    {
        if (\$this->getLastBuiltDate() instanceof \\DateTime) {
            return;
        }

        \$this->setLastBuiltDateToCurrentDatetime();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/LeadList.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadList.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/LeadList.php");
    }
}
