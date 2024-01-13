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

/* @bundles/CoreBundle/Model/BuilderModelTrait.php */
class __TwigTemplate_04937b7937650f5135ff977755372dc6739e8164d28f6f13536b0b05296b4cfe extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Event\\BuilderEvent;

trait BuilderModelTrait
{
    /**
     * Get array of page builder tokens from bundles subscribed PageEvents::PAGE_ON_BUILD.
     *
     * @param array|string \$requestedComponents all | tokens | abTestWinnerCriteria
     *
     * @return array
     */
    public function getCommonBuilderComponents(\$requestedComponents, BuilderEvent \$event)
    {
        \$singleComponent = (!is_array(\$requestedComponents) && 'all' != \$requestedComponents);
        \$components      = [];

        if (!is_array(\$requestedComponents)) {
            \$requestedComponents = [\$requestedComponents];
        }
        foreach (\$requestedComponents as \$requested) {
            switch (\$requested) {
                case 'tokens':
                    \$components[\$requested] = \$event->getTokens();
                    break;
                case 'abTestWinnerCriteria':
                    \$components[\$requested] = \$event->getAbTestWinnerCriteria();
                    break;
                case 'slotTypes':
                    \$components[\$requested] = \$event->getSlotTypes();
                    break;
                case 'sections':
                    \$components[\$requested] = \$event->getSections();
                    break;
                default:
                    \$components['tokens']               = \$event->getTokens();
                    \$components['abTestWinnerCriteria'] = \$event->getAbTestWinnerCriteria();
                    \$components['slotTypes']            = \$event->getSlotTypes();
                    \$components['sections']             = \$event->getSections();
                    break;
            }
        }

        return (\$singleComponent) ? \$components[\$requestedComponents[0]] : \$components;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Model/BuilderModelTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Model/BuilderModelTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Model/BuilderModelTrait.php");
    }
}
