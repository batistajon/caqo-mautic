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

/* @bundles/DashboardBundle/Entity/WidgetRepository.php */
class __TwigTemplate_edca99534911d90a950cf0efe73e8723d3de81c12c9ac32dc17a05e915f4feab extends Template
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

namespace Mautic\\DashboardBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * WidgetRepository.
 */
class WidgetRepository extends CommonRepository
{
    /**
     * Update widget ordering.
     *
     * @param array \$ordering
     * @param int   \$userId
     *
     * @return string
     */
    public function updateOrdering(\$ordering, \$userId)
    {
        \$widgets = \$this->getEntities(
            [
                'filter' => [
                    'createdBy' => \$userId,
                ],
            ]
        );

        foreach (\$widgets as &\$widget) {
            if (isset(\$ordering[\$widget->getId()])) {
                \$widget->setOrdering((int) \$ordering[\$widget->getId()]);
            }
        }

        \$this->saveEntities(\$widgets);
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultOrder()
    {
        return [
            ['w.ordering', 'ASC'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'w';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Entity/WidgetRepository.php";
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
        return new Source("", "@bundles/DashboardBundle/Entity/WidgetRepository.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Entity/WidgetRepository.php");
    }
}
