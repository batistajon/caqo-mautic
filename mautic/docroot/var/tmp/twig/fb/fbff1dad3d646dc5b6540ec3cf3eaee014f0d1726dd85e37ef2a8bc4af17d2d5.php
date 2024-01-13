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

/* @bundles/LeadBundle/Field/Event/AddColumnEvent.php */
class __TwigTemplate_aad8b04bfedc27dc4c3794717a823038b328947fbcaa1d8171f0a59e5b31409a extends Template
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

final class AddColumnEvent extends Event
{
    /**
     * @var LeadField
     */
    private \$leadField;

    /**
     * @var bool
     */
    private \$shouldProcessInBackground;

    public function __construct(LeadField \$leadField, bool \$shouldProcessInBackground)
    {
        \$this->leadField                 = \$leadField;
        \$this->shouldProcessInBackground = \$shouldProcessInBackground;
    }

    public function getLeadField(): LeadField
    {
        return \$this->leadField;
    }

    public function shouldProcessInBackground(): bool
    {
        return \$this->shouldProcessInBackground;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Event/AddColumnEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Event/AddColumnEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Event/AddColumnEvent.php");
    }
}
