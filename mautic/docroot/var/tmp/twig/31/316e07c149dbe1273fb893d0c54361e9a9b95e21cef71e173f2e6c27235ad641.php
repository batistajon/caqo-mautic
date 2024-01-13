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

/* @bundles/CategoryBundle/Event/CategoryTypesEvent.php */
class __TwigTemplate_3f597fcdf58007c7602e00f9e5440b79051f9d98082883842146dde191895ff3 extends Template
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

namespace Mautic\\CategoryBundle\\Event;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class CategoryTypesEvent.
 */
class CategoryTypesEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * Returns the array of Category Types.
     *
     * @return array
     */
    public function getCategoryTypes()
    {
        if (!array_key_exists('global', \$this->types)) {
            // Alphabetize once
            asort(\$this->types);

            \$this->types = array_merge(
                ['global' => 'mautic.category.global'],
                \$this->types
            );
        }

        return \$this->types;
    }

    /**
     * Adds the category type and label.
     *
     * @param string \$type
     * @param string \$label
     */
    public function addCategoryType(\$type, \$label = null)
    {
        if (is_int(\$type)) {
            \$type = \$label;
        }

        if (null === \$label) {
            \$label = 'mautic.'.\$type.'.'.\$type;
        }

        \$this->types[\$type] = \$label;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Event/CategoryTypesEvent.php";
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
        return new Source("", "@bundles/CategoryBundle/Event/CategoryTypesEvent.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Event/CategoryTypesEvent.php");
    }
}
