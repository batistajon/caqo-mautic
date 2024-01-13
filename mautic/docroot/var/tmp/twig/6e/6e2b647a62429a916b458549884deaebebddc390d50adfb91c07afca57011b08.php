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

/* @bundles/CoreBundle/Entity/DynamicContentEntityTrait.php */
class __TwigTemplate_b2dd5c665ca448a8c08fd72f06403f1566d384670fe4150414f9e04c22da4549 extends Template
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

use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

trait DynamicContentEntityTrait
{
    /**
     * Keep the default content set outside of \$dynamicContent so that it can be used if \$dynamicContent is emptied.
     *
     * @var array
     */
    public static \$defaultDynamicContent = [
        [
            'tokenName' => 'Dynamic Content 1',
            'content'   => 'Default Dynamic Content',
            'filters'   => [
                [
                    'content' => null,
                    'filters' => [
                        [
                            'glue'     => null,
                            'field'    => null,
                            'object'   => null,
                            'type'     => null,
                            'operator' => null,
                            'display'  => null,
                            'filter'   => null,
                        ],
                    ],
                ],
            ],
        ],
    ];

    /**
     * @var array
     */
    private \$dynamicContent = [];

    protected static function addDynamicContentMetadata(ClassMetadataBuilder \$builder)
    {
        \$builder->createField('dynamicContent', 'array')
            ->columnName('dynamic_content')
            ->nullable()
            ->build();
    }

    /**
     * @return array
     */
    public function getDynamicContent()
    {
        return (empty(\$this->dynamicContent)) ? \$this->getDefaultDynamicContent() : \$this->dynamicContent;
    }

    /**
     * @param \$dynamicContent
     *
     * @return \$this
     */
    public function setDynamicContent(\$dynamicContent)
    {
        if (empty(\$dynamicContent)) {
            \$dynamicContent = \$this->getDefaultDynamicContent();
        }

        \$this->dynamicContent = \$dynamicContent;

        return \$this;
    }

    /**
     * @return array
     */
    public function getDefaultDynamicContent()
    {
        return self::\$defaultDynamicContent;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/DynamicContentEntityTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/DynamicContentEntityTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/DynamicContentEntityTrait.php");
    }
}
