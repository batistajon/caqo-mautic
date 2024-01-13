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

/* @bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php */
class __TwigTemplate_d4eb9fb67cdbf1d8d6d1c8ef03751f22a7268d0d5bfbd76a51c75b56d6c268eb extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field\\Event;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Symfony\\Component\\EventDispatcher\\Event;

final class AddColumnBackgroundEvent extends Event
{
    /**
     * @var LeadField
     */
    private \$leadField;

    public function __construct(LeadField \$leadField)
    {
        \$this->leadField = \$leadField;
    }

    public function getLeadField(): LeadField
    {
        return \$this->leadField;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php");
    }
}
