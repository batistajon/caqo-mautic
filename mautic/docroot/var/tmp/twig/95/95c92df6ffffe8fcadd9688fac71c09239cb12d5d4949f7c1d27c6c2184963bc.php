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

/* @bundles/CoreBundle/Event/DetermineWinnerEvent.php */
class __TwigTemplate_96ee9c19204d54c86fab24a0d61d2ec7914a054386566159ce5811e53f7a6d3b extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

class DetermineWinnerEvent extends Event
{
    /**
     * @var array{
     *             parent?: \\Mautic\\PageBundle\\Entity\\Page|\\Mautic\\EmailBundle\\Entity\\Email,
     *             children?: array<mixed>,
     *             page?: \\Mautic\\PageBundle\\Entity\\Page,
     *             email?: \\Mautic\\EmailBundle\\Entity\\Email
     *             }
     */
    private \$parameters;

    /**
     * @var array{
     *             winners: array,
     *             support?: mixed,
     *             supportTemplate?: string
     *             }
     */
    private \$abTestResults;

    /**
     * @param array{
     *   parent?: \\Mautic\\PageBundle\\Entity\\Page|\\Mautic\\EmailBundle\\Entity\\Email,
     *   children?: array<mixed>,
     *   page?: \\Mautic\\PageBundle\\Entity\\Page,
     *   email?: \\Mautic\\EmailBundle\\Entity\\Email
     * } \$parameters
     */
    public function __construct(array \$parameters)
    {
        \$this->parameters = \$parameters;
    }

    /**
     * @return array{
     *                parent?: \\Mautic\\PageBundle\\Entity\\Page|\\Mautic\\EmailBundle\\Entity\\Email,
     *                children?: array<mixed>,
     *                page?: \\Mautic\\PageBundle\\Entity\\Page,
     *                email?: \\Mautic\\EmailBundle\\Entity\\Email
     *                }
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    /**
     * @return array{
     *                winners:array,
     *                support?:mixed,
     *                supportTemplate?:string
     *                }
     */
    public function getAbTestResults()
    {
        return \$this->abTestResults;
    }

    /**
     * @param array{
     *   winners:array,
     *   support?:mixed,
     *   supportTemplate?:string
     * } \$abTestResults The following parameters are available:
     * - (required) winners - Array of IDs of the winners (empty array in case of a tie)
     * - (optional) support - Data passed to the view defined by supportTemplate below in order to render visual support for the winners (such as a graph, etc)
     * - (optional) supportTemplate - View notation to render content for the A/B stats modal. For example, `HelloWorldBundle:SubscribedEvents\\AbTest:graph.html.php`
     */
    public function setAbTestResults(array \$abTestResults): void
    {
        \$this->abTestResults = \$abTestResults;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/DetermineWinnerEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/DetermineWinnerEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/DetermineWinnerEvent.php");
    }
}
